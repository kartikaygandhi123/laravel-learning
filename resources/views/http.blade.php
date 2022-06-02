

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
    



    
    <h3 class="d-flex justify-content-center bg-success">US Population</h3>


    <table class="table table-warning" border="2">
    
    
    <tr>
    
    <th>ID Nation</td>
    <th>Nation</td>
    <th>ID Year</td>
    <th>Year</td>
    <th>Population</td>
    <th>Slug Nation</td>
     </tr>

     @foreach ($collection as $item )
       
     <tr>
    
      <td>{{$item['ID Nation']}}</td>
      <td>{{$item['Nation']}}</td>
      <td>{{$item['ID Year']}}</td>
      <td>{{$item['Year']}}</td>
      <td>{{$item['Population']}}</td>
     <td>{{$item['Slug Nation']}}</td>
       </tr>
  


     @endforeach




    
  

     
    
    </table>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>




















