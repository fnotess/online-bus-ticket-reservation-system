@extends('layouts.master')

@section('title')
    conductor page!!!

@endsection

@section('content')

    conductor page

    <table  >
        <tr>
            <th>route_ID&emsp; </th>
            <th>&nbsp day &emsp; </th>
            <th>&nbsp start_time &emsp; </th>
            <th> end_time &emsp;</th>
            <th> bus_no &emsp; </th>
            <th> trip_ID </th>

        </tr>

        @foreach($trips as $trip)
            <tr>
                <td> {!! $trip->route_ID !!}&emsp; </td>
                <td>{!! $trip->day!!}&emsp;</td>
                <td>&nbsp&nbsp{!! $trip->start_time !!}&emsp;</td>
                <td>{!! $trip->end_time!!}&emsp;</td>
                <td>&nbsp&nbsp{!! $trip->bus_no !!}&emsp;</td>
                <td><a href="{{route('getOrderID',['trip_ID'=>$trip->trip_ID])}}">{!! $trip->trip_ID!!}&emsp;&emsp;</a></td>

                <td>
                    {{--<a href="{{route('post.delete',['post_id'=>$post->id])}}">Delete</a>--}}
                    <a href="{{route('ticketPage')}}">&emsp;Select</a>
                    <a href="">&emsp;Ignore</a>
                </td>
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
