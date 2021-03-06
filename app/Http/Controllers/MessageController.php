<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\DataTables\MessagesDataTable;


class MessageController extends Controller
{

    public function show($id)
    {
        $message = Messages::find($id);
        return view("admin.message_detail")->with("message",$message);
    }


    public function index(MessagesDataTable $datatable)
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
