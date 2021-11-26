<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Si todo esta bien carga la pagina + nombre de la cuenta asociada en la session del controller -->
    @if (Session::get('nombre'))
        <p>{{Session::get('nombre')}}</p>
    <table>
        <td>
            <form action="{{url('alumno/crear')}}" method="get">
                <input type="submit" value="Crear alumno">
            </form>
        </td>
        <td>
            <form action="{{url('alumno/logout')}}" method="get">
                <input type="submit" value="Logout">
            </form>
        </td>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>EDAD</th>
        </tr>
        
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nombre_alu}}</td>
            <td>{{$user->apellido_alu}}</td>
            <td>{{$user->edad_alu}}</td>
            <td>
                <form action="{{url('alumno/borrar/'.$user->id)}}" method="post">
                {{csrf_field()}}

                {{method_field('DELETE')}}
                <input type="submit" value="Deletear">
                </form>
            </td>
            <td>
                <form action="{{url('alumno/modificar/'.$user->id)}}" method="get">
                    
                    <input type="submit" value="Modificar">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @else
        <p>No esta hecho el login</p>
        <?php
            //Al no definirse te lleva al login. Aqui hay dos manera de hacerlo
            return redirect()->to('alumno/')->send();
            //header("Location: http://localhost:8000/alumno/");
            exit();
        ?>
    @endif
</body>
</html>