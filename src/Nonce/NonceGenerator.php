<?php

namespace codicastudio\csp\Nonce;

interface NonceGenerator
{
    public function generate(): string;
}
