<div class="form">
    <form action="{{ route('carro.update', $carro) }}" method="POST">
        @csrf

        @method("PATCH")

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" value="{{ $carro->modelo }}">

        <label for="marca">Marca</label>
        <input type="text" name="marca" value="{{ $carro->marca }}">

        <label for="anio">Año</label>
        <input type="text" name="anio" value="{{ $carro->anio }}">

        <label for="cantidadPasajeros">Cantidad de Pasajeros</label>
        <input type="number" name="cantidadPasajeros" value="{{ $carro->cantidadPasajeros }}">

        <label for="transmision">Transmisión</label>
        <input type="text" name="transmision" value="{{ $carro->transmision }}">

        <label for="precio">Precio</label>
        <input type="text" name="precio" value="{{ $carro->precio }}">

        <label for="foto">Foto</label>
        <input type="text" name="foto" value="{{ $carro->foto }}">

        <input type="submit" value="Guardar">
    </form>
    <a href=" {{ route("carro.index")  }}">Cancelar</a>
</div>
