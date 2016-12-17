@extends('layouts.master')

@section('title')
    conductor page!!!

@endsection

@section('content')

    conductor page

    <table  >
        <tr >
            <th>route_ID&emsp; </th>
            <th>&nbsp day &emsp; </th>
            <th>&nbsp start_time &emsp; </th>
            <th> end_time &emsp;</th>
            <th> bus_no &emsp; </th>
            <th> trip_ID </th>

        </tr>
<?php $d=0;?>
        @foreach($trips as $trip)
            <?php $d++; ?>
            <tr id =<?php echo $d; ?>>
                <td id="1"> {!! $trip->route_ID !!}&emsp; </td>
                <td id="2">{!! $trip->day!!}&emsp;</td>
                <td id="3">&nbsp&nbsp{!! $trip->start_time !!}&emsp;</td>
                <td id="4">{!! $trip->end_time!!}&emsp;</td>
                <td id="5">&nbsp&nbsp{!! $trip->bus_no !!}&emsp;</td>
                <td id="6"><a href="{{route('getOrderID',['trip_ID'=>$trip->trip_ID])}}">{!! $trip->trip_ID!!}&emsp;&emsp;</a></td>


            </tr>
        @endforeach

    </table>


    <select id="startings">
        @foreach($trips as $trip)
        <option value="5">{{$trip->start_time}}</option>

        @endforeach
    </select>

<!--    --><?php
//    var e = document.getElementById("starting");
//    var value = e.options[e.selectedIndex].value;
//    var text = e.options[e.selectedIndex].text;
//
//            $Record=DB::select('select * from trip where starting_time=value');
//?>








@endsection
