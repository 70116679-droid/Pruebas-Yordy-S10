<h1>Lista de Productos</h1>
<a href="{{ route('productos.create') }}">Nuevo Producto</a>
<table border="1">
 <tr>

<th>ID</th><th>Nombre</th><th>Descripcion</th><th>Precio(S/.)</th><th>Stock</th><th>Imagen</th><th>Acciones</th>
 </tr>
 @foreach($productos as $producto)
 <tr>
 <td>{{ $producto->id }}</td>
 <td>{{ $producto->nombre}}</td>
 <td>{{ $producto->descripcion}}</td>
 <td>{{ $producto->precio}}</td>
  <td>{{ $producto->stock}}</td>
  <td>    
    @if($producto->imagen)
    <img src="{{ asset('storage/'.$producto->imagen) }}" width="120">
    @else
    Sin imagen
    @endif
    </td>
    <td>
 <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
 <form action="{{ route('productos.destroy', $producto->id) }}"
method="POST" style="display:inline">
 @csrf
 @method('DELETE')
 <button type="submit">Eliminar</button>
 </form>
 </td>
 </tr>
 @endforeach
</table>

