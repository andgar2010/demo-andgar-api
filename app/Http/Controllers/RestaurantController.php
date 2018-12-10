<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestaurantRequest;
use App\Http\Resources\Restaurant\RestaurantResource;
use App\Models\Restaurant;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestaurantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        // return RestaurantResource::collection(Restaurant::all());
        // return RestaurantResource::collection(Restaurant::paginate(100));


        //    return $category->restaurants; //All tuples
        return RestaurantResource::collection($category->restaurants); // Selected tuples from resource
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
    public function store(RestaurantRequest $request, Category $category)
    {
        $restaurant = new Restaurant($request->all());
        $category->restaurants()->save($restaurant);
        return response([
            'data' => new RestaurantResource($restaurant)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Restaurant $restaurant)
    {
        return new RestaurantResource($restaurant);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, Restaurant $restaurant)
    {
        $restaurant->update($request->all());
        return response(
            ['data'=> new RestaurantResource($restaurant)],
            Response::HTTP_CREATED
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Restaurant $restaurant)
    {
        $restaurant->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }


    /**
     * Show names
     */
    public function names()
    {
        return Restaurant::all()->lists('name');
    }
}


