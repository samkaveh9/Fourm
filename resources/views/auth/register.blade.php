<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Ask online Form">
    <meta name="description" content="The Ask is a bootstrap design help desk, support forum website template coded and designed with bootstrap Design, Bootstrap, HTML5 and CSS. Ask ideal for wiki sites, knowledge base sites, support forum sites">
    <meta name="keywords" content="HTML, CSS, JavaScript,Bootstrap,js,Forum,webstagram ,webdesign ,website ,web ,webdesigner ,webdevelopment">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/css/loginstyle.css">
</head>

<body>
    <div class="modal-wrap">
        <div class="modal-bodies">
            <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Sign Up</div>
                {{--  <div>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae qui dolorum repellat.
                </div>  --}}
                <div class="description">Hello there, Register Form</div>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                    <input type="text" name="name" placeholder="Username*" />
                    <input type="email" name="email" placeholder="E-Mail*" />
                    <input type="password" name="password" placeholder="Password*" />
                    <input type="password" name="password_confirmation" placeholder="Confirm Password*" />
                    <div class="text-center">
                        {{--  <div class="button">Sign Up</div>  --}}
                        <button type="submit" class="button">Sign Up</button>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12 sign-in28912">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary btn-primary3838">Facebook</a> <a href="#" class="btn btn-danger btn-danger37883">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
</body>
</html>
