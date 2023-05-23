<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Appointment</title>
    @include('admin.css')
    <style>
       th, td {
    padding: 10px;
    /* height: 16px; */
    color:aliceblue
  }
  .table{
    height: 24px;
  }

  th {
    background-color: lightgray;
  }
  
    </style>
  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')
      
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
      
<div class="container-fluid page-body-wrapper">

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Patient's Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Date</th>
        <th scope="col">Problem</th>
        <th scope="col">status</th>
        <th scope="col">Approved</th>
        <th scope="col">Cancelled</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $appoint)
      <tr>
       
        <td>{{$appoint->name}}</td>
        <td>{{$appoint->email}}</td>
        <td>{{$appoint->phone}}</td>
        <td>{{$appoint->doctor}}</td>
        <td>{{$appoint->date}}</td>
        <td>{{$appoint->message}}</td>
        <td>{{$appoint->status}}</td>
        <td><a class="btn btn-success"  href="{{url('approved',$appoint->id)}}">Approve</a></td>
        <td><a class="btn btn-danger"  href="{{url('cancelled',$appoint->id)}}">Cancel</a></td>

      </tr>
      @endforeach
      </tbody>
    </table>




</div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>