<?php

namespace Github\Exception;

class PullsGetInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \Github\Model\BasicError
     */
    private $basicError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\BasicError $basicError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Internal Error');
        $this->basicError = $basicError;
        $this->response = $response;
    }
    public function getBasicError(): \Github\Model\BasicError
    {
        return $this->basicError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}