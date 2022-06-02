<x-header/>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <style>
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
      .btn{
          display: flex;
          justify-content: center;
          margin-left: 100px;
          margin-bottom: 20px;
      }
 </style>
</head>
  <body>
  

<section>
    <div class="container">
        <h3>Add Member</h3>
        @if(session('user'))
        <h3 style="color:rgb(2, 115, 60)">{{session('user')}} user has been added</h3>
        @endif
        <form class="form" form action="addmember" method="POST">
        @csrf
        <label for="inp1">Name</label>
        <input id="inp1" class="form-control" type="text" name="user" placeholder="Enter user name"><br>
        <label for="inp2">Password</label>
        <input id="inp2" class="form-control" type="text" name="password" placeholder="Enter user password "><br>
        <label for="inp3">Email</label>
        <input id="inp3" class="form-control" type="text" name="email" placeholder="Enter user email"><br>
        <button type="submit" class="btn btn-danger">Add Member</button>
        
        </form>
    </div>
</section>

<section>

<h3 class="my-5">This is a Flash Session And Stores Value Only upto 1 refresh</h3>

</section>

    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>










