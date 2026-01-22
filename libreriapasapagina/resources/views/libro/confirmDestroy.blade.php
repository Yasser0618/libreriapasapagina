<h1>Eliminar libro {{$libro->titulo}}</h1>
<p>¿Quires eliminar este libro?</p>
<form action="{{route('libro.destroy', $libro)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type='submit'>Eliminar</button>
    <a href="{{route('libro.index')}}">Cancelar</a>
</form>
