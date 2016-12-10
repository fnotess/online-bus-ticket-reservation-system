<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class tripController extends Controller
{

    public function displayAllTrips(Request $request){


            $trips = DB::select('select * from trip');
            return view('conductorPage',compact('trips'));


       // $trip=DB::select( "select*from trip");
        //echo $trip;

       // redirect()->route('conductorPage');


    }

    public function getOrderID($trip_ID){
        //return $trip_ID;

        $order_ID = DB::select('select * from travel_order where trip_ID = ?', [$trip_ID]);

        //return $order_ID;
        $my_order_id=null;

        foreach ($order_ID as $myId){
            $my_order_id=$myId->order_ID;
        }

        $ticket_ID=DB::select('select * from ticket where order_ID = ?', [$my_order_id]);

        //return $ticket_ID;
        $seat=[1,2,3,4];

//        foreach ($ticket_ID as $my_ticket_Id){
            //return $my_ticket_Id->ticket_ID;
//            $tickets=array($my_ticket_Id->ticket_ID);
//            array_push($tickets,$my_ticket_Id->ticket_ID);
//            print_r($tickets);
//            array_push($seat,$my_ticket_Id->ticket_ID);
//        }
//        return $ticket_ID;
        return view('tickets',compact('ticket_ID'),compact('seat'));


        //$order_ID=DB::select(select*from travel_order where)

    }



}
