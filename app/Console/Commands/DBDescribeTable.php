<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DBDescribeTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:describe {table : Table name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show details about the structure of the table.';

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
        return 0;
    }
}
