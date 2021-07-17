<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jean:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testando';

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

        dump($_SERVER['argv']);
        dump($this->input);

        echo "oi";

        return 0;
    }
}
