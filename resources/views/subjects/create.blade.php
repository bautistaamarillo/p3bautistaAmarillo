<form action="{{route('subjects.store')}}" method="post">
    @CSRF
    
    Nombre: <input type="text"  name="name"> <br>

    <input type="submit" value="Enviar" >


</form>