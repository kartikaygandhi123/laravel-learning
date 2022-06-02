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
     height: 500px;
    background-color: rgba(215, 100, 100, 0.258);


}

.container{
    display: flex;
    justify-content: space-between;

}


  </style>

</head>

  <body>
    <section>

        <div class="container">

            <div> <h4>Hello,{{session('user')}}</h4></div>
           
            <h3>Profile Page</h3>
            
            
                <h5><a style="text-decoration: none;" href="/logout">Logout</a></div></h5>

            
</div>


<div class="container container2">

<div class="card my-4">
   <h5>Write code for the joy of it.</h5>
    Laravel values beauty. We love clean code just as much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every feature has been thoughtfully considered to provide a wonderful developer experience.
</div>


</div>



    </section>
    
    
    
   



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>