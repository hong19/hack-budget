<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FoodControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_api_get_food_candidate_total_budget()
    {
        /*arrange*/


        $requestData = [
            'total_budget' => 100,
            'staple_enable' => false,
            'staple_budget' => 0,
            'snack_enable' => false,
            'snack_budget' => 0,
            'drink_enable' => false,
            'drink_budget' => 0
        ];

        /*act*/

        $this->json( 'GET','/food/candidate', $requestData, array());

        $response = $this->response;

        /*assert*/
        $this->assertEquals(200, $response->status());

        dd($response->content());
    }
}
