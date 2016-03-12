<?php

namespace App\Console\Commands;

use App\Food;
use App\FoodType;
use Illuminate\Console\Command;

class InsertFoods extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:insert_foods {filePath}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'insert foods into database';

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
        $this->line('insert foods start');

        $filePath = $this->argument('filePath');
        $fileContent = file($filePath);

        //dd($fileContent);

        for ($i = 1 ; $i < sizeof($fileContent) ; $i++) {
            $values = explode(',', $fileContent[$i]);
            Food::create([
                'name' => $values[1],
                'price' => $values[2],
                'cal' => $values[4],
                'picture_url' => $values[5]
            ]);
        }

        $this->line('insert foods complete');
    }
}


