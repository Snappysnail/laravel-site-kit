<?php

namespace Snappysnail\LaravelSiteKit\Commands;

use Illuminate\Console\Command;

class LaravelSiteKitCommand extends Command
{
    public $signature = 'laravel-site-kit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
