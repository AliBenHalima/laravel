<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}" />
    <title>Document</title>
</head>
<body class="text-center ">
    <form class="form-signin" action="SignUp" method="POST">
    {{@csrf_field()}}
  <img class="mb-4 rounded-circle"  src="img/satoripop.png" alt="nothing" width="100" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="name" type="text" id="inputEmail" class="form-control" placeholder=" User Name" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input  name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <!-- <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label> -->
  </div>
  <button class="btn btn-lg btn-warning btn-block" type="submit">Sign up</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
  @if(session()->has('message'))
<div class="alert alert-success" > {{session()->get('message')}} </div>
@endif
</form>
</body>















<!-- 

    <h1 class="text-center"> Sign Up Page </h1>
<form action="SignUp" method="POST">
    {{@csrf_field()}}
    <input type="text" name="name" placeholder="name">
    <input type="password" name="password" placeholder="password">
    <button type ="submit" class="btn btn-success"> Sign Up ! </button>
</form>
</body> -->
</html>
