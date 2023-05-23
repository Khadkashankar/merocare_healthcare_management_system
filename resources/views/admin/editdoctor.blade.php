<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
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
                  <th scope="col">Doctor's Name</th>
                  <th scope="col">Speciality</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Available At</th>
                  <th scope="col">Image</th>
                  <th scope="col">Approved</th>
                  <th scope="col">Cancelled</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $doctor)
                <tr>
                 
                  <td>{{$doctor->name}}</td>
                  <td>{{$doctor->speciality}}</td>
                  <td>{{$doctor->phone}}</td>
                  <td>{{$doctor->location}}</td>
                  <td><img width="30px" height="20px"src="doctorimage/{{$doctor->image}}"></td>
                  <td><a class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?')"  href="{{url('delete',$doctor->id)}}">Delete</a></td>
                  <td><a class="btn btn-primary"  href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
          
                </tr>
                @endforeach
                </tbody>
              </table>
           </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>