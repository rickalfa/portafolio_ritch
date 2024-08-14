<?php

namespace App\Http\Controllers\chatConversation;

use App\Http\Controllers\Controller;
use App\Http\Controllers\wspbContoller;
use Illuminate\Http\Request;

class UserConversationController extends wspbContoller
{

    private $number_user;
    private $message;


    public function init(){

        
        $dates_massage_user = parent::GetDateMenssageUser();

        $messageBody = $dates_massage_user['entry'][0]['changes'][0]['value']['messages'][0]['text'];

    }

    public function recibirMensaje(){



    }

    public function getmensaje(){



    }


    public function getNumber(){


    }

    //
}
