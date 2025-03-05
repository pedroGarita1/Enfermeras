<form action="{{ route('Contactanos-store') }}" method="post">
  @csrf
    <!-- Modal -->
    <div class="modal fade" id="modal_contactanos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contactanos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-transparent @error('nombre') is-invalid @enderror" id="id_nom_usuario" value="{{ old('nombre') }}" placeholder="name" name="nombre">
                                <label for="id_nom_usuario" >Nombre</label>
                                @error('nombre')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control bg-transparent @error('email') is-invalid @enderror" id="id_nom_usuario" value="{{ old('email') }}" placeholder="name" name="email">
                                <label for="id_nom_usuario" >Correo electronico</label>
                                @error('email')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control bg-transparent @error('cargo') is-invalid @enderror" id="id_nom_usuario" value="{{ old('cargo') }}" placeholder="name" name="cargo">
                                <label for="id_nom_usuario" >Cargo / Puesto</label>
                                @error('cargo')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control bg-transparent @error('estado') is-invalid @enderror" id="id_nom_usuario" value="{{ old('estado') }}" placeholder="name" name="estado">
                                <label for="id_nom_usuario" >Estado / Provincia</label>
                                @error('estado')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-transparent @error('apellido') is-invalid @enderror" id="id_nom_usuario" value="{{ old('apellido') }}" placeholder="name" name="apellido">
                                <label for="id_nom_usuario" >Apellido</label>
                                @error('apellido')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control bg-transparent @error('organizacion') is-invalid @enderror" id="id_nom_usuario" value="{{ old('organizacion') }}" placeholder="name" name="organizacion">
                                <label for="id_nom_usuario" >Compañía / Organización</label>
                                @error('organizacion')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control bg-transparent @error('telefono') is-invalid @enderror" id="id_nom_usuario" value="{{ old('telefono') }}" placeholder="name" name="telefono">
                                <label for="id_nom_usuario" >Teléfono</label>
                                @error('telefono')
                                    <div id="basic-addon2" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent  @error('comentarios') is-invalid @enderror" name="comentarios"
                                        id="floatingTextarea2" style="height: 100px">{{ old('comentarios') }}</textarea>
                                    <label for="floatingTextarea2" class="">Comentarios</label>
                                    @error('comentarios')
                                        <div id="basic-addon2" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-meeimex-blue">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>