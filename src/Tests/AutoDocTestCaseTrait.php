<?php

namespace Yuritsuki\Support\AutoDoc\Tests;

use Yuritsuki\Support\AutoDoc\Http\Middleware\AutoDocMiddleware;

trait AutoDocTestCaseTrait
{
    /**
     * Disabling documentation collecting on current test
     */
    public function skipDocumentationCollecting()
    {
        AutoDocMiddleware::$skipped = true;
    }
}
