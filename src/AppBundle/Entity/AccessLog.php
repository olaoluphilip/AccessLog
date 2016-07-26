<?php

namespace AppBundle\Entity;

/**
 * AccessLog
 */
class AccessLog
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hostname;

    /**
     * @var string
     */
    private $logname;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $stamp;

    /**
     * @var string
     */
    private $time;

    /**
     * @var string
     */
    private $request;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $responseBytes;

    /**
     * @var string
     */
    private $headerReferal;

    /**
     * @var string
     */
    private $headerUserAgent;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     *
     * @return AccessLog
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set logname
     *
     * @param string $logname
     *
     * @return AccessLog
     */
    public function setLogname($logname)
    {
        $this->logname = $logname;

        return $this;
    }

    /**
     * Get logname
     *
     * @return string
     */
    public function getLogname()
    {
        return $this->logname;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return AccessLog
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set stamp
     *
     * @param string $stamp
     *
     * @return AccessLog
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;

        return $this;
    }

    /**
     * Get stamp
     *
     * @return string
     */
    public function getStamp()
    {
        return $this->stamp;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return AccessLog
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set request
     *
     * @param string $request
     *
     * @return AccessLog
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get request
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return AccessLog
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set responseBytes
     *
     * @param string $responseBytes
     *
     * @return AccessLog
     */
    public function setResponseBytes($responseBytes)
    {
        $this->responseBytes = $responseBytes;

        return $this;
    }

    /**
     * Get responseBytes
     *
     * @return string
     */
    public function getResponseBytes()
    {
        return $this->responseBytes;
    }

    /**
     * Set headerReferal
     *
     * @param string $headerReferal
     *
     * @return AccessLog
     */
    public function setHeaderReferal($headerReferal)
    {
        $this->headerReferal = $headerReferal;

        return $this;
    }

    /**
     * Get headerReferal
     *
     * @return string
     */
    public function getHeaderReferal()
    {
        return $this->headerReferal;
    }

    /**
     * Set headerUserAgent
     *
     * @param string $headerUserAgent
     *
     * @return AccessLog
     */
    public function setHeaderUserAgent($headerUserAgent)
    {
        $this->headerUserAgent = $headerUserAgent;

        return $this;
    }

    /**
     * Get headerUserAgent
     *
     * @return string
     */
    public function getHeaderUserAgent()
    {
        return $this->headerUserAgent;
    }
}
