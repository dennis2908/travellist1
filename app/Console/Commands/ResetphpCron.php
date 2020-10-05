<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetphpCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resetphp:cron';

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
     * @return int
     */
    public function handle()
    {
        //return 0;
        shell_exec('service php-fpm restart');
     	\Log::info("Restart PHP  is working fine!");
    }
}
