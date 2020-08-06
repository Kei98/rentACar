<div class="form">
    <form action="{{route('carro.store')}}" method="POST">
        @csrf

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo">

        <label for="marca">Marca</label>
        <input type="text" name="marca">

        <label for="anio">Año</label>
        <input type="number" name="anio">

        <label for="cantidadPasajeros">Cantidad de Pasajeros</label>
        <input type="number" name="cantidadPasajeros">

        <label for="transmision">Transmisión</label>
        <input type="text" name="transmision">

        <label for="precio">Precio</label>
        <input type="number" name="precio">

        <label for="foto">Foto</label>
        <input type="text" name="foto">

        <input type="submit" value="Guardar">
    </form>
</div>
