<li>
    <div class="comment-main-level">
       <!-- Avatar -->
       <div class="comment-avatar"><img src="/image/images.png" alt=""></div>
       <!-- Contenedor del Comentario -->
       <div class="comment-box">
           <div class="comment-head">
               <h6 class="comment-name"><a href="#">{{ $reply->owner->name }}</a></h6> <span><i class="fa fa-clock-o" aria-hidden="true"> January 15 , 2014 at 10:00 pm</i></span> <i class="fa fa-reply"></i> <i class="fa fa-heart"></i> </div>
           <div class="comment-content">{{ $reply->body }}</div>
       </div>
    </div>
</li>