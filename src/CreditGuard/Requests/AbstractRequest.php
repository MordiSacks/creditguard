<?php

namespace CreditGuard\Requests;

use Carbon\Carbon;
use CreditGuard\Consts\Language;
use CreditGuard\Responses\AbstractResponse;

abstract class AbstractRequest
{
    /** @var \SimpleXMLElement */
    protected $xml;

    /** @var null|string */
    protected $command = null;

    /** @var null|string */
    protected $responseType = null;

    /** @var \SimpleXMLElement */
    protected $commandXml;


    /**
     * AbstractRequest constructor.
     */
    public function __construct()
    {
        $this->xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><ashrait></ashrait>');

        $this->xml->addChild('request');

        $this->setCommand($this->getCommandName());

        $this->setRequestId()
             ->setDateTime(Carbon::now())
             ->setVersion('2000')
             ->setLanguage(Language::ENGLISH)
             ->setMayBeDuplicate();

        $this->commandXml = $this->xml->request->addChild($this->getCommandName());
    }

    /**
     * Request name for CG Gateway
     *
     * @return string
     */
    public function getCommand() { return (string)$this->xml->request->command; }

    /**
     * <b>CG Type:</b> Alphanumeric
     * <br>
     * <b>CG Value Mandatory:</b> <font color="red">Yes</font>
     * <br>
     *
     * Request name for CG Gateway.
     *
     * @param string $value
     *
     * @return $this
     */
    protected function setCommand(string $value)
    {
        $this->xml->request->command = $value;
        return $this;
    }


    /**
     * Request Id
     *
     * @return string
     */
    public function getRequestId() { return (string)$this->xml->request->requestId; }

    /**
     * <b>CG Type:</b> String (20)
     * <br>
     * <b>CG Value Mandatory:</b> <font color="orange">Conditionally required</font>
     * <br>
     *
     * ID of request, which is returned in the response.
     * requestId is limited to 20 characters.
     * If mayBeDuplicate is true (value 1)
     * then field requestId is required &
     * mandatory.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setRequestId(string $value = null)
    {
        $this->xml->request->requestId = (string)$value;
        return $this;
    }


    /**
     * Requested date and time
     *
     * @return Carbon
     */
    public function getDateTime() { return Carbon::parse((string)$this->xml->request->dateTime); }

    /**
     * <b>CG Type:</b> Date & time
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Requested date and time.
     * YYYY-MM-DD hh:mm:ss
     *
     * @param string|Carbon|\DateTime $value
     *
     * @return $this
     */
    public function setDateTime($value = null)
    {
        if (is_null($value)) {
            $this->xml->request->dateTime = (string)$value;
            return $this;
        }

        /** Convert to string if is DateTime */
        if ($value instanceof \DateTime) {
            $value = $value->format('Y-m-d H:i:s');
        }

        $this->xml->request->dateTime = (string)Carbon::parse($value)->format('Y-m-d H:i:s');
        return $this;
    }


    /**
     * XML version.
     *
     * @return string
     */
    public function getVersion() { return (string)$this->xml->request->version; }

    /**
     * <b>CG Type:</b> Value: 1001
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * XML version.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setVersion(string $value = null)
    {
        $this->xml->request->version = (string)$value;
        return $this;
    }


    /**
     * Language of "message" and "user message" fields -
     * Hebrew/English.
     *
     * @return string
     */
    public function getLanguage() { return (string)$this->xml->request->language; }

    /**
     * <b>CG Type:</b> HEB | ENG
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * Language of "message" and "user message" fields -
     * Hebrew/English.
     *
     * @see Language
     *
     * @param string $value
     *
     * @return $this
     */
    public function setLanguage(string $value = null)
    {
        $this->xml->request->language = (string)$value;
        return $this;
    }


    /**
     * Get MayBeDuplicate
     *
     * @return string
     */
    public function getMayBeDuplicate() { return (string)$this->xml->request->mayBeDuplicate; }

    /**
     * <b>CG Type:</b> 0 | 1 | empty
     * <br>
     * <b>CG Value Mandatory:</b> No
     * <br>
     * For transaction resent in case of transaction timeout.
     * This Option is available only when installed.
     * If <mayBeDuplicate> is true (value 1), CG
     * Gateway checks whether the transaction has
     * already been made and if all the details of the
     * request are identical to the existing request. An
     * error is returned for invalid requests; for
     * identical requests, CG Gateway checks the
     * completion status of the existing request. If the
     * request is complete, the response is sent again. If
     * the request is incomplete, the system completes
     * the transaction and returns the response to the
     * user.
     * When using mayBeDuplicate then filed
     * requestId is mandatory and required to be unique
     * for each transaction.
     *
     * @param int|string|bool $value
     *
     * @return $this
     */
    public function setMayBeDuplicate($value = null)
    {
        if (is_null($value)) {
            $this->xml->request->mayBeDuplicate = (string)$value;
        } else {
            $this->xml->request->mayBeDuplicate = $value ? '1' : '0';
        }

        return $this;
    }


    /**
     * Get command name
     *
     * @return string
     */
    public function getCommandName()
    {
        if ($this->command) {
            return $this->command;
        }

        $command = get_called_class();

        //$command = preg_replace('#^.*\\\#', '', $command);
        $command = preg_replace_callback('#^.*\\\(Redirect)?(.*)Request#', function ($matches) {
            [$FQCN, $redirect, $command] = $matches;

            return $command;
        }, $command);


        $command = lcfirst($command);

        $this->command = $command;

        return $this->command;
    }

    public function getResponseType()
    {
        if ($this->responseType) {
            return $this->responseType;
        }

        $responseType = get_called_class();

        //$responseType = preg_replace('#^.*\\\#', '', $responseType);
        $responseType = preg_replace_callback('#^.*\\\(Redirect)?(.*)Request#', function ($matches) {
            [$FQCN, $redirect, $responseType] = $matches;

            return $responseType;
        }, $responseType);


        $responseType = 'CreditGuard\\Responses\\' . $responseType . 'Response';

        if (class_exists($responseType)) {
            $this->responseType = $responseType;
        } else {
            $this->responseType = AbstractResponse::class;
        }

        return $this->responseType;
    }

    /**
     * @param $value
     *
     * @return string|\DateTime|Carbon
     */
    public static function normalizeDate($value)
    {
        /** Convert to string if is DateTime */
        if ($value instanceof \DateTime) {
            return (string)$value->format('Y-m-d');
        }

        return (string)Carbon::parse($value)->format('Y-m-d');
    }


    /**
     * @param string $parameter Credit Guard tag name
     * @param mixed  $value
     *
     * @return $this
     */
    public function set(string $parameter, $value)
    {
        $this->commandXml->{$parameter} = (string)$value;
        return $this;
    }

    /**
     * @param string      $parameter Credit Guard tag name
     * @param null|string $type
     * @param null        $default
     *
     * @return string|null
     */
    public function get(string $parameter, $type = 'string', $default = null)
    {
        if (!isset($this->commandXml->{$parameter})) {
            return $default;
        }

        $result = $this->commandXml->{$parameter};

        if (!is_null($type)) {
            settype($result, $type);
        }

        return $result;
    }

    public function __call($name, $arguments)
    {
        $operation = mb_substr($name, 0, 3);
        $parameter = lcfirst(mb_substr($name, 3));
        switch ($operation) {
            case 'set':
                return $this->set($parameter, $arguments[0]);
                break;
            case 'get':
                return $this->get($parameter, $arguments[0] ?? null);
                break;
        }

        throw new \BadFunctionCallException();
    }

    public function __toString()
    {
        return $this->xml->asXML();
    }
}