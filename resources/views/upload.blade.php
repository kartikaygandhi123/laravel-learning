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
margin-top: 50px;
display: flex;
justify-content: center;


}

  </style>

</head>
  <body>
    
    
    <h3>Upload File</h3>
<div class="container">
    <form action="upload" method="POST" enctype="multipart/form-data"> 
        @csrf
        <input type="file" name="file"><br>
        
        <button type="submit">Upload File</button>
        
        </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>






