<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ReturnBook extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ReturnIssuedBook:returnbook';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return borrowed book';

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
        //
    }
}
