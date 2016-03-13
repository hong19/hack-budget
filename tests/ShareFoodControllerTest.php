<?php

use App\ShareFood;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ShareFoodControllerTest extends TestCase
{

    public function test_api_index_all_share_foods()
    {
        /*arrange*/
        $requestData = [];

        /*act*/
        $this->json( 'GET','/share-food', $requestData, array());

        $response = $this->response;

        /*assert*/
        $this->assertEquals(200, $response->status());
    }

    public function test_many_to_many()
    {
        $shareFood = ShareFood::find(1);

        $shareFood->foods()->attach(16);


        dd($shareFood->foods);


    }
}
