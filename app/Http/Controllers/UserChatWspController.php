<?php

namespace App\Http\Controllers;

use App\Models\UserChatWsp;
use App\Http\Requests\StoreUserChatWspRequest;
use App\Http\Requests\UpdateUserChatWspRequest;

use Exception;


class UserChatWspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        try {
            

            $userschatwsp = UserChatWsp::all();

            return response()->json($userschatwsp);


        } catch (Exception $th) {
         
            return response()->json([

                'success'=> false,
                'message' => $th->getMessage()


            ]);

        }


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
     * @param  \App\Http\Requests\StoreUserChatWspRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserChatWspRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserChatWsp  $userChatWsp
     * @return \Illuminate\Http\Response
     */
    public function show(UserChatWsp $userChatWsp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserChatWsp  $userChatWsp
     * @return \Illuminate\Http\Response
     */
    public function edit(UserChatWsp $userChatWsp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserChatWspRequest  $request
     * @param  \App\Models\UserChatWsp  $userChatWsp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserChatWspRequest $request, UserChatWsp $userChatWsp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserChatWsp  $userChatWsp
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserChatWsp $userChatWsp)
    {
        //
    }
}
