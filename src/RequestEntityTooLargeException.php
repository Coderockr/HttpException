<?php
namespace Exception;

/**
 * 413 Request Entity Too Large
 *
 * The server is refusing to process a request because the request
 * entity is larger than the server is willing or able to process. The
 * server MAY close the connection to prevent the client from continuing
 * the request.
 *
 * If the condition is temporary, the server SHOULD include a Retry-
 * After header field to indicate that it is temporary and after what
 * time the client MAY try again.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.14
 * @author Pavel Sterba
 */
class RequestEntityTooLargeException extends ClientErrorException
{
    protected $message = '413 Request Entity Too Large';
    protected $code = 413;
}
