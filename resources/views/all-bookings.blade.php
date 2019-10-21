<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      
        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <div class="container">
     <div class="col-sm-12">
        <div class="row">
            <h1>Nuber Homepage</h1>
        </div>
     </div>
     <div class="col-sm-12">
        <div class="row">
           <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Car Type</th>
                <th>Status</th>
                
            </tr>
        </thead>
        <tbody>
            @if(isset($bookings))
            @foreach($bookings as $booking)

            <tr>
                <td>{{$booking->name}}</td>
                <td>{{$booking->email}}</td>
                <td>{{$booking->address}}</td>
                <td>{{$booking->car_type}}</td>
                <td class="text-center">
                @if($booking->status == 'pending')
                <h4><span class="label label-warning">{{"Pending"}} </span> </h4>
                @elseif($booking->status == 'cancel')
                <h4><span class="label label-danger">{{"Cancel"}} </span> </h4>
                @elseif($booking->status == 'accepted')
                <h4><span class="label label-success">{{"Accepted"}} </span> </h4>
                @endif
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
        </div>
     </div>
 </div>
    </body>
</html>




<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
  $('#example').DataTable();
  
});
</script>