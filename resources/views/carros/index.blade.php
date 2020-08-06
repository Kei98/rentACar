<h1>Carros disponibles</h1>

<a href="{{route("carro.create")}}">Insertar Carro</a>

<ul>
    @forelse($carros as $car)
        <li>
            <a href="{{ route("carro.show", $car) }}">{{ $car->id . ". " . $car->marca}}></a>
        </li>
    @empty
        <li>No hay carros disponibles</li>
    @endforelse
</ul>
