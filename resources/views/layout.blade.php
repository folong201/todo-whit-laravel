<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TODO</title>
</head>
<body>
<div style="float: right; clear: both;">
    
    <a href="{{Route("form");}}"><button style="background-color:lawngreen; text-decoration:beige">
        ajouter</button></a>
</div>
    <div>
       <h1> <a href="{{Route('presenter');}}">Acceuille</a></h1>
    </div>
    
<div class="row">
    @yield('afficher');
</div>
<br>
    <a href="{{Route("form");}}"><button class="foro">
        ajouter</button></a>


</body>
</html>

<style>
    .foro{
        background-color: lawngreen;
    }
</style>