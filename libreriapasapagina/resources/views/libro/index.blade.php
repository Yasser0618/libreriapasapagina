@if(session('success'))
    <div>
        {{session('success')}}
    </div>
@endif
<h1>Listado de libros</h1>
<table>
    <tr>
        <th>Libro</th>
        <th>Precio</th>
        <th colspan="2">Acciones</th>
    </tr>
    @foreach ($libros as $libro)
    <tr>
        <td><a href="{{route('libro.show', $libro)}}">{{$libro->titulo}}</td>
        <td>{{$libro->precio}}</td>
        <td>Editar</td>
        <td><a href="{{route('libro.confirmDestroy', $libro)}}">Borrar</a></td>
    </tr>
    @endforeach
</table>