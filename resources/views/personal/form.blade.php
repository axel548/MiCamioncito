@include('partials/navbar')

<script src=" {{ asset('js/assets/scripts/personal.js') }} "></script>


<br>
<div class="container-fluid">
    <div class="container">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Crear Personal</h5>
                <form action=" {{ route('personal.crear') }} " method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col">
                            {{-- DPI --}}
                            <div class="mb-3">
                                <label for="dpi" class="form-label">DPI</label>
                                <input type="number" class="form-control" id="dpi" name="dpi" maxlength="13">
                            </div>

                            {{-- Nombre --}}
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>

                            {{-- Telefono --}}
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telefono</label>
                                <input type="number" class="form-control" id="tel" name="tel" maxlength="8">
                            </div>



                        </div>
                        <div class="col">

                            {{-- Horario Inicio --}}
                            <div class="mb-3">
                                <label for="horario_inicio" class="form-label">Horario Disponibilidad Inicio</label>
                                <input type="date" class="form-control" id="horario_inicio"
                                    name="horario_inicio">
                            </div>

                            {{-- Horario Fin --}}
                            <div class="mb-3">
                                <label for="horario_fin" class="form-label">Horario Disponibilidad Fin</label>
                                <input type="date" class="form-control" id="horario_fin" name="horario_fin">
                            </div>

                            {{-- Tipo de personal --}}
                            <div class="mb-3">
                                <label for="tipo_personal" class="form-label">Tipo de personal</label>
                                <select class="form-select" id="tipo_personal" name="tipo_personal">
                                    <option selected>Seleccione una opción</option>
                                    @foreach ($tipo_personal as $t)
                                        <option value=" {{ $t->id }} "> {{ $t->tipo }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row" id="conductor" name="conductor" hidden>
                        cdscscds
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>

            </div>
        </div>
    </div>
</div>

@include('partials/footer')
