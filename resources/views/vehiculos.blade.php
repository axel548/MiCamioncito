@include('partials/navbar')

<br>
<div class="container-fluid">
    <div class="container">

        <nav class="navbar" style="background-color: #edf2f4;">
            <div class="container-fluid">
                <a class="navbar-brand">Vehículos</a>
                <a href=" {{ route('vehiculos.nuevo') }} " class="btn btn-outline-success">Nuevo</a>
            </div>
        </nav>
        <br>

        <table class="table table-striped table-hover">
            <thead>
                <th>#</th>
                <th>Capacidad en m²</th>
                <th>Consumo de combustible por km</th>
                <th>Acciones</th>
            </thead>
            <input type="hidden" name="iterador" value=" {{ $i = 1; }} ">
            <tbody>
                @foreach ($vehiculos as $v)
                    <tr>
                        <th scope="row"> {{ $i++ }} </th>
                        <td> {{ $v->capacidad_m_cuadrados }} </td>
                        <td> {{ $v->consumo_combustible_km }} </td>
                        <td> <a href="#" class="btn btn-outline-success">Ver</a> </td>
                    </tr>
                @endforeach

            </tbody>
        </table>



    </div>
</div>

@include('partials/footer')
