<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/*
Argumentos
{name}      : Obrigatório
{name?}     : Opcional
{name=Jean} : Opcional com valor default

Opções
{--isvalid}       : Flag/boolean (false por padrão, se não informado)
{--port=}         : Defina uma valor para opção
{----secury=ssl}  : Defina uma valor para opção, caso não defina, segue o padrão
{--u|username=}   : Definição de atalho de opções
 */
class Test3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jean:test3
                            {nome : Nome da pessoa}
                            {email : Email da pessoa}
                            {sexo? : Sexo da pessoa (opcional)}
                            {idade=18 : Idade da pessoa (opcional com default)}
                            {--sendmail : Deve enviar e-mail?}
                            {--port= : Número da porta}
                            {--secury=ssl : Protocolo de segurança}
                            {--u|username= : Usuário do serviço de email}
                            ';

    protected $help = 'Demonstration of custom commands.';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testando criação de comando com argumentos';

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

        $this->line('Arguments:');
        $this->table(
            ['Argument', 'Value'],
            [
                ['nome', $this->argument('nome')],
                ['email', $this->argument('email')],
                ['sexo', $this->argument('sexo')],
                ['idade', $this->argument('idade')],
            ]
        );

        $this->newLine();

        $this->line('Options:');
        $this->table(
            ['Option', 'Value'],
            [
                ['sendmail', $this->option('sendmail') ? 'true' : 'false'],
                ['port', $this->option('port')],
                ['secury', $this->option('secury')],
                ['username', $this->option('username')],
            ]
        );

    }
}

/*
Execução do comandos:

$ php artisan jean:test3
Not enough arguments (missing: "nome, email")

$ php artisan jean:test3 Jean jeanbarcellos@hotmail.com
Nome: Jean
email: jeanbarcellos@hotmail.com
Sexo:
Idade: 18

$ php artisan jean:test3 "Jean Barcellos"  jeanbarcellos@hotmail.com
Nome: Jean Barcellos
email: jeanbarcellos@hotmail.com
Sexo:
Idade: 18

 */
