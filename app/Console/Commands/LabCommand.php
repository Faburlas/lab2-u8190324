<?php

namespace App\Console\Commands;

use App\Models\Buyer;
use Illuminate\Console\Command;

class LabCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'buyer:count-addresses {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Count addresses for user with specific {id}';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo (Buyer::where('id', $this->argument('id'))->withCount('addresses')->get())[0]->addresses_count;
        return 0;
    }
}
