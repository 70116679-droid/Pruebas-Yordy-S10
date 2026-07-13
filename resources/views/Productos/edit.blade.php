<h1>Editar Producto</h1>
<form action="{{ route('productos.update', $producto->id) }}" method="POST">
 @csrf
 @method('PUT')
 <label>Nombre</label><input type="string" name="nombre" value="{{ $producto->nombre }}"><br>
 <label>Descripción</label><input type="text" name="descripcion" value="{{$producto->descripcion }}"><br>
 <label>Precio</label><input type="number" name="precio" value="{{ $producto->precio }}"><br>
<label>Stock</label><input type="number" name="stock" value="{{ $producto->stock }}"><br>
<label>Imagen</label><input type="file" name="imagen" value="{{ $producto->imagen }}">
<button type="submit">Actualizar</button>
</form>


