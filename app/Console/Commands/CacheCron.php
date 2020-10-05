<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Artisan;

class CacheCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:cron';

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
       // return 0;
               \Log::info("Clear Cache is working fine!");

           Artisan::call('optimize:clear');


     

        /*

           Write your database logic we bellow:

           Item::create(['name'=>'hello new']);

        */

      


	 // $this->info('Demo:Cron Cummand Run successfully!');	

    }
}
