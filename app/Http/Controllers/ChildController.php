<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Http\Requests\StoreChildRequest;
use App\Http\Requests\UpdateChildRequest;

class ChildController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.child');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildRequest $request)
    {
        $children = new Child;
        $children->name = $request->name;
        $children->fname = $request->fname;
        $children->mname = $request->mname;
        $children->birthday = $request->birthday;
        $children->bornplace = $request->bornplace;
        $children->gener = $request->gener;
        $children->userId = auth()->id();
        
        if ($children->save())
        {
           return response()->json($children);
        }
        else
        {
           dd('Not Done ????');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $children = Child::all()->where(Child::userId,auth()->id());
        return response()->json($children);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Child $child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildRequest $request, Child $child)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Child $child)
    {
        //
    }
}
