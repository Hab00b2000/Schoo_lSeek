<?php

namespace App\Http\Controllers;

use App\Models\Gener;
use App\Http\Requests\StoreGenerRequest;
use App\Http\Requests\UpdateGenerRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class GenerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $geners = Gener::get();
       // return JsonResource::response(" ",$geners);
      return response()->json($geners);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gener $gener)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenerRequest $request, Gener $gener)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gener $gener)
    {
        //
    }
}
