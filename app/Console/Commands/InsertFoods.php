<?php
namespace App\Console\Commands;

use App\Food;
use App\Store;
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

        for ($i = 2; $i < sizeof($fileContent) ; $i++) {
            $values = explode(',', $fileContent[$i]);
            $store = Store::where('store_name', '=', $values[0])->firstOrFail();

            switch ($values[3]) {
                case '主食':
                    $foodType = '1';
                    break;
                case '麵包':
                    $foodType = '2';
                    break;
                case '飲料':
                    $foodType = '3';
                    break;
                default:
                    $foodType = '1';
                    break;
            }

            $price = str_replace('$', '', $values[2]);
            $this->line($price);

            Food::create([
                'name' => $values[1],
                'price' => $price,
                'cal' => $values[4],
                'picture_url' => $values[5],
                'store_id' => $store->id,
                'food_type_id' => $foodType
            ]);
        }

        $this->line('insert foods complete');
    }
}


