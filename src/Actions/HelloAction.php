<?php

namespace Bugsy\Actions;

use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Console\Command;

class HelloAction
{
    use AsAction;

    public string $commandSignature = 'hello:world';

    public string $commandDescription = 'Says Hello Loris';

    public bool $commandHidden = false;

    public function handle()
    {
        return 'Hello Loris';
    }

    public function asCommand(Command $command): void
    {
        $greeting = $this->handle();

        $command->getOutput()->success($greeting);
    }
}
