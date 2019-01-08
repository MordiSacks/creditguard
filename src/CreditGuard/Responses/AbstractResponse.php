<?php

namespace CreditGuard\Responses;


use Carbon\Carbon;

class AbstractResponse
{
    /** @var \SimpleXMLElement */
    protected $xml;


    /** @var string|null Request name for CG Gateway */
    public $command;

    /** @var Carbon|null Requested date and time */
    public $dateTime;

    /**
     * @var string|null
     *
     * ID of request, which is returned in the response.
     * requestId is limited to 20 characters
     */
    public $requestId;

    /** @var null|string ID of transaction */
    public $tranId;

    /** @var null|string Response result code */
    public $result;

    /** @var null|string Response text message */
    public $message;

    /** @var null|string Response text message for non-technical personnel */
    public $userMessage;

    /**
     * @var null|string
     *
     * Additional information if available, which can assist
     * you with the returned response
     */
    public $additionalInfo;

    /** @var null|string XML version */
    public $version;

    /** @var null|string Hebrew/English */
    public $language;

    public function __construct(string $xmlString)
    {
        $this->xml = simplexml_load_string($xmlString);

        $this->initResponseFields();

        $this->init();
    }

    protected function init() { }

    protected function initResponseFields()
    {
        $this->command        = static::normalize($this->xml->response->command);
        $this->dateTime       = static::normalize($this->xml->response->dateTime, 'dateTime');
        $this->requestId      = static::normalize($this->xml->response->requestId);
        $this->tranId         = static::normalize($this->xml->response->tranId);
        $this->result         = static::normalize($this->xml->response->result);
        $this->message        = static::normalize($this->xml->response->message);
        $this->userMessage    = static::normalize($this->xml->response->userMessage);
        $this->additionalInfo = static::normalize($this->xml->response->additionalInfo);
        $this->version        = static::normalize($this->xml->response->version);
        $this->language       = static::normalize($this->xml->response->language);
    }

    public function tosXml()
    {
        return $this->xml;
    }


    /**
     * @param mixed|\SimpleXMLElement $value
     * @param string                  $type
     * @param null                    $default
     *
     * @return Carbon|null|mixed
     */
    public static function normalize($value, $type = 'string', $default = null)
    {
        switch ($type) {
            case 'string':
            case 'int':
            case 'bool':
                if (strlen((string)$value) > 0) {

                    settype($value, $type);
                } else {
                    $value = $default;
                }

                break;

            case 'array':
                if ($value->count() > 0) {

                    $tmp = [];
                    foreach ($value->children() as $child) {
                        $tmp[$child->getName()] = (string)$child;
                    }
                    $value = $tmp;
                    unset($tmp);
                } else {
                    $value = [];
                }
                break;

            case 'dateTime':
                if (strlen((string)$value) === 0) {
                    $value = $default;
                }
                $value = Carbon::parse($value);
                break;

            default:

        }

        return $value;
    }

    public static function _getterToField($name)
    {
        return lcfirst(substr($name, 3));
    }

    public function toArray()
    {
        $array = [
            'command'        => $this->command,
            'dateTime'       => $this->dateTime,
            'requestId'      => $this->requestId,
            'tranId'         => $this->tranId,
            'result'         => $this->result,
            'message'        => $this->message,
            'userMessage'    => $this->userMessage,
            'additionalInfo' => $this->additionalInfo,
            'version'        => $this->version,
            'language'       => $this->language,
            'response'       => [],
        ];

        foreach (get_class_methods($this) as $method) {
            if (substr($method, 0, 3) === 'get') {
                $res = call_user_func([$this, $method]);

                if (is_object($res) && method_exists($res, 'toArray')) {
                    $res = $res->toArray();
                }

                if (is_array($res)) {
                    $res = array_map(function ($item) {
                        if (is_object($item) && method_exists($item, 'toArray')) {
                            return $item->toArray();
                        }
                        return $item;
                    }, $res);
                }

                $array['response'][lcfirst(substr($method, 3))] = $res;
            }
        }

        return $array;
    }

}