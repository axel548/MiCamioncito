@include('partials/navbar')

<br>
<div class="container-fluid">
    <div class="container">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Crear Vehículo</h5>
                <form action=" {{ route('vehiculos.crear') }} " method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            {{-- Capacidad del vehículo en metros cúbicos --}}
                            <div class="mb-3">
                                <label for="capacidad_m2" class="form-label">Capacidad del vehículo en metros
                                    cúbicos</label>
                                <input type="number" class="form-control" id="capacidad_m2" name="capacidad_m2">
                            </div>

                            {{-- Kilómetros recorridos del vehículo --}}
                            <div class="mb-3">
                                <label for="km_recorrido" class="form-label">Kilómetros recorridos del
                                    vehículo</label>
                                <input type="number" class="form-control" id="km_recorrido" name="km_recorrido">
                            </div>

                            {{-- Costos de depreciación del vehículo por kilómetro recorrido --}}
                            <div class="mb-3">
                                <label for="depreciacion" class="form-label">Costos de depreciación del vehículo por
                                    kilómetro recorrido</label>
                                <input type="number" class="form-control" id="depreciacion" name="depreciacion">
                            </div>



                        </div>
                        <div class="col">

                            {{-- Capacidad del vehículo en metros cúbicos --}}
                            <div class="mb-3">
                                <label for="consumo_combustible" class="form-label">Consumo de combustible por
                                    kilómetro del
                                    vehículo</label>
                                <input type="number" class="form-control" id="consumo_combustible"
                                    name="consumo_combustible">
                            </div>

                            {{-- Precio del vehículo --}}
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio del vehículo</label>
                                <input type="number" class="form-control" id="precio" name="precio">
                            </div>

                            {{-- Tipo de carga que puede ser transportada --}}
                            <div class="mb-3">
                                <label for="tipo_carga" class="form-label">Tipo de carga que puede ser
                                    transportada</label>
                                <textarea class="form-control" name="tipo_carga" id="tipo_carga" cols="30" rows="4"></textarea>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>

            </div>
        </div>
    </div>
</div>

@include('partials/footer')
