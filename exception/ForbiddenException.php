<?php

namespace Kema\Kema\exception;

use Exception;

class ForbiddenException extends Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}