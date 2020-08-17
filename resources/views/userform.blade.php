<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
     <!-- Custom styles for this template -->
     <link href="signin.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
     <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}" />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
</head>
  <body class="text-center ">
    <form class="form-signin" action="login" method="POST">
    {{@csrf_field()}}
    @if(session()->has('message'))
<div class="alert alert-success" > {{session()->get('message')}} </div>
@endif
  <img class="mb-4 rounded-circle" src="img/satoripop.png" alt="nothing" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="name" type="text" id="inputEmail" class="form-control" placeholder=" User Name" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input  name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <!-- <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label> -->
  </div>
  <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>

</form>





<!-- 

    <div class="container" >
<h1 class="text-center"> Log in Page </h1>
<form action="login" method="POST">
    {{@csrf_field()}}
    <input type="text" name="name" placeholder="name">
    <input type="password" name="password" placeholder="password">
    <button type ="submit" class="btn btn-success"> Send</button>
</form>
@if(session()->has('message'))
<div class="alert alert-success" > {{session()->get('message')}} </div>
@endif

 -->


</body>
</html>
