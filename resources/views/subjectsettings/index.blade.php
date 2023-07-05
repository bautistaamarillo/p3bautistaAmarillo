<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1 style="text-align:center">Configuracion de las Materias</h1>

<form action="{{route('subjectsettings.store')}}" method="post">
    @CSRF
@for ($i = 1; $i <=5; $i++)
<input type="hidden" name="subject_id" value="{{$subject_id}}"> <br>
<input type="checkbox" name="day[]" > {{env($i)}} <br>
<input type="time" name="start_time[]"> <br>
<input type="time" name="limit_time[]"> <br>
<input type="time" name="end_time[]"> <br>
@endfor
<button> Enviar</button>
</form>







</body>
</html>
