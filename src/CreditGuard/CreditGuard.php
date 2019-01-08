<?php

namespace CreditGuard;


use CreditGuard\Consts\Language;
use CreditGuard\Requests\AbstractRequest;
use ReflectionClass;

class CreditGuard
{
    protected $url;

    /** @var string */
    private $user;

    /** @var string */
    private $password;

    /** @var string */
    private $terminalId;

    /** @var null|string */
    private $mid;


    /**
     * Client constructor.
     *
     * @param string      $url        Credit Guard gateway url (not webservice)
     * @param string      $user       Credit Guard username
     * @param string      $password   Credit Guard password
     * @param string      $terminalId Credit Guard terminal ID
     * @param string|null $mid        Credit Guard payment page ID (mid)
     */
    public function __construct(string $url, string $user, string $password, string $terminalId, string $mid = null)
    {
        $this->url        = $url;
        $this->user       = $user;
        $this->password   = $password;
        $this->terminalId = $terminalId;
        $this->mid        = $mid;
    }

    /**
     * Fill global attributes
     *
     * @param AbstractRequest $request
     *
     * @return AbstractRequest
     */
    public function autoFill(AbstractRequest $request)
    {
        if (method_exists($request, 'setTerminalNumber')) {
            if ($request->getTerminalNumber() === null) {
                $request->setTerminalNumber($this->terminalId);
            }
        }

        if (method_exists($request, 'setMid')) {
            if ($request->getMid() === null) {
                $request->setMid($this->mid);
            }
        }

        return $request;
    }

    public function execute(AbstractRequest $request)
    {
        $this->autoFill($request);

        $body = 'user=' . $this->user . '&password='
            . $this->password . '&int_in=' . (string)$request;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);


        // actual curl execution perform
        $result   = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error    = curl_error($ch);

        if (!empty($error)) {
            throw new \Exception($error);
        }

        /** If requested language is hebrew, convert result to utf-8 */
        if ($request->getLanguage() === Language::HEBREW) {
            $result = iconv("utf-8", "iso-8859-8", $result);
        }

        curl_close($ch);

        $reflect = new ReflectionClass($request->getResponseType());
        return $reflect->newInstanceArgs([$result]);
    }
}