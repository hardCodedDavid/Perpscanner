<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class LogMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Log a message to a file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // file_put_contents(storage_path('logs/tasks.log'), 'Task executed at ' . now() . PHP_EOL, FILE_APPEND);
        $token = env('TELEGRAM_TOKEN');
        $chatId = '5211241346';
        $params = [
            'chat_id' => $chatId,
            'text' => 'Cron Job Test',
            'parse_mode' => 'HTML'
        ];

        $apiUrl = "https://api.telegram.org/bot" . $token . "/sendMessage";

        Http::get($apiUrl, $params);
        file_put_contents(storage_path('logs/tasks.log'), 'Message Task executed successfully at ' . now() . PHP_EOL, FILE_APPEND);

        // return $response->body();

        $this->info('Message logged successfully!');
    }
}
