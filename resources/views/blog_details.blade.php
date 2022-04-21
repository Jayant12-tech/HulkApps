
@extends('layouts.main')
@section('container')
  
  <section class="w3l-about-breadcrumb text-left" style='background-image:url("https://i.pinimg.com/originals/67/0b/c0/670bc0f15088200dc7bd31ff37daa245.gif");background-size:cover;background-postion:top center'>
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">Blog Details</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url" style="color:white">Blog</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Blog Details </li>
        </ul>
      </div>
    </div>
  </section>
  <br>
  <section class="w3l-stats" id="stats mt-5">
    <div class="container ">
      <div>
        <div>   
          <div class="container-fluid">
            <div class="row side">
              <div class="col-9 side mt-5">
                  @if($errors->any())
                    <div class="col-md-12 notify">
                      <div class="alert alert-success alert-dismissible fade show"  id="success-alert" role="alert">
                        <strong>Your comment has been added!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                    <script type="text/javascript">
                      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                      $("#success-alert").slideUp(500);
                         
                      });
                    </script>
                  @endif
                  @if (\Session::has('msg1'))
                      <div class="col-md-12 notify">
                      <div class="alert alert-success alert-dismissible fade show"  id="success-alert" role="alert">
                        <strong>Your comment has been updated!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                    <script type="text/javascript">
                      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                      $("#success-alert").slideUp(500);
                         
                      });
                    </script>
                  @endif
                  @if (\Session::has('msg2'))
                      <div class="col-md-12 notify">
                      <div class="alert alert-danger alert-dismissible fade show"  id="success-alert" role="alert">
                        <strong>Your comment has been deleted!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                    <script type="text/javascript">
                      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                      $("#success-alert").slideUp(500);
                         
                      });
                    </script>
                  @endif
                  <center>
                      <h2 class='hny-title'>{{$blog_data->title}}</h2>
                      <hr>
                  </center>
                <div class="content-section">
                  <div class="blog-content-inf pb-5">
                    <center>
                        <img src="{{asset('images/blog')}}/{{$blog_data->image}}" class="radius-image img-fluid mb-5">
                    </center>
                    <div class="container pb-lg-4 mt-5">
                      <br>
                      <div class="single-post-content" style='margin-top:-100px'>
                        <blockquote class="blockquote my-5">
                          <div class="icon-quote"><span class="fa fa-quote-left" aria-hidden="true"></span></div>
                          {!! $blog_data->content !!}
                          <p style='float:right;padding:10px;color:#1aa4b8'> -<b>{{$author->name}}</b></p>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-white rounded-3 shadow p-4 mb-2">
                  @auth
                    <?php
                      $user_comment_counts = DB::table('comments')->where('user_id','=',Auth::user()->id)->where('blog_id','=',$blog_data->id)->count();
                    ?>
                    <div class="d-flex">
                      <img class="rounded-circle"
                           style="width:2.5rem;height:2.5rem;"
                           src="https://pngset.com/images/my-profile-icon-blank-profile-picture-circle-text-logo-symbol-trademark-transparent-png-1008112.png" />
                      <div class="flex-grow-1">
                         <div class="hstack gap-5 mb-1">
                            <a href="#" class="fw-bold link-dark"> {{ Auth::user()->name; }}</a>
                         </div>
                         <form method="post" action="{{route('addComment')}}">
                            @csrf
                            <div class="form-floating mb-3">
                              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                              <input type="hidden" name="blog_id" value="{{$blog_data->id}}">
                              <textarea class="form-control w-100"
                                        placeholder="Leave a comment here"
                                        id="my-comment"
                                        style="height:7rem;" name="comment"></textarea>
                              <label for="my-comment">Leave a comment here</label>
                            </div>
                           <div class="hstack justify-content-end gap-2" style="float: right">
                            <?php
                              if($user_comment_counts>0)
                              {
                            ?>
                            <button class="btn btn-sm btn-primary text-uppercase" data-toggle="tooltip" data-placement="bottom" title="Comment already added" disabled>comment</button>
                            <?php
                              }
                              else
                              {
                            ?>
                              <button class="btn btn-sm btn-primary text-uppercase" type="submit">comment</button>
                            <?php
                              }
                            ?>
                           </div>
                         </form>
                      </div>
                    </div>
                    @else
                    <label for="my-comment">Leave a comment here</label>
                    <hr>
                    <div class="row">
                      <div class="col-md-8">
                        <p>Please Login to comment.</p>
                      </div>
                      <div class="col-md-4">
                        <a href="{{ route('login') }}" class="btn btn-style btn-secondary">SignUp/SingIn</a><br>
                      </div>
                    </div>
                  @endauth
                  <div class="bg-white rounded-3 shadow-sm p-4">

                      <h4 class="mb-4">{{$total_comments}} Comments</h4>
                      <div class="">
                          <div class="py-3">
                            @auth
                            <?php

                              $user_comment_count = DB::table('comments')->where('user_id','=',Auth::user()->id)->count();
                            
                            ?>
                            @else
                              <?php $user_comment_count=0 ?>
                            @endauth
                            <?php
                              if($user_comment_count > 0)
                              {
                            ?>
                              @auth

                                <?php
                                  $user_comments = DB::table('comments')
                                            ->where('blog_id','=',$blog_data->id)->where('user_id','=',Auth::user()->id)
                                            ->count();
                                  if($user_comments >0)
                                  {
                                    $user_id = DB::table('comments')
                                              ->where('blog_id','=',$blog_data->id)->where('user_id','=',Auth::user()->id)
                                              ->first();

                                    if(Auth::user()->id == $user_id->user_id)
                                    {
                                       $author = DB::table('users')->where('id',$user_id->user_id)
                                            ->first();
                                  ?>
                                  <div class="d-flex comment">
                                    <div class="flex-grow-1 ms-3">
                                      <div class="mb-1"><a href="#" class="fw-bold link-dark me-1">{{$author->name}}</a> 
                                      </div>
                                      <hr>
                                      <div class="mb-2">{{$user_id->comments}}</div>
                                      <?php
                                          if(Auth::user()->id == $user_id->user_id)
                                          {
                                        ?>

                                          <div class="hstack align-items-center mb-2">  
                                            <div class="row">
                                              <div class="col-md-2">
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                                                  Edit
                                                </button>
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Comment</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form method="post" action="{{route('editComment')}}">
                                                          @csrf
                                                          <div class="form-floating mb-3">
                                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                            <input type="hidden" name="blog_id" value="{{$user_id->blog_id}}">
                                                            <textarea class="form-control w-100"
                                                                      placeholder="Leave a comment here"
                                                                      id="my-comment"
                                                                      style="height:7rem;" name="comment">{{$user_id->comments}}</textarea>
                                                           
                                                          </div>
                                                         <div class="hstack justify-content-end gap-2" style="float: right">
                                                            <button class="btn btn-sm btn-primary text-uppercase" type="submit">Update</button>
                                                         </div>
                                                       </form>
                                                      </div>   
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-2">
                                                <a href="{{url('delete-comment')}}/{{$user_id->id}}"><button class="btn btn-danger">DELETE</button></a>
                                              </div>
                                            </div>
                                            
                                            
                                          </div>
                                        <?php
                                          }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                  }
                                }
                                ?>
                              @endauth
                            <?php
                              }
                            ?>
                            @foreach($comment_detail as $comment_detail)
                              <?php
                                $author = DB::table('users')->where('id',$comment_detail->user_id)
                                        ->first();
                                $time =$comment_detail->created_at;
                                $dif = round(((( time() - strtotime($time) )/60)/60)/24);
                              ?>
                              <div class="d-flex comment">
                                <div class="flex-grow-1 ms-3">
                                  <div class="mb-1"><a href="#" class="fw-bold link-dark me-1">{{$author->name}}</a> 
                                    <span class="text-muted text-nowrap" style="float: right"> 
                                      <?php
                                        if($dif =='0')
                                        {
                                      ?>
                                       Today
                                      <?php
                                        }
                                        else
                                        {
                                      ?>

                                      <?php
                                       echo $dif.' day(s) ago';
                                        }
                                      ?>
                                    </span>
                                  </div>
                                  <hr>
                                  <div class="mb-2">{{$comment_detail->comments}}</div>
                                  
                                  </div>
                              </div>

                            @endforeach
                          </div>
                       </div>

                    </div> 
                </div>
              </div>
              <div class="col-3" >
                <div class="sidebar-item " >
                  <div class="make-me-sticky">
                    <h2 class="sub-title" style="text-align:left;border-bottom:2px solid pink;padding:2px;width:60%;color:slategray ">Most Popular</h2>
                    <br>
                    <div class="testimonial-width">
                      <div class="row">
                        @foreach($latest_blogs as $latest_blogs)
                          <div class="col-12">
                            <a href="{{url('blog-details')}}/{{$latest_blogs->id}}" style='text-decoration:none;color:slategray;padding:0px'>
                              <span style="float: left;font-size: 14px;font-family:'Lato', sans-serif !important" id='pop'>{{$latest_blogs->title}}</span><br>
                              <span style="font-size: 12px;padding: 0px;color:#2a5f61;text-align:left;float:left;font-family:'Lato', sans-serif"><b>{{$latest_blogs->created_at}}</b></span>
                                <hr>
                            </a>
                          </div>
                        @endforeach
                      </div>  
                    </div>        
                    <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
  
@endsection
