<!DOCTYPE HTML>
<html>
<head>
  <title>Login alumno</title>
  <meta charset="UTF-8">
</head>
<body>
  <form action="{{url('alumno/login_post')}}" method="post">
      @csrf
      {{method_field('PUT')}}
      Correo admin
      <input type="text" name="correo" placeholder="Correo...">
      <br>
      Contraseña admin
      <input type="password" name="password" placeholder="Contraseña...">
      <br>
      <input type="submit" value="Loginar">
  </form>
</body>
</html>