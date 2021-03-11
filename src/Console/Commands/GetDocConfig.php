<?php

namespace JsonStringfy\JsonStringfy\Console\Commands;

use Illuminate\Console\Command;

class GetDocConfig extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:conf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Installer configuration';

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
     * @return mixed
     */
    public function handle()
    {
        $this->callSilent('vendor:publish --tag=installerAssets --tag=installerConfig');
        $this->info('Configuration successfully installed');
    }
}
