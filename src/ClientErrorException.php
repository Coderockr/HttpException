<?php
namespace Exception;

/**
 * Parent class for 4xx client error exceptions.
 *
 * @author Pavel Sterba
 */
abstract class ClientErrorException extends Exception
{
    protected $message = 'Client Error 4xx';
    protected $code = 4;
}
