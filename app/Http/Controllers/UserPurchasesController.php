<?php

namespace App\Http\Controllers;

use App\Models\UserPurchases;
use App\Http\Requests\StoreUserPurchasesRequest;
use App\Http\Requests\UpdateUserPurchasesRequest;

class UserPurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreUserPurchasesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPurchasesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPurchases  $userPurchases
     * @return \Illuminate\Http\Response
     */
    public function show(UserPurchases $userPurchases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPurchases  $userPurchases
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPurchases $userPurchases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPurchasesRequest  $request
     * @param  \App\Models\UserPurchases  $userPurchases
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPurchasesRequest $request, UserPurchases $userPurchases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPurchases  $userPurchases
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPurchases $userPurchases)
    {
        //
    }
}
