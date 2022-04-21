
@extends('layouts.main')
@section('container')
  
  <section class="w3l-about-breadcrumb text-left" style='background-image:url("https://i.pinimg.com/originals/67/0b/c0/670bc0f15088200dc7bd31ff37daa245.gif");background-size:cover;background-postion:top center'>
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Blog Category</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url" style="color:white">Blogs</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> {{$category}} </li>
        </ul>
      </div>
    </div>
  </section>
  <br>
  <section class="w3l-blog-slider" id="blog-slider">
    <div class="blog-slider py-5">
      <div class="container py-lg-4 py-md-3 mb-md-0 mb-5">
        <div style="margin: 8px auto; display: block; text-align:center;"></div>
          <center>
            <h3 class=" mb-5 head">{{$category}} Blogs</h3>
          </center>
          <div class="content-wrapper">
            <div class='row' style='margin:0 auto'>
              @foreach($all_blog_data as $blog_data)
                <a href="{{url('blog-details')}}/{{$blog_data->id}}">
                  <div class='col-md-4' style='margin:0 auto'>
                    <div class="news-card">
                      <img src="{{asset('images/blog')}}/{{$blog_data->image}}" alt="" class="news-card__image">
                      <div class="news-card__text-wrapper">
                          <h2 class="news-card__title" >{{$blog_data->title}}</h2>
                          <?php
                            $author = DB::table('users')->where('id',$blog_data->user_id)
                                        ->first();
                          ?>
                          <div class="news-card__post-date">
                            {{$blog_data->created_at}} 
                            <span style="position: absolute;left: 50%;"> 
                              <?php
                                $total_comments = DB::table('comments')
                                                  ->where('blog_id','=',$blog_data->id)
                                                  ->count();
                              ?>
                             <span style="color:white">{{$total_comments}} </span> <i class="fa-solid fa-comment" style="color:white;"></i>
                         
                            </span>
                            <span style="float: right">- {{$author->name}}</span> 
                          </div>

                        <div class="news-card__details-wrapper">
                          <center>
                              <a href="{{url('blog-details')}}/{{$blog_data->id}}" class="btn btn-warning">Read more <i class="fas fa-long-arrow-alt-right"></i></a>
                          </center>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
          </div>
          <div style="float: right">
                {{$all_blog_data->links()}}
          
          </div>
      </div>
    </div>
  </section>
  <br>
  
 
@endsection