<?php

namespace CozyFex\LaravelDesign\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cozyfex:design:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CozyFex Laravel Design Install';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->callSilent('vendor:publish', ['--tag' => 'CozyFex-Laravel-Design']);
        $this->info('[CozyFex Laravel Design] was installed successfully.');

        return 0;
    }
}
