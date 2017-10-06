<?php
namespace Exception;

/**
 * 415 Unsupported Media Type
 *
 * The server is refusing to service the request because the entity of
 * the request is in a format not supported by the requested resource
 * for the requested method.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.16
 * @author Pavel Sterba
 */
class UnsupportedMediaTypeException extends ClientErrorException
{
    protected $message = '415 Unsupported Media Type';
    protected $code = 415;
}
