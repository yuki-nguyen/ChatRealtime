<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <!-- Custom styles for this template -->
    <link href="/css/register.css" rel="stylesheet">

</head>

<body>

  @include('layouts.nav')

  <div class="container">

       <div class="card bg-light">

           <article class="card-body mx-auto" style="max-width: 400px;">

               <h1> Sign in </h1>

                   <p class="text-center">Get started with your free account</p>

                   <p>

                       <a href="" class="btn btn-block btn-google"> <i class="fab fa-google"></i>   Sign in via Google</a>

                       <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Sign in via facebook</a>

                   </p>


                   <form>

                       <div class="form-group input-group">

                            <div class="input-group-prepend">

                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>

                            </div>

                            <input name="" class="form-control" placeholder="Email address" type="email">

                       </div> <!-- form-group// -->


                       <div class="form-group input-group">

                            <div class="input-group-prepend">

                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>

                            </div>

                            <input name="" class="form-control" placeholder="Create password" type="password">

                       </div> <!-- form-group// -->

                       <div class="form-group">

                           <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />

                           <label for="remember-me">Remember me</label>

                       </div>

                       <div class="form-group">

                           <button type="submit" class="btn btn-primary btn-block"> Sign in </button>

                       </div> <!-- form-group// -->

                       <p class="text-center">Have no account? <a href="/register">Register</a> </p>

                   </form>

               </article>

           </div> <!-- card.// -->

       </div>

       @include('layouts.footer')
</body>
</html>
