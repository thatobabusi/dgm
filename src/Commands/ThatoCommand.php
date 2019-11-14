<?php

namespace Thato\Commands;

use Illuminate\Console\Command;

class ThatoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'thato';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $this->error('Running Clear Cache Command. By Thato Babusi ~ 20190925');

        $this->info('');
        $this->info('Starting cache optimization.');
        $this->info('');

        $this->call('config:clear');
        $this->info('');

        $this->call('route:clear');
        $this->info('');

        $this->call('cache:clear');
        $this->info('');

        $this->call('view:clear');
        $this->info('');

        $this->error('Finished!!!');
    }
}
