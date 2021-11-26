<!DOCTYPE HTML>
<html>
<head>
  <title>Crear alumno</title>
  <meta charset="UTF-8">
</head>
<body>
  <form action="{{url('alumno/crear_alu')}}" method="post">
      @csrf
      {{method_field('PUT')}}
      Nombre alumno
      <input type="text" name="nombre_alu" placeholder="Nombre...">
      <br>
      Apellido alumno
      <input type="text" name="apellido_alu" placeholder="Apellido...">
      <br>
      Edad alumno
      <input type="text" name="edad_alu" placeholder="Edad...">
      <br>
      <input type="submit" value="Crear">
  </form>
</body>
</html>