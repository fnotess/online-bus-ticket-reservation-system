<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class tripController extends Controller
{

    public $seats=array();

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

        $ticket_ID=DB::select('select * from ticket where status=0 and order_ID = ?', [$my_order_id]);

//       return $ticket_ID;
//        $seat=[1,2,3,4];

        $selected_ticket_id=DB::select('select * from ticket where status=1 and order_ID = ?', [$my_order_id]);
//
//
//


        $selected_seats=array();
        $seats = array();



        foreach ($selected_ticket_id as $my_selected_ticket_Id) {

            array_push($selected_seats, $my_selected_ticket_Id->seat_no);
        }



     foreach ($ticket_ID as $my_ticket_Id) {
//          return $my_ticket_Id->ticket_ID;
//           $tickets=array($my_ticket_Id->ticket_ID);
          array_push($seats, $my_ticket_Id->seat_no);
       }

//            print_r($tickets);
//            array_push($seat,$my_ticket_Id->ticket_ID);
//        }
//        return $ticket_ID;




//        app('resources\views\tickets.blade.php')->iniseat('$ticket_ID');
        return view('tickets',compact('seats','ticket_ID','selected_seats'));


        //$order_ID=DB::select(select*from travel_order where)

    }

    public static function getData($seat_number){
        $results = DB::select('select * from ticket where seat_no = ?', [$seat_number]);
//        return view('tickets',compact('results'));
    }

    public function getMID(Request $request)
    {

        $manuID=$request['manuID'];
        echo $request['manuID'];

        $connection = mysqli_connect('localhost','root','','test');
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

//       $ticket_status = mysqli_query($connection,"SELECT status FROM ticket WHERE ticket_manID = '".$manuID."'");
//        $userDataArray = mysqli_fetch_array($ticket_status);
//        return $userDataArray;


        $sql = "UPDATE ticket SET status=1 WHERE ticket_manID = '".$manuID."'";

        if ($connection->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $connection->error;
        }


        $connection->close();


    }





}
