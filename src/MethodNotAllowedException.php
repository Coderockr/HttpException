<?php
namespace Exception;

/**
 * 405 Method Not Allowed
 *
 * The method specified in the Request-Line is not allowed for the
 * resource identified by the Request-URI. The response MUST include an
 * Allow header containing a list of valid methods for the requested
 * resource.
 *
 * @author Pavel Sterba
 */
class MethodNotAllowedException extends ClientErrorException
{
    protected $message = '405 Method Not Allowed';
    protected $code = 405;
}
