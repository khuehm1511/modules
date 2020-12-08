<?php

namespace Khuehm1511\Modules\Tests;

use Module;

class FacadeTest extends BaseTestCase
{
    /** @test */
    public function it_can_work_with_container()
    {
        $this->assertInstanceOf(\Khuehm1511\Modules\RepositoryManager::class, $this->app['modules']);
    }

    /** @test */
    public function it_can_work_with_facade()
    {
        $this->assertSame('Khuehm1511\Modules\Facades\Module', (new \ReflectionClass(Module::class))->getName());
    }
}