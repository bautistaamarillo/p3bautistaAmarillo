<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
    
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
            <td>
                <a href="students/{{$student->id}}/edit">
                <button value="editar">Editar</button>
                </a>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
