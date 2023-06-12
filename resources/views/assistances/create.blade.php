<form action="{{route('assistances.store')}}" method="post">
    @CSRF
    
    Ingrese el DNI que desea registrar como presente. <br>

    DNI: <input type="text"  name="dni"> <br>
    <input type="submit" value="Enviar" >


</form>