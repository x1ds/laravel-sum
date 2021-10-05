<?php

namespace Nazububu\LaravelSum\Tests;

use Mockery;
use Mockery\MockInterface;
use PHPUnit\Framework\TestCase;

use Illuminate\Contracts\Foundation\Application;

use Nazububu\LaravelSum\Sum;
use Nazububu\LaravelSum\SumServiceProvider;

/**
 * Class SumServiceProviderTest
 *
 * @package Nazububu\LaravelSum\Tests
 */
class SumServiceProviderTest extends TestCase
{
    /**
     * @var MockInterface $mockApp
     */
    protected MockInterface $mockApp;

    /**
     * @var SumServiceProvider $provider
     */
    protected SumServiceProvider $provider;

    /**
     * Some work to do before each test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->mockApp = Mockery::mock(Application::class);
        $this->provider = new SumServiceProvider($this->mockApp);
    }

    /**
     * Test register method for SumServiceProvider
     *
     * @return void
     */
    public function testRegister(): void
    {
        $this->mockApp->shouldReceive('bind')
            ->once()
            ->andReturnUsing(function ($name, $closure) {
                $this->assertEquals('laravel-sum', $name);
                $this->assertInstanceOf(Sum::class, $closure());
            });

        $this->provider->register();
    }

    /**
     * Test provides method in SumServiceProvider
     *
     * @return void
     */
    public function testProvides(): void
    {
        $expected = ['laravel-sum'];
        $actual = $this->provider->provides();

        $this->assertEquals($expected, $actual);
    }
}
