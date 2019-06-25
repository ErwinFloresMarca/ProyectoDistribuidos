<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <title>FIXTURE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/supersized.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="page-container">
            <h1>Login</h1>
            {{Form::open(array('method'=>'POST','route'=>'login'))}}
              {{Form::text('username','',['class'=>'username','placeholder'=>'Nombre Usuario'])}}
              {{Form::password('password',['class'=>'password','placeholder'=>'Contraseña'])}}
              @if(session('estado'))

                <font color='red'>
                  <b>
                    {{ session('estado') }}
                  </b>
                </font>
              @endif
                <button type="submit" class="btn btn-primary" >Ingresar</button>
            {{Form::close()}}
        </div>
        <script src="js/jquery-1.8.2.min.js"></script>
        <script src="js/supersized.3.2.7.min.js"></script>
        <script src="js/supersized-init.js"></script>
        <script src="js/scripts.js"></script>

    </body>

</html>
