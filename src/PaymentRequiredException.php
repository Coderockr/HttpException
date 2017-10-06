<?php
namespace Coderockr\HttpException;

/**
 * 402 Payment Required
 *
 * This code is reserved for future use.
 *
 * @link http://tools.ietf.org/html/rfc2616#section-10.4.3
 * @author Pavel Sterba
 */
class PaymentRequiredException extends ClientErrorException
{
    protected $message = '402 Payment Required';
    protected $code = 402;
}
