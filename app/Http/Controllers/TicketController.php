<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
date_default_timezone_set('Asia/Kolkata');


class TicketController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $ticket_id=0;
        return view('home',['ticket_id'=>$ticket_id]);
    }

    public function addMessage(Request $request)
    {

        $author=$request->author;
        $content=$request->content;
        $create_date=date('Y-m-d H:i:s');
        //print_r($content);die;

        $message=[
            'author'=>"$author",   
            'content'=>"$content",
            'created_at'=>"$create_date",
            'updated_at'=>"$create_date"
            
           ];
        
          $msg_id = DB::table('messages')->insertGetId($message);
          $id='HTX-'.$msg_id;

          if($msg_id>0)
          {
            return view('ticket',['msg_id'=>$id]);
          }
          else
          {
           return view('ticket');
          }  
       
    }

    public function addTicket(Request $request)
    {

        $uid=$request->uid;
        $subject=$request->subject;
        $username=$request->username;
        $email=$request->email;
        $create_date=date('Y-m-d H:i:s');
        //print_r($content);die;

        $ticket=[
            't_u_id'=>"$uid",   
            't_subject'=>"$subject",
            't_user_name'=>"$username",   
            't_email'=>"$email", 
            't_created_At'=>"$create_date",
            't_updated_At'=>"$create_date"
            
           ];
        
          $ticket_id = DB::table('ticket')->insertGetId($ticket);

          if($ticket_id>0)
          {
            return view('home',['ticket_id'=>$ticket_id]);
          }
          else
          {
           return view('home');
          }  
       
    }
}
