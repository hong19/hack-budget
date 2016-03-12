<?php

namespace App\Console\Commands;

use App\Store;
use Illuminate\Console\Command;

class InsertStores extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:insert_stores {filePath}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'insert stores into database';

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
     * @return mixed
     */
    public function handle()
    {
        $this->line('insert stores start');

        $filePath = $this->argument('filePath');
        $fileContent = file($filePath);

        //dd($fileContent);
        for ($i = 1 ; $i < sizeof($fileContent) ; $i++) {
            $values = explode(',', $fileContent[$i]);
            Store::create([
                'store_name' => $values[0],
                'phone' => $values[2],
                'address' => $values[3]
            ]);

        }

        $this->line('insert stores complete');
    }
}
