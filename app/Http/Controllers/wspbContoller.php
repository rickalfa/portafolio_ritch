<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserChatWsp;
use Exception;

class wspbContoller extends Controller
{



    public function webhook(Request $request){
        //TOQUEN QUE QUERRAMOS PONER 
   

        try {
          
          $token = 'HolaNovato';

          $query = $request->query();

          return response()->json(["success" =>true, 'data'=> $query], 200);

          

        } catch (Exception $th) {
          
          return response()->json(["success" =>false, 'error'=> $th->getMessage()], 400);

          

        }


      }
      /*
      * RECEPCION DE MENSAJES
      */
      public function recibe(){
        //LEEMOS LOS DATOS ENVIADOS POR WHATSAPP


      }

      public function sendmessage(Request $request){


        $mensaje = $request->message;
              

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://graph.facebook.com/v19.0/275797412294692/messages',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
          "messaging_product": "whatsapp",
          "to": "56984693206",
              "type": "text",
            "text": {
                "body": "'.$mensaje.'"
            }

        }',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer EAAM2vwJ27JoBO3e279gyfa267guamQJxuZBUiThar3nzK3aPJPEutUDPy8dKpfBn9rqFI0CwQ2rFG3ZCIypYg5ONB6fySEZAKoL8tC2ZCXEDZAh4GZBD3nwqWxkyQ9ZA44Acblpck1DazZBZB4HVdvDSrdpWVeUICnMAzJkZCCxST0PLKFtH95vxzbIZAVZBYRQ4cP2cdC9dWZCISPSj6jVSMp7QZD'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;




      }

      
}
