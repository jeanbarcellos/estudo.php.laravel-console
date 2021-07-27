<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class Test5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jean:test5 {userId : Id do usuário}';

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

        $userId = $this->argument('userId');

        $company = Company::find($userId);

        if ($company) {
            $this->comment('Exibindo dados do ID ' . $userId);

            $header = ['Key', 'Valor'];
            $rows = [];
            foreach ($company->toArray() as $key => $value) {
                $rows[] = [$key, $value];
            }

            $this->table($header, $rows);
            return;
        }

        $this->error('Not found company with ID ' . $userId);
        return;
    }
}
