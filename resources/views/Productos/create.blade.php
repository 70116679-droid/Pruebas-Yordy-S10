<h1>Nuevo Producto</h1>
<form action="{{ route('productos.store') }}"
method="POST">
@csrf
<label>Nombre</label><input type="text"
name="nombre" value="{{old('nombre')}}"><br>
@error('nombre')
<br>
<small>*{{$message}}</small>
</br>
@enderror
<label>Descripcion</label><input type="text"
name="descripcion" value="{{old('descripcion')}}"><br>
@error('descripcion')
<br>
<small>*{{$message}}</small>
</br>
@enderror
<label>Precio(S/.)</label><input type="number"
name="precio" value="{{old('precio')}}"><br>
@error('precio')
<br>
<small>*{{$message}}</small>
</br>
@enderror
<label>Stock</label><input type="number"
step="0.01" name="stock" value="{{old('stock')}}"><br>
@error('stock')
<br>
<small>*{{$message}}</small>
</br>
@enderror
<label>Imagen</label><input type="file"
name="imagen" value="{{old('imagen')}}"><br>
@error('imagen')
<br>
<small>*{{$message}}</small>
</br>
@enderror
<button type="submit">Guardar</button>
</form>

