@extends('layouts.main')

@section('container')
  
  <section class="w3l-about-breadcrumb text-left" style='background-image:url("https://i.pinimg.com/originals/67/0b/c0/670bc0f15088200dc7bd31ff37daa245.gif");background-size:cover;background-postion:top center'>
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">My Blogs</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url" style="color:white">Dashboard</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> My Blogs </li>
        </ul>
      </div>
    </div>
  </section>
  <br>
  <section>
    <center>
      @isset($delete)
        <div class="col-md-4 notify">
          <div class="alert alert-danger alert-dismissible fade show"  id="danger-alert" role="alert">
            <strong>The blog has been deleted</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      @endisset
      @isset($insert)
        <div class="col-md-4 notify">
          <div class="alert alert-success alert-dismissible fade show"  id="success-alert" role="alert">
            <strong>The blog has been Uploaded!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      @endisset
      @isset($update)
        <div class="col-md-4 notify">
          <div class="alert alert-primary alert-dismissible fade show"  id="update-alert" role="alert">
            <strong>The blog has been Uploaded!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      @endisset
    </center>
    <script type="text/javascript">
      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
   
});
    $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#danger-alert").slideUp(500);
});
        $("#update-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#update-alert").slideUp(500);
});
    </script>
    <?php
      if($blog_count > 0)
      {
        $i=1;
    ?>  
    <div class="col-md-10 mx-auto">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
       
          @foreach($blog_data as $blog_data)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$blog_data->title}}</td>
              <td><img src="{{asset('images/blog')}}/{{$blog_data->image}}" style="width: 100px;height:100px;"></td>
              <td>{{$blog_data->category}}</td>
              <td>
                <div class="row">
                  <div class="col-md-6">
                    <a href="{{url('edit-blog')}}/{{$blog_data->id}}"> 
                      <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="{{url('delete-blog')}}/{{$blog_data->id}}">
                      <i class="fa-solid fa-trash" style="color: red"></i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      <br>
      <center>
        <a href="{{route('newBlog')}}"><button class="btn btn-secondary">Add Blogs</button></a>
      </center>
    </div>
    <?php
      }
      else
      {
    ?>

      <div class="card col-md-5 mx-auto">
        <div class="card-body">
          <img src="https://i.pinimg.com/originals/9f/c2/12/9fc2126eec2c0a3876e3f2097af9b983.gif" class="img-fluid">
          <p>Hello {{ Auth::user()->name; }}, Looks like you have not yet added any blogs. You can start adding them by clicking on the button below and help all the amazing readers to intake amazing content!</p>
          <hr>
          <a href="{{route('newBlog')}}"><button class="btn btn-secondary">Add Blogs</button></a>
         </div> 
      </div>
  
    <?php
      }
    ?>
   
  </section>
  <br>

@endsection