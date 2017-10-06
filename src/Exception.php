<?php
namespace Exception;

abstract class Exception extends \Exception
{
    protected $description;
    protected $message = '500 Internal Server Error';
    protected $code = 500;

    public function __construct($description = null, \Exception $previous = null)
    {
        if (!$description) {
            $description = $message;
        }
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
