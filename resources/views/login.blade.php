<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .header-b{
            background-color:#DCD6F7;
        }
        .nav-b{
            background-color:#424874;
        }
        .content-b{
            background-color:#A6B1E1;
        }
        .footer-b{
            background-color:Black;
        }
    </style>
</head>
<body class="header-b">
    <div>
        <center><h1>Login<h1></center>
    </div>

    <nav class="nav-b">
      <h2><center><font color=white>Ingresa los datos requeridos</font></center></2>
    </nav>

    <div class="content-b">

    <form action="{{route('logged in')}}" method="POST">
    {{csrf_field()}}
    <div class="ab-3">
       <label for="inuser" class="form-label">Username:</label>
       <input type="text" class="form-control" name="inuser" id="inuser">
    </div>
    <div class="ab-3">
       <label for="inpass" class="form-label">Password:</label>
       <input type="password" class="form-control" name="inpass" id="inpass">
    </div>
       <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
<br>
<footer class="footer-b">
<center><font color=white>Centro de Bachillerato Tecnológico industrial y de servicios no. 122</font></center>
<center><font color=white>Elaborado por Piñon Villa Diana Laura</font></center>
<center><font color=white>5°F</font></center>
</footer>