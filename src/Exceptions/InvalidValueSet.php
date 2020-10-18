<?php

namespace codicastudio\csp\Exceptions;

use Exception;

class InvalidValueSet extends Exception
{
    public static function noneMustBeOnlyValue(): self
    {
        return new self('The keyword none can only be used on its own');
    }
}
