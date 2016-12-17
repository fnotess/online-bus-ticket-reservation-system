
<?php

$tripID = '1923';
$data=array();
$ticket_details=array();
foreach($seats as $seat){
	
	array_push($data, $seat);
}

foreach($ticket_ID as $details){

    array_push($ticket_details, $details->order_ID);
    array_push($ticket_details, $details->ticket_ID);
    array_push($ticket_details, $details->seat_no);
    array_push($ticket_details, $details->price);
    array_push($ticket_details, $details->date_create);
    array_push($ticket_details, $details->date_due);
    array_push($ticket_details, $details->status);
    array_push($ticket_details, $details->ticket_manID);
}


//$data= array(1,2,3);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Seat reservation</title>
<link rel="stylesheet" href="{{URL::asset('ticketcheck/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-1.4.1.js" type="text/javascript"></script>
    


	</head>
<body>
    <form id="form1" >
	
      <h2 style="font-size:1.2em;"> Choose seats by clicking the corresponding seat in the layout below:</h2>
       <div id="holder"> 
		<ul  id="place">
        </ul>    
	</div>
	 <div style="width:600px;text-align:center;overflow:auto"> 
	<ul id="seatDescription">
<li id="available_seat">Available Seat</li>
<li id="booked_seat" >Booked Seat</li>
<li id="selected_seat" >Selected Seat</li>
	</ul>        </div>
	<div style="width:580px;text-align:left;margin:5px">	
		<input type="button" id="btnShowNew" value="Show Selected Seats" /><input type="button" id="btnShow" value="Show All" />            </div>


    </form>
    <script type="text/javascript">
	
	            var settings = {
                rows: 5,
                cols: 15,
                rowCssPrefix: 'row-',
                colCssPrefix: 'col-',
                seatWidth: 35,
                seatHeight: 35,
                seatCss: 'seat',
                selectedSeatCss: 'selectedSeat',
				selectingSeatCss: 'selectingSeat'
            };
     var bookedSeats =[];
	
     iniseats(bookedSeats);
 
	
	 function iniseats(reservedSeat) {
		  console.log('fsdsd');
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        seatNo = (i + j * settings.rows + 1);
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }
                        str.push('<li class="' + className + '"' +
										'id ="'+ seatNo +'"'+
                                  'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                                  '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                  '</li>');
                    }
                }
                $('#place').html(str.join(''));
            };


	function iniseat(reservedSeat) {
		
		 for (s = 0; s<reservedSeat.length; s++){
           if (!($('#'+reservedSeat[s]).hasClass(settings.selectedSeatCss))) {
			$('#'+reservedSeat[s]).toggleClass(settings.selectedSeatCss);
				
		   }
		   }
		   
            }

	
        $(function () {
            //case I: Show from starting
            //init();
//data = [1,2,3,4,5,5,6]
            //Case II: If already booked
            var cat;
        var books = <?php echo json_encode($data) ?>;
            var jticket_details=<?php echo json_encode($ticket_details) ?>;
iniseat(books);
	
			

            $('.' + settings.seatCss).click(function () {


                $('#ddd').empty();


				
			if ($(this).hasClass(settings.selectedSeatCss)){

                var seat=this.id;
                for(n=1;n<100;n++){
                    console.log(this.id+1);
                    if(seat==jticket_details[2+(n-1)*8]){
                        console.log('dududud');

                        cat=jticket_details[7+(n-1)*8];
                        console.log("manufacture id"+cat);

                        $('#ddd').append(
                                "order_id :"+jticket_details[0 + (n - 1) * 8]+"<br />"
                                +"ticket_id : "+jticket_details[1+(n-1)*8]+"<br />"
                                +"seat number : " +jticket_details[2+(n-1)*8]+"<br />"
                                +"price : "+jticket_details[3+(n-1)*8]+"<br />"
                                +"date create : " +jticket_details[4+(n-1)*8]+"<br />"
                                +"date due : "+jticket_details[5+(n-1)*8]+"<br />"
                                +"status :" +jticket_details[6+(n-1)*8]+"<br />"
                                +"ticket manufacture id : "+jticket_details[7+(n-1)*8])



                    }
                }


                var modal = document.getElementById('myModal');
                var span = document.getElementsByClassName("close")[0];
                modal.style.display = "block";

                span.onclick = function() {
                    modal.style.display = "none";
                }



                $('#check').click(function () {
                    var manuID = "manID="+cat;
                    console.log("manu_id:"+manuID);
                    $.ajax({
                        type: "POST",
                        url: "connection.php",
                        data: manuID,
                        cache: false,
                        success: function (response) {
                          console.log('done');
                        }
                    });
                });

{{--//                {{\App\Http\Controllers\tripController::getData(this.id); }}--}}

            }
			else{
                $(this).toggleClass(settings.selectingSeatCss);
				console.log(settings.selectingSeatCss);
				}
            });

            $('#btnShow').click(function () {
                var str = [];
                $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
                    str.push($(this).attr('title'));
                });
                alert(str.join(','));
            })

            $('#btnShowNew').click(function () {
                var str = [], item;
                $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
                    item = $(this).attr('title');                   
                    str.push(item);                   
                });
                alert(str.join(','));
            })
        });





                /*
            $(document).ready(function(){
            setInterval(function(){
        var tripId ='';
        var tripIdData = 'tripId='+ tripId;
        if(tripId!='')
        {
                $.ajax({
                     type: "POST",
                     url: "connection.php",
                     data: tripIdData,
                     cache: false,
                    success: function(response) {
                        var newBooking=[];
                        for ( i =0 ; i<response.length;i++){
                        newBooking[i]=parseInt( response[i]);
                        }
                        iniseat(newBooking);

                    }
                });
        }
            }, 5000);
        });
        */


//iniseats (1);
//iniseat($seats);




    </script>


    <script src="https://code.jquery.com/jquery-1.4.1.js" type="text/javascript"></script>

 <table  >
<tr>
{{--<th>order_ID&emsp; </th>--}}
<th>&nbsp ticket_manID &emsp; </th>
<th>&nbsp seat_no &emsp; </th>


</tr>

    @foreach($ticket_ID as $id)
        <tr>
            {{--<td> {!! $id->order_ID !!}&emsp; </td>--}}
            <td>{!! $id->ticket_manID!!}&emsp;</td>
            <td>&nbsp&nbsp{!! $id->seat_no!!}&emsp;</td>


        </tr>
        @endforeach

        </table>


    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="demo"><b>TICKET DETAILS</b></p>
            <div id="ddd"></div>
            <button type="button" id="check">Check</button>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-1.4.1.js" type="text/javascript"></script>

</body>
</html>
