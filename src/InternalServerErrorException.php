<?php
namespace Exception;

/**
 * 500 Internal Server Error
 *
 * The server encountered an unexpected condition which prevented it
 * from fulfilling the request.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.5.1
 * @author Pavel Sterba
 */
class InternalServerErrorException extends ServerErrorException
{
    protected $message = '500 Internal Server Error';
    protected $code = 500;
}
