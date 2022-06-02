<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Component</title>
    <style>
        .nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    
}
.nav a{
    text-decoration: none;
    color: red;
}

.nav a:hover{

background: red;
width: 20%;

height: 30%;
border-radius:20px;
color:white;
transition:all 0.3s;
font-size: larger;
padding-left:30px; 
}

.na{
    display: flex;
    justify-content: space-around;
    width: 30%;
    
}
    </style>
</head>
<body>

    
<div class="nav">
<div class="text">
    <h1 style="color: red">Laravel </h1>
</div>
    
<div class="na">
    <a href="/">Home</a>
    <a href="/loginsession">LOGIN</a>
    <a href="/logout">LOG-Out </a>
    <a href="/http">API Data</a>
    <a href="/upload">How To Upload</a>
    
    
</div>
</div>
    
<hr>
   
 
</body>

</html>