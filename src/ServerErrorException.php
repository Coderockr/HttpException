<?php
namespace Exception;

/**
 * Parent class for 5xx server error exceptions.
 *
 * @author Pavel Sterba
 */
abstract class ServerErrorException extends Exception
{
    protected $message = 'Server Error 5xx';
    protected $code = 5;
}
