<?php

namespace Kema\Kema\exception;

use Exception;

class NotFoundException extends Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}