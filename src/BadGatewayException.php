<?php
namespace Exception;

/**
 * 502 Bad Gateway
 *
 * The server, while acting as a gateway or proxy, received an invalid
 * response from the upstream server it accessed in attempting to
 * fulfill the request.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.5.3
 * @author Pavel Sterba
 */
class BadGatewayException extends ServerErrorException
{
    protected $message = '502 Bad Gateway';
    protected $code = 502;
}
