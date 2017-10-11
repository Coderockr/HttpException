<?php
namespace Coderockr\HttpException;

/**
 * 422 Unprocessable Entity
 *
 * The 422 (Unprocessable Entity) status code means the server
 * understands the content type of the request entity (hence a
 * 415(Unsupported Media Type) status code is inappropriate), and the
 * syntax of the request entity is correct (thus a 400 (Bad Request)
 * status code is inappropriate) but was unable to process the contained
 * instructions.  For example, this error condition may occur if an XML
 * request body contains well-formed (i.e., syntactically correct), but
 * semantically erroneous, XML instructions.
 *
 * @link https://tools.ietf.org/html/rfc4918#section-11.2
 */
class UnprocessableEntityException extends ClientErrorException
{
    protected $message = '422 Unprocessable Entity';
    protected $code = 422;
}
