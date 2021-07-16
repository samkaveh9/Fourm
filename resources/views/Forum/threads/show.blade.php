@extends('layouts.master')
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
                 <h5>About the Author</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor neque. Nullam lobortis, sapien vitae lobortis tristique.</p>

              </span> </div>
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
                                  <ul id="comments-list" class="comments-list">
                                      <li>
                                           <div class="comment-main-level">
                                              <!-- Avatar -->
                                              <div class="comment-avatar"><img src="image/images.png" alt=""></div>
                                              <!-- Contenedor del Comentario -->
                                              <div class="comment-box">
                                                  <div class="comment-head">
                                                      <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div>
                                                  <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div>
                                              </div>
                                          </div>


                                          <ul class="comments-list reply-list">
                                              <li>
                                                  <div class="comment-avatar"><img src="image/images.png" alt=""></div>
                                                  <div class="comment-box">
                                                      <div class="comment-head">
                                                          <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div>
                                                      <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="comment-avatar"><img src="image/images.png" alt=""></div>
                                                  <div class="comment-box">
                                                      <div class="comment-head">
                                                          <h6 class="comment-name by-author"><a href="#">Agustin Ortiz</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div>
                                                      <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="comment-avatar"><img src="image/images.png" alt=""></div>
                                                  <div class="comment-box">
                                                      <div class="comment-head">
                                                          <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div>
                                                      <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div>
                                                  </div>
                                              </li>
                                          </ul>
                                      </li>
                                      <li>
                                          <div class="comment-main-level">
                                              <!-- Avatar -->
                                              <div class="comment-avatar"><img src="image/images.png" alt=""></div>
                                              <!-- Contenedor del Comentario -->
                                              <div class="comment-box">
                                                  <div class="comment-head">
                                                      <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div>
                                                  <div class="comment-content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo? </div>
                                              </div>
                                          </div>
                                      </li>

                                  </ul>

                          </div>
                          </div>
                      </div>
                  </div>
                  <div class="comment289-box">
                      <h3>Leave A Reply</h3>
                      <hr>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="replay-input-name42389">
                                  <p>Name*</p>
                                  <input type="text" class="name-box24894 input238-design" placeholder="Name"> </div>
                          </div>
                          <div class="col-md-4">
                              <div class="replay-email-input89298">
                                  <p>E-mail*</p>
                                  <input type="text" class="name-box24894 input238-design" placeholder="E-mail"> </div>
                          </div>
                          <div class="col-md-4">
                              <div class="replay-input-websit128923">
                                  <p>Website*</p>
                                  <input type="text" class="name-box24894 input238-design" placeholder="Website"> </div>
                          </div>
                          <div class="col-md-12">
                              <div class="post9320-box">
                                  <input type="text" class="comment-input219882" placeholder="Enter Your Post"> </div>
                              <button type="button" class="pos393-submit">Post Your Answer</button>
                          </div>

                      </div>
                  </div>
              </div>
              <!--                end of col-md-9 -->
              <!--           strart col-md-3 (side bar)-->
              <aside class="col-md-3 sidebar97239">
                  <div class="status-part3821">
                      <h4>stats</h4> <a href="#"><i class="fa fa-question-circle" aria-hidden="true"> Question(20)</i></a> <i class="fa fa-comment" aria-hidden="true"> Answers(50)</i> </div>
                  <div class="categori-part329">
                      <h4>Category</h4>
                      <ul>
                          <li><a href="#">web developer</a></li>
                          <li><a href="#">Andriod developer</a></li>
                          <li><a href="#">grapics developer</a></li>
                          <li><a href="#">web developer</a></li>
                      </ul>
                  </div>
                  <!--             social part -->
                  <div class="social-part2189">
                      <h4>Find us</h4>
                      <li class="rss-one">
                          <a href="#" target="_blank"> <strong>
                  <span>Subscribe</span>
                   <i class="fa fa-rss" aria-hidden="true"></i>

                   <br>
                   <small>To RSS Feed</small>

               </strong> </a>
                      </li>
                      <li class="facebook-two">
                          <a href="#" target="_blank"> <strong>
                  <span>Subscribe</span>
                       <i class="fa fa-facebook" aria-hidden="true"></i>

                   <br>
                   <small>To Facebook Feed</small>

               </strong> </a>
                      </li>
                      <li class="twitter-three">
                          <a href="#" target="_blank"> <strong>
                  <span>Subscribe</span>
              <i class="fa fa-twitter" aria-hidden="true"></i>

                   <br>
                   <small>To twitter Feed</small>

               </strong> </a>
                      </li>
                      <li class="youtube-four">
                          <a href="#" target="_blank"> <strong>
                  <span>Subscribe</span>
             <i class="fa fa-youtube" aria-hidden="true"></i>

                   <br>
                   <small>To youtube Feed</small>

               </strong> </a>
                      </li>
                  </div>
                  <!--              login part-->
                  <div class="login-part2389">
                      <h4>Login</h4>
                      <div class="input-group300"> <span><i class="fa fa-user" aria-hidden="true"></i></span>
                          <input type="text" class="namein309" placeholder="Username"> </div>
                      <div class="input-group300"> <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                          <input type="password" class="passin309" placeholder="Name"> </div>
                      <a href="#">
                          <button type="button" class="userlogin320">Log In</button>
                      </a>
                      <div class="rememberme">
                          <label>
                              <input type="checkbox" checked="checked"> Remember Me</label> <a href="#" class="resbutton3892">Register</a> </div>
                  </div>
                  <!--              highest part-->
                  <div class="highest-part302">
                      <h4>Highest Points</h4>
                      <div class="pints-wrapper">
                          <div class="left-user3898">
                              <a href="#"><img src="image/images.png" alt="Image"></a>
                              <div class="imag-overlay39"> <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                          </div> <span class="points-details938">
                   <a href="#"><h5>Ahmed Hasan</h5></a>
              <a href="#" class="designetion439">Pundit</a>
                   <p>206 points</p>
               </span> </div>
                      <hr>
                      <div class="pints-wrapper">
                          <div class="left-user3898">
                              <a href="#"><img src="image/images.png" alt="Image"></a>
                              <div class="imag-overlay39"> <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                          </div> <span class="points-details938">
                   <a href="#"><h5>Ahmed Hasan</h5></a>
              <a href="#" class="designetion439">Pundit</a>
                   <p>206 points</p>
               </span> </div>
                      <hr>
                      <div class="pints-wrapper">
                          <div class="left-user3898">
                              <a href="#"><img src="image/images.png" alt="Image"></a>
                              <div class="imag-overlay39"> <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                          </div> <span class="points-details938">
                   <a href="#"><h5>Ahmed Hasan</h5></a>
              <a href="#" class="designetion439">Pundit</a>
                   <p>206 points</p>
               </span> </div>
                      <hr>
                      <div class="pints-wrapper">
                          <div class="left-user3898">
                              <a href="#"><img src="image/images.png" alt="Image"></a>
                              <div class="imag-overlay39"> <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                          </div> <span class="points-details938">
                   <a href="#"><h5>Ahmed Hasan</h5></a>
              <a href="#" class="designetion439">Pundit</a>
                   <p>206 points</p>
               </span> </div>
                      <hr>
                      <div class="pints-wrapper">
                          <div class="left-user3898">
                              <a href="#"><img src="image/images.png" alt="Image"></a>
                              <div class="imag-overlay39"> <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a> </div>
                          </div> <span class="points-details938">
                   <a href="#"><h5>Ahmed Hasan</h5></a>
              <a href="#" class="designetion439">Pundit</a>
                   <p>206 points</p>
               </span> </div>
                  </div>
                  <!--               end of Highest points -->
                  <!--          start tags part-->
                  <div class="tags-part2398">
                      <h4>Tags</h4>
                      <ul>
                          <li><a href="#">analytics</a></li>
                          <li><a href="#">Computer</a></li>
                          <li><a href="#">Developer</a></li>
                          <li><a href="#">Google</a></li>
                          <li><a href="#">Interview</a></li>
                          <li><a href="#">Programmer</a></li>
                          <li><a href="#">Salary</a></li>
                          <li><a href="#">University</a></li>
                          <li><a href="#">Employee</a></li>
                      </ul>
                  </div>
                  <!--          End tags part-->
                  <!--        start recent post  -->
                  <div class="recent-post3290">
                      <h4>Recent Post</h4>
                      <div class="post-details021"> <a href="#"><h5>How much do web developers</h5></a>
                          <p>I am thinking of pursuing web developing as a career & was ...</p> <small style="color: #848991">July 16, 2017</small> </div>
                      <hr>
                      <div class="post-details021"> <a href="#"><h5>How much do web developers</h5></a>
                          <p>I am thinking of pursuing web developing as a career & was ...</p> <small style="color: #848991">July 16, 2017</small> </div>
                      <hr>
                      <div class="post-details021"> <a href="#"><h5>How much do web developers</h5></a>
                          <p>I am thinking of pursuing web developing as a career & was ...</p> <small style="color: #848991">July 16, 2017</small> </div>
                  </div>
                  <!--       end recent post    -->
              </aside>
          </div>
      </div>
  </section>
@endsection
