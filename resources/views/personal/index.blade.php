@include('partials/navbar')

<br>
<div class="container-fluid">
    <div class="container">

        <nav class="navbar" style="background-color: #edf2f4;">
            <div class="container-fluid">
                <a class="navbar-brand">Personal</a>
                <a href=" {{ route('personal.nuevo') }} " class="btn btn-outline-success">Nuevo</a>
            </div>
        </nav>
        <br>

        <table class="table table-striped table-hover">
            <thead>
                <th>#</th>
                <th>DPI</th>
                <th>Nombre</th>
                <th>Horario</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </thead>
            <input type="hidden" name="iterador" value=" {{ $i = 1; }} ">
            <tbody>
                @foreach ($personal as $v)
                    <tr>
                        <th scope="row"> {{ $i++ }} </th>
                        <td> {{ $v->dpi }} </td>
                        <td> {{ $v->nombre }} </td>
                        <td> {{ $v->horario_disponible_inicio }}, {{ $v->horario_disponible_fin}}</td>
                        <td> {{ $v->tipo }} </td>
                        <td>
                            <a href="#" class="btn btn-outline-success">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
</div>

@include('partials/footer')
