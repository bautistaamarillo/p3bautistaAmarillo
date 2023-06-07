<form action="{{route('subjects.update',$subject[0]->id)}}" method="post">
    @CSRF
    @method('put')

    Nombre: <input type="text" value="{{$subject[0]->name}}" name="name"> <br>
    ID: <input type="integer" value="{{$subject[0]->id}}" name="id"> <br>

     

    <input type="submit" value="Enviar" >


</form>