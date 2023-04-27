<form action="{{route('students.store')}}" method="post">
    @CSRF
    
    Nombre: <input type="text"  name="name"> <br>
    Apellido: <input type="text"  name="lastname"> <br>
    DNI: <input type="text"  name="dni"> <br>
    Cumpleaños: <input type="date"  name="birthdate"> <br>
    <input type="radio" id="opcion1" name="status" value="1">
    <label for="opcion1">1</label><br>
    <input type="radio" id="opcion2" name="status" value="0">
    <label for="opcion2">0</label><br>
     

    <input type="submit" value="Enviar" >


</form>