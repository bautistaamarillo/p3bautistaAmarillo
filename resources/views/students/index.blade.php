<li>Hola mundo</li>

<table border="1">
    
    <thead>
        <tr>
            <th> Nombre:</th>
            <th> Apellido:</th>
            <th> DNI:</th>
            <th> Cumpleaños:</th>
            <th> Acciones:</th>
    </thead>
    </tr>
    @foreach ($students as $student)
    <tbody>
        <tr>
            <td> {{$student->name}}</td>
            <td> {{$student->lastname}}</td>
            <td> {{$student->dni}}</td>
            <td> {{$student->birthdate}}</td>
            <td><a href="students/{{$student->id}}/edit"><button value="editar">Editar</button></a>
                <form action="{{route('students.destroy',[$student->id])}}" method="post">
                    @CSRF
                    @method('delete')
                <button type="submit"> Borrar</button>
                </form>
            </td>     
    </tbody>
    </tr>
    
    @endforeach
   
    </table> <br>

    