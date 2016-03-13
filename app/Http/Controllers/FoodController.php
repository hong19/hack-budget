<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

use App\Http\Requests;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'food index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function getCandidate(Request $request)
    {

        if ($request['staple_enable']) {
            $stapleAry = $this->getCandidateByType($request['staple_budget'], 1);
        } else {
            $stapleAry = $this->getCandidateByType($request['total_budget'], 1);
        }

        if ($request['snack_enable']) {
            $snackAry = $this->getCandidateByType($request['snack_budget'], 2);
        } else {
            $snackAry = $this->getCandidateByType($request['total_budget'], 2);
        }

        if ($request['drink_enable']) {
            $drinkAry = $this->getCandidateByType($request['drink_budget'], 3);
        } else {
            $drinkAry = $this->getCandidateByType($request['total_budget'], 3);
        }

        $results = [
            'staple' => $stapleAry,
            'snack' => $snackAry,
            'drink' => $drinkAry
        ];

        return json_encode($results, JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param Request $request
     * @return array
     */
    protected function getCandidateByType($budget, $foodType)
    {
        $foods = Food::where('price', '<=', $budget)
            ->where('price', '>', 0)
            ->where('food_type_id', '=', $foodType)
            ->get();

        $foodAry = [];
        /** @var Food $staple */
        foreach ($foods as $staple) {
            array_push($foodAry, [
                'name' => $staple->name,
                'price' => $staple->price,
                'cal' => $staple->cal,
                'store_name' => $staple->store->store_name
            ]);
        }

        return $foodAry;
    }
}
