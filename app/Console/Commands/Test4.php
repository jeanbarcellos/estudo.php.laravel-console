<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class Test4 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jean:test4';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testando com Banco de dados';

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
        $this->line('Executando o método ' . __METHOD__);
        $this->newLine();

        $this->table(
            ['Name', 'Email'],
            Company::all(['name', 'email'])->toArray()
        );
    }
}
