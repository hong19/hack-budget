<?php

namespace App\Http\Controllers;

use App\ShareFood;
use Illuminate\Http\Request;

use App\Http\Requests;

class ShareFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shareFoods = ShareFood::all();

        $results = [];
        foreach ($shareFoods as $shareFood) {
            $foods = $shareFood->foods;
            $foodAry = [];
            //var_dump($foods);
            foreach ($foods as $food) {
                array_push($foodAry, [
                    'name' => $food->name,
                    'cal' => $food->cal
                ]);
            }

            array_push($results, [
                'share_food_id' => $shareFood->id,
                'user_name' => $shareFood->user_name,
                'personal_price' => $shareFood->personal_price,
                'max_person' => $shareFood->max_person,
                'current_person' => $shareFood->current_person,
                'address' => $shareFood->address,
                'food_list' => $foodAry
            ]);
        }

        return json_encode($results, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('share-food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
