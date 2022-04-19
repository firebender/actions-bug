<?php

namespace Bugsy\Tests;

use Bugsy\Actions\HelloAction;

class ActionTest extends TestCase
{
    /**
     * @return void
     *
     * @test
     */
    public function can_call_hello_action(): void
    {
        // $this->expectError();

        $this->artisan('hello-world')->assertExitCode(0);
    }


}
