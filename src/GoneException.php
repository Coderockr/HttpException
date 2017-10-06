<?php
namespace Exception;

/**
 * 410 Gone
 *
 * The requested resource is no longer available at the server and no
 * forwarding address is known. This condition is expected to be
 * considered permanent. Clients with link editing capabilities SHOULD
 * delete references to the Request-URI after user approval. If the
 * server does not know, or has no facility to determine, whether or not
 * the condition is permanent, the status code 404 (Not Found) SHOULD be
 * used instead. This response is cacheable unless indicated otherwise.
 *
 * The 410 response is primarily intended to assist the task of web
 * maintenance by notifying the recipient that the resource is
 * intentionally unavailable and that the server owners desire that
 * remote links to that resource be removed. Such an event is common for
 * limited-time, promotional services and for resources belonging to
 * individuals no longer working at the server's site. It is not
 * necessary to mark all permanently unavailable resources as "gone" or
 * to keep the mark for any length of time -- that is left to the
 * discretion of the server owner.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.11
 * @author Pavel Sterba
 */
class GoneException extends ClientErrorException
{
    protected $message = '410 Gone';
    protected $code = 410;
}
