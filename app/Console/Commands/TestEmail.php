<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:test {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test email to verify SMTP configuration';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        $this->info("Attempting to send test email to: $email");

        try {
            Mail::raw('This is a test email sent from the Laravel application to verify your SMTP configuration.', function ($message) use ($email) {
                $message->to($email)
                    ->subject('SMTP Configuration Test - Success');
            });

            $this->info('Test email sent successfully! Please check your inbox (and spam folder).' + $email);
            return 0;
        } catch (\Exception $e) {
            $this->error('Failed to send email.');
            $this->error('Error Message: ' . $e->getMessage());
            Log::error('Mail Test Failed: ' . $e->getMessage());
            return 1;
        }
    }
}
