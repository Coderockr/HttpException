<?php
namespace Exception;

/**
 * 400 Bad Request
 *
 * The request could not be understood by the server due to malformed
 * syntax. The client SHOULD NOT repeat the request without
 * modifications.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.1
 * @author Pavel Sterba
 */
class BadRequestException extends ClientErrorException
{
    protected $message = '400 Bad Request';
    protected $code = 400;
}
