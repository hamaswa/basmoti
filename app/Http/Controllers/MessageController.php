<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\DataTables\MessagesDatatable;


class MessageController extends Controller
{
    public function index(MessagesDatatable $datatable)
    {
       return $datatable->render("admin.messages");

    }


    public function contactus(Request $request)
    {

        $data = $request->all();
        $message  = Messages::create(
            [
                'fullname' => $data['fullname'],
                'email' => $data['email'],
                'subject'=>$data['subject'],
                'message'=>$data['message']
            ]
        );

        if($message->wasRecentlyCreated){
            return "Thanks you will get back soon to you";
        }
        else {
            return "There occur an error. Please contact Adminsitrator";
        }
    }
}
