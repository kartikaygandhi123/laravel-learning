<x-header/>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
     
     section{
         
        

         height: 400px;
         background-color: rgba(181, 214, 181, 0.573);
     }
     
     h3{
          display: flex;
          justify-content: center;

      }
      .container{
          width: 50vh;
          border: 2px solid red;
          background-color: black;
          color: white;
          border-radius: 12px;
          margin: auto;
         
      }
.btn
      {
margin-bottom: 20px;
      }
  </style>
</head>
  <body>
    
<section>
    <h3>User Login With Session</h3>
<div class="my-5 container container-fluid">


    <form action="userauth" method="POST">
        @csrf
        <label for="inp1">Name</label>
        <input id="inp1" class="form-control" type="text" name="user" placeholder="enter name"><br>
        <span>@error('user'){{$message}}@enderror</span><br>
       
        <label for="inp2">Password</label>
        <input id="inp2" class="form-control" type="password" name="password" placeholder="enter password"><br>
        <span>@error('password'){{$message}}@enderror</span><br>
        <button class="form-control btn btn-danger " type="submit">login</button>
        </form>

</div>
</section>
    
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>















