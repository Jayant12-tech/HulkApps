
@extends('layouts.main')
@section('container')
  
  <section class="w3l-about-breadcrumb text-left" style='background-image:url("https://i.pinimg.com/originals/67/0b/c0/670bc0f15088200dc7bd31ff37daa245.gif");background-size:cover;background-postion:top center'>
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">My Profile</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url" style="color:white">Dashboard</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> My Profile </li>
        </ul>
      </div>
    </div>
  </section>
  <br>
  <section>
    <center>
      <script>
       
      </script>


        <div class="col-md-4 notify">
        </div>


    </center>
    <div class="col-md-8 mx-auto">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <form id="editProfile">
        <input type="hidden" name="id" id="id" value="{{$user_data->id}}">
        <input type="hidden" name="old_password" id="old_password" value="{{$user_data->password}}">
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{$user_data->name}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="email" id="email" value="{{$user_data->email}}" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Update Password</label>
          <input type="text" class="form-control pass" name="password" id="new_password"  placeholder="Enter Password">
        </div>
        <button type="submit" class="btn btn-secondary">Update Profile</button>

      </form>
    </div>
  </section>
  <br>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
  <script type="text/javascript" src="{{asset('js/notify.min.js')}}"></script>
  <script>

    $(document).ready(function() {
      
      $('#editProfile').on('submit', function(e){
          e.preventDefault();
          var id= $('#id').val();
          var name = $('#name').val();
          var email = $('#email').val();
          var old_password = $('#old_password').val();
          var new_password = $('#new_password').val();
          if(new_password!='' && new_password.length < 8)
          {
            $(".pass").notify("The password should be atleast 8 characters long", { position:"top" });
          }
          else
          {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

          $.ajax({
              type: "POST",
              url: "/update-user-profile",
              data:{user_id:id, name:name , email:email, old_password:old_password , new_password:new_password},
              success: function (response) {
                console.log(response);
                $(".notify").notify("The details have been updated","success", { position:"left" });
               // setTimeout(function() { 
               //        location.reload();
               //    }, 1000);
               document.getElementById("user_name").innerHTML=name;
              },
              error:function(error){
                  console.log(error);
              }
          });
        }
      });

    });
  </script>
@endsection