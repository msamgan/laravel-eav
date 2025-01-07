<?php

namespace Msamgan\LaravelEav\Commands;

use Illuminate\Console\Command;

class LaravelEavCommand extends Command
{
    public $signature = 'laravel-eav';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
