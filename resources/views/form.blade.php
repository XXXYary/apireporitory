

<html>
<head>
    <title>------------</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" >
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.js"></script>
</head>
<body>
 
<div class="container col-md-4 col-md-offset-4">
 
    <form>
        <div class="container">
            <h2>Clasificaciones</h2>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    Seleccione una opción
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" ><center>
                    @foreach($clasificacion as $clasificacion)
                    <li><a href="{{$clasificacion->idc}}">{{$clasificacion->nombre}}</a></li>
                    @endforeach
                </center>
                </ul>
            </div>
        </div>
 
    </form>
</div>
</body>
</html>