<x-app-layout>
   
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
label{
  dispaly:inline-block;
  width:200px;
}
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      @include('admin.navbar')
<div class="container-fluid page-body-wrapper">
  
<div class="container" align="center" style="padding-top:50px;">
@if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x
</button>
    {{session()->get('message')}}
  </div>
  @endif
<h1>Add Doctors</h1>

<form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div style="padding:15px;">
  <label for="">Doctor's Name</label>
<input type="text" style="color:black;" name="name" placeholder="" required>
</div>
  <div style="padding:15px;">
  <label for="">Speciality</label>
<select name="speciality" style="color:black; width:200px;" required>
  <option value="">--select--</option>
  <option value="Cardiology ">Cardiology </option>
  <option value="Dermatology ">Dermatology </option>
  <option value="Endocrinology ">Endocrinology </option>
  <option value="Gastroenterology ">Gastroenterology </option>
  <option value="Hematology ">Hematology </option>
  <option value="Neurology ">Neurology </option>
  <option value="Gynecology  ">Gynecology  </option>
  <option value="Oncology ">Oncology </option>
  <option value="Orthopedics  ">Orthopedics  </option>
  <option value="Otolaryngology (ENT) ">Otolaryngology (ENT) </option>
  <option value="Pediatrics ">Pediatrics </option>
  <option value="Pulmonology ">Pulmonology </option>
  <option value="Rheumatology ">Rheumatology </option>
</select>
</div>
  <div style="padding:15px;">
  <label for="">Description</label>
<input type="text" style="color:black;" name="description" placeholder="" required>
</div>
  <div style="padding:15px;">
  <label for="">Phone</label>
<input type="number" style="color:black;" name="phone" placeholder="" required>
</div>
  <div style="padding:15px;">
  <label for="">Location</label>
<input type="text" style="color:black;" name="location" placeholder="" required>
</div>
  <div style="padding:15px; align=center;">
  <label for="">Doctor image</label>
<input type="file" name="file" required>
</div>
  <div style="padding:15px;">
  
<input type="submit" class="btn btn-success">
</div>
</form>
      
</div>
     @include('admin.script')
  </body>
</html>