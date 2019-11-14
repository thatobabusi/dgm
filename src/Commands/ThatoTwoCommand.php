<?php

namespace Thato\Commands;

use Illuminate\Console\Command;

class ThatoTwoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'thatotwo';

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
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('cache:clear');
        $this->call('view:clear');
        $this->error('Finished!!!');
    }
}
