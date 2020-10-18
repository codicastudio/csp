<?php

namespace codicastudio\csp\Exceptions;

use codicastudio\csp\Policies\Policy;
use Exception;

class InvalidcspPolicy extends Exception
{
    public static function create($class): self
    {
        $className = get_class($class);

        return new self("The CSP class `{$className}` is not valid. A valid policy extends ".Policy::class);
    }
}
