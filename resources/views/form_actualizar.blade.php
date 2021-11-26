<!DOCTYPE HTML>
<html>
<head>
  <title>Actualizar alumno</title>
  <meta charset="UTF-8">
</head>
<body>
  <form action="{{url('alumno/actualizar_alu')}}" method="post">
      @csrf
      {{method_field('PUT')}}
      Nombre alumno
      <input type="text" name="nombre_alu" value="{{$user->nombre_alu}}" placeholder="Nombre...">
      <br>
      Apellido alumno
      <input type="text" name="apellido_alu" value="{{$user->apellido_alu}}" placeholder="Apellido...">
      <br>
      Edad alumno
      <input type="text" name="edad_alu" value="{{$user->edad_alu}}" placeholder="Edad...">
      <br>
      <input type="hidden" name="id" value="{{$user->id}}">
      <input type="submit" value="Confirmar">
  </form>
</body>
</html>