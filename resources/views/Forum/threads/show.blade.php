@extends('layouts.main')
@section('app')
  <section class="header-descriptin329">
      <div class="container">
          <h3>Post Details</h3>
          <ol class="breadcrumb breadcrumb839">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="#">Post Details</a></li>
              <li class="active">{{ $thread->title }}</li>
          </ol>
      </div>
  </section>
  <section class="main-content920">
      <div class="container">
          <div class="row">
              <div class="col-md-9">
                  <div class="post-details">
                      <div class="details-header923">
                          <div class="row">
                              <div class="col-md-8">
                                  <div class="post-title-left129">
                                      <h3>{{ $thread->title }}</h3> </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="post-que-rep-rihght320"> <a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Question</a> <a href="#" class="r-clor10">Report</a> </div>
                              </div>
                          </div>
                      </div>
                      <div class="post-details-info1982">
                          <p>
                            {{ $thread->body }}
                          </p>
                          <hr>
                          <div class="post-footer29032">
                              <div class="l-side2023"> <i class="fa fa-check check2" aria-hidden="true"> solved</i> <a href="#"><i class="fa fa-star star2" aria-hidden="true">  5</i></a> <i class="fa fa-folder folder2" aria-hidden="true"> wordpress</i> <i class="fa fa-clock-o clock2" aria-hidden="true"> 4 min ago</i> <a href="#"><i class="fa fa-commenting commenting2" aria-hidden="true"> 5 answer</i></a> <i class="fa fa-user user2" aria-hidden="true"> 70 views</i> </div>
                              <div class="l-rightside39">
                                  <button type="button" class="tolltip-button thumbs-up2" data-toggle="tooltip" data-placement="bottom" title="Like"><i class="fa fa-thumbs-o-up " aria-hidden="true"></i></button>
                                  <button type="button" class="tolltip-button  thumbs-down2" data-toggle="tooltip" data-placement="bottom" title="Dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button> <span class="single-question-vote-result">+22</span> </div>
                          </div>
                      </div>
                  </div>
                  <div class="share-tags-page-content12092">
                      <div class="l-share2093"> <i class="fa fa-share" aria-hidden="true"> Share</i> </div>
                      <div class="R-tags309"> <i class="fa fa-tags" aria-hidden="true"> Wordpress, Question, Developer</i> </div>
                  </div>
                  <div class="author-details8392">
                      <div class="author-img202l"> <img src="image/images.png" alt="image">
                          <div class="au-image-overlay text-center"> <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a> </div>
                      </div> <span class="author-deatila04re">
                 <h5>Author: {{ $thread->creator->name }}</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor neque. Nullam lobortis, sapien vitae lobortis tristique.</p>
              </span> 
            </div>
                  <div class="related3948-question-part">
                      <h3>Related questions</h3>
                      <hr>
                      <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This Is My Second Poll Question</a></p>
                      <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This is my third Question</a></p>
                      <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This is my fourth Question</a></p>
                      <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This is my fifth Question</a></p>
                  </div>
                  <div class="comment-list12993">
                      <div class="container">
                          <div class="row">
                                <div class="comments-container">
                                    @if($thread->replies)
                                    <ul id="comments-list" class="comments-list">  
                                      @foreach ($thread->replies as $reply)
                                        @include('Forum.threads.reply')
                                      @endforeach
                                    </ul>
                                    @else  
                                    <ul id="comments-list" class="comments-list">
                                        <li>test</li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                 @if (auth()->check())
                 <form action="{{ $thread->path(). '/replies' }}" method="post">
                    @csrf
                    <div class="comment289-box">
                        <h3>Leave A Reply</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post9320-box">
                                    <input type="text" name="body" class="comment-input219882" placeholder="Enter Your Post"> </div>
                                <button type="submit" class="pos393-submit">Post Your Answer</button>
                            </div>
                        </div>
                    </div>
                 </form>
                 @else
                    <div class="row">
                        <div class="col-md-8">
                            <p class="mt-4 mb-4">
                                Please!! <a href="{{ route('register') }}">signin</a> to participate in this discussion.
                            </p>
                        </div>
                    </div>
                 @endif
              </div>
              @include('layouts.rightsidebar')
          </div>
      </div>
  </section>
@endsection
