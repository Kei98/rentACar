<h1>Detalles del Carro</h1>

<a href="{{ route("carro.edit", $carro) }}">Editar carro</a>
<form action="{{ route("carro.destroy", $carro) }}" method="POST">
    @csrf
    @method("DELETE")
    <input type="submit" value="Eliminar">
</form>

<p>Modelo: {{ $carro->modelo }}</p>
<p>Marca: {{ $carro->marca }}</p>
<p>Año: {{ $carro->anio }}</p>
<p>Cantidad de Pasajeros: {{ $carro->cantidadPasajeros }}</p>
<p>Transmisión: {{ $carro->transmision }}</p>
<p>Precio: {{ $carro->precio }}</p>

<img src="{{ $carro->foto }}" alt="{{ $carro->modelo }}">
<br>

<a href="{{ route("carro.index") }}">Regresar al menú</a>
