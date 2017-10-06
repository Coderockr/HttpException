<?php
namespace Coderockr\HttpException;

/**
 * 408 Request Timeout
 *
 * The client did not produce a request within the time that the server
 * was prepared to wait. The client MAY repeat the request without
 * modifications at any later time.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.9
 * @author Pavel Sterba
 */
class RequestTimeoutException extends ClientErrorException
{
    protected $message = '408 Request Timeout';
    protected $code = 408;
}
