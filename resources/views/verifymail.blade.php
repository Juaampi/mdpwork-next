<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Bienvenido a Mardeltrabaja.com</title>
</head>
<body>

   <p> El usuario {{$user->name}} quiere verificarse. </p>

    <p> Su DNI es: <strong>{{$user->dni}} </strong> </p>

   <p> Y la imagen es: </p>

   <p> <img src="https://mardeltrabaja.com/img-jobs/{{$user->imgdni}}" /> </p>

   <p>Si queres aprobar su verificación:</p>

   <a href="https://mardeltrabaja.com/aprobarVerificacion?user_id={{$user->id}}">VERIFICAR PERFIL </a>

</body>
</html>
