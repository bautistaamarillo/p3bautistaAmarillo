<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Lista de materias ') }}
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
                            <th> ID:</th>
    </thead>
    </tr>
    @foreach ($subjects as $subject)
    <tbody>
        <tr>
            <td> {{$subject->name}}</td>
            <td> {{$subject->id}}</td>
            
            <td>
                <a href="subjects/{{$subject->id}}/edit">
                <button value="editar">Editar</button>
                </a>
                <form action="{{route('subjects.destroy',[$subject->id])}}" method="post">
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
