<?php

namespace Yuritsuki\Support\Tests\Support\Traits;

trait MockTrait
{
    protected function mockClass($className, $methods = [])
    {
        return $this
            ->getMockBuilder($className)
            ->onlyMethods($methods)
            ->getMock();
    }
}
