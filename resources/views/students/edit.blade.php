
<form action="{{route('students.update',$student[0]->id)}}" method="post">
    @CSRF
    @method('put')
    
    Nombre: <input type="text" value="{{$student[0]->name}}" name="name"> <br>
    Apellido: <input type="text" value="{{$student[0]->lastname}}" name="lastname"> <br>
    DNI: <input type="text" value="{{$student[0]->dni}}" name="dni"> <br>
    Cumpleaños: <input type="date" value="{{$student[0]->birthdate}}" name="birthdate"> <br>
     

    <input type="submit" value="Enviar" >


</form>