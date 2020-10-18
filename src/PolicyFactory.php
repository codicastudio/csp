<?php

namespace codicastudio\csp;

use codicastudio\csp\Exceptions\InvalidcspPolicy;
use codicastudio\csp\Policies\Policy;

class PolicyFactory
{
    public static function create(string $className): Policy
    {
        $policy = app($className);

        if (! is_a($policy, Policy::class, true)) {
            throw InvalidcspPolicy::create($policy);
        }

        if (! empty(config('csp.report_uri'))) {
            $policy->reportTo(config('csp.report_uri'));
        }

        return $policy;
    }
}
