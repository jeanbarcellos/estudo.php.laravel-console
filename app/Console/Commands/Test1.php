<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * @see https://laravel.com/docs/8.x/artisan#writing-output
 */
class Test1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jean:test1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testando escritas na tela';

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

        $this->line('Escrevendo uma linha 1');
        $this->line('Escrevendo uma linha 2');
        $this->newLine();

        $this->info('Escrever string como saída de informação');
        $this->newLine();

        $this->comment('Escrever string como saída de comentário');
        $this->newLine();

        $this->question('Escrever string como saída da pergunta');
        $this->newLine();

        $this->error('Escrever string como saída de erro');
        $this->newLine();

        $this->warn('Escrever string como saída de aviso');
        $this->newLine();

        $this->alert('Escrever string em uma caixa de alerta');
        $this->newLine();

        $this->table(
            ['Name', 'Email'],
            [
                ['name' => 'Linha 1', 'email' => 'test@teste.com'],
                ['name' => 'Linha 2', 'email' => 'test@teste.com'],
                ['name' => 'Linha 3', 'email' => 'test@teste.com'],
            ]
        );
    }
}
