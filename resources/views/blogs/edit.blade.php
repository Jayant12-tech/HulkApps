@extends('layouts.main')

@section('container')
  
  <section class="w3l-about-breadcrumb text-left" style='background-image:url("https://i.pinimg.com/originals/67/0b/c0/670bc0f15088200dc7bd31ff37daa245.gif");background-size:cover;background-postion:top center'>
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Update Blog</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url" style="color:white">Dashboard</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Update Blog </li>
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
      <form id="updateBlog"  method="post" action="{{route('updateBlog')}}" enctype='multipart/form-data'>
        @csrf
        <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
        <input type="hidden" name="old_image" id="id" value="{{$blog_data->image}}">
        <input type="hidden" name="blog_id" id="blog_id" value="{{$blog_data->id}}">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{$blog_data->title}}" placeholder="Enter title">
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <img src="{{asset('images/blog')}}/{{$blog_data->image}}" style="width: 250px;height: 250px" class="img-fluid">
            <br>
            <label for="exampleInputEmail1">Change Image</label>
            <input type="file" name="image" class="form-control">
          </div>
          <div class="col-md-12 mt-4">
            <label for="exampleInputEmail1">Category</label>
            <select class="form-control" id="category" name="category">
              <option value="{{$blog_data->category}}">{{$blog_data->category}}</option>
              <option value="Happy">Happy</option>
              <option value="Life">Life</option>
              <option value="Motivation">Motivation</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea class="form-control" rows="3" cols="4" name="content" id="contents">{{ $blog_data->content }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-secondary">Update Blog</button>

      </form>
    </div>
  </section>
  <br>
  <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
  <script>
    CKEDITOR.replace( 'content' );
  </script>
@endsection