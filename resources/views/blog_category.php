@extends('layouts.main')

@section('container')

    <!--banner-slider-->
  <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1" data-zs-src="[&quot;https://i.pinimg.com/originals/67/0b/c0/670bc0f15088200dc7bd31ff37daa245.gif&quot;]" data-zs-overlay="dots" class="zs-enabled overlay-dots"><div class="zs-slideshow"><div class="zs-slides"><div class="zs-slide zs-slide-0 active" style="background-image: url(&quot;https://i.pinimg.com/originals/67/0b/c0/670bc0f15088200dc7bd31ff37daa245.gif&quot;); opacity: 1; transition: transform 8000ms ease-out 0s, opacity 800ms ease 0s; transform: scale(1, 1); z-index: 2;"></div></div></div>
        <div class="demo-inner-content">
          <div class="container">
            <center>
                <div class="col-md-8">
                    <h1 class="head" style="text-transform:uppercase">The Lehkaks</h1>
                </div>
            </center>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- /main-slider -->
  <!-- //banner-slider-->

  <div class='container'>
    <center>
      <h3 class=" mb-2 head mt-4">Categories</h3>
    </center>
    <div class="row">
      <div class='col-md-3'>
        <div class="container-fluid"> 
          <a href="{{url('blog-category')}}/Happy">
            <div class="card-deck">
              <div class="card cards">
                <div class="card-block" style='align-items:center'>
                  <img src="https://i.pinimg.com/originals/e3/96/e5/e396e5bba7b420360c3d78df65031e04.gif" class='img-fluid'>
                  <center>
                    <h4 class="card-title mt-2">Life</h4>
                  </center>
                </div>        
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class='col-md-3'>
        <div class="container-fluid"> 
          <a href='cat_blog.php?cat=happy'>
            <div class="card-deck">
              <div class="card cards">
                <div class="card-block" style='align-items:center'>
                  <img src="https://i.pinimg.com/originals/3a/6e/3e/3a6e3e486dcae952b4a056dc62b2025a.gif" class='img-fluid'>
                  <center>
                    <h4 class="card-title mt-2">Happy</h4>
                  </center>
                </div>        
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class='col-md-3'>
        <div class="container-fluid"> 
          <a href='cat_blog.php?cat=happy'>
            <div class="card-deck">
              <div class="card cards">
                <div class="card-block" style='align-items:center'>
                  <img src="https://i.pinimg.com/originals/64/41/61/644161b5ce15397473f2c4a49620ee8f.gif" class='img-fluid'>
                  <center>
                    <h4 class="card-title mt-2">Motivation</h4>
                  </center>
                </div>        
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class='col-md-3'>
        <div class="container-fluid"> 
          <a href='cat_blog.php?cat=happy'>
            <div class="card-deck">
              <div class="card cards">
                <div class="card-block" style='align-items:center'>
                  <img src="https://i.pinimg.com/originals/57/1e/9c/571e9c7cbf95597f10526a41dd300510.gif" class='img-fluid'>
                  <center>
                    <h4 class="card-title mt-2">Highlights</h4>
                  </center>
                </div>        
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <section class="w3l-blog-slider" id="blog-slider">
    <div class="blog-slider py-5">
      <div class="container py-lg-4 py-md-3 mb-md-0 mb-5">
        <div style="margin: 8px auto; display: block; text-align:center;"></div>
          <center>
            <h3 class=" mb-5 head">Latest Blogs</h3>
          </center>
          <div class="content-wrapper">
            <div class='row' style='margin:0 auto'>
              @foreach($blog_data as $blog_data)
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
                          <div class="news-card__post-date">{{$blog_data->created_at}} <span style="float: right">- {{$author->name}}</span> </div>

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
          <div style='float:right'>
            <div class="button">
                <a class="link" href='blogs.php' style='text-decoration:none'>View More</a>
            </div>
          </div>
      </div>
    </div>
  </section>

@endsection