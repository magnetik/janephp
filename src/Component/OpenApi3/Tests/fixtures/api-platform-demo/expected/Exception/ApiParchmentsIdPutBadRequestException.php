<?php

namespace ApiPlatform\Demo\Exception;

class ApiParchmentsIdPutBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}