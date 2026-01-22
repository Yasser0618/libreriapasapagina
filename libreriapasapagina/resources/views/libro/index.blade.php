<h1>Listado de libros</h1>
<table>
    <tr>
        <th>Libro</th>
        <th>Precio</th>
        <th colspan="2">Acciones</th>
    </tr>
    @foreach ($libros as $libro)
    <tr>
        <td>{{$libro->nombre}}</td>
        <td>{{$libro->precio}}</td>
        <td>Editar</td>
        <td>Borrar</td>
    </tr>
    @endforeach
</table>