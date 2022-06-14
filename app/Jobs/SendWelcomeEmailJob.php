<?php

namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWelcomeEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->details = $details;
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
         for ($i = 0; $i < 10000; $i++) {
        \App\Models\User::create([
            'name' => uniqid(),
            //'email' => '',
            'password' => uniqid(),
        ]);
    }
    }
}
