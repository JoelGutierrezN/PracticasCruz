<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">clave</th>
      <th scope="col">Producto</th>
      <th scope="col">Existencias</th>
      <th scope="col">Precio Unitario</th>
      <th scope="col">Unidad de Medida</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>
  <tbody>
    @foreach($productos as $producto)
    <tr>
      <td>{{ $producto->clave }}</td>
      <td>{{ $producto->producto }}</td>
      <td>{{ $producto->existencias }}</td>
      <td>{{ $producto->precio_unitario }}</td>
      <td>{{ $producto->unidad_medida }}</td>
      <td>{{ $producto->estatus}}</td>
    </tr>
    @endforearch
</table>
    
</body>
</html>
