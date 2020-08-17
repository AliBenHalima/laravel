<h1> Welcome to SatoriPop  {{ session('data')['name'] }}</h1>

@if(session()->has('LoginMessage'))
<div class="alert alert-success" > {{session()->get('message')}} </div>
@endif

<a href="logout"  > Logout </a>
