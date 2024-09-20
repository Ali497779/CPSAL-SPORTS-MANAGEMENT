<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;


class MailController extends Controller
{
    public function index(){
        $data = [
            'subject' => 'Test Subject',
            'body' => 'Test Paragraph and body items'
        ];
        try{
            Mail::to('aliazeemkhan76@gmail.com')->send(new MailNotify(['subject' =>'Test Subject','message' => 'fds','body' => 'Hello world']));
            return response()->json(['Great Check your mailbox']);

        }catch(Exception $th){
            return response()->json(['Sorry Something went wrong']);
        }
    }
}
