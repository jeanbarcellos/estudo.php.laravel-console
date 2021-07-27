<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * BUG
 * @see https://laravel.com/docs/8.x/artisan#prompting-for-input
 * @see https://github.com/lorisleiva/laravel-deployer/issues/163
 */
class Test2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jean:test2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testando interação com o usuário (solicitação de dados)';

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

        $nome = $this->ask('Qual o seu nome?');
        $idade = $this->ask('Qual a sua idade?');

        $this->line('Seus dados são os seguintes:');
        $this->line('Nome: ' . $nome);
        $this->line('Idade: ' . $idade);
        $this->newLine();

        $password = $this->secret('Informe uma senha?');
        $this->line('Senha: ' . $idade);
        $this->newLine();

        if ($this->confirm('Você deseja continuar? [y|n]')) {
            $this->info('Ação confirmada');
        } else {
            $this->info('Ação negada');
        }
    }
}
