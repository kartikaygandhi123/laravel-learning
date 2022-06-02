
<x-header/>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
  <nav style="color:white" class="nav bg-danger "> 
<div class="container d-flex justify-content-center"> <h1 class="nav-item">User Login</h1></div>
</nav>  

    {{-- {{$errors}} --}}
<section style="height: 50vh;background-color:rgb(221, 198, 114)">
    <div style="border:2px solid white;justify-content:center;align-items:center;" 
class=" container d-flex justify-content-around  ">
    
    <form action="submit" method="POST">
    @csrf
    <label for="email">Email:</label>
        <input class="form-control" type="text" id="email" name="username" placeholder="Enter user id"/><br>
        <span style="color: red">@error('username'){{$message}}@enderror</span>
        <br>
        <hr>
        <label for="password">Password:</label>
        
        <input   class="form-control" type="password" 
        id="password"
        name="userpassword" placeholder="Enter user password"/><br>
        <span style="color: red">@error('userpassword'){{$message}} @enderror</span>
        <br>
    <button  class="form-control btn btn-sm btn-success" type="submit">Login</button>
    
    
    </form> 

</div>
</section>















    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>