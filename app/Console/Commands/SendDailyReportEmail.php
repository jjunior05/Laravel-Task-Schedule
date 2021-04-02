<?php

namespace App\Console\Commands;

use App\Mail\DailyReport;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyReportEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para enviar o relatório diário';

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
        // Envio do valor total dos relatórios
        $sales = 3450;
        Mail::to('junior_alecrim@hotmail.com')->send(new DailyReport($sales));
    }
}
