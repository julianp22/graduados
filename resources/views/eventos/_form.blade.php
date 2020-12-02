@csrf
<div class="form-group">
    <label for="titulo">Título</label>
    <input class="form-control border-0 bg-light shadow-sm @error('titulo') is-invalid @enderror" id="titulo"
        type="text" placeholder="Título" name="titulo" value="{{ old('titulo', $evento->titulo) }}"
        onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}"
        onfocus="if (this.value == '') {this.value = '';}">
    @error('titulo')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control border-0 bg-light shadow-sm @error('descripcion') is-invalid @enderror"  
    name="descripcion" 
    placeholder="Descripción"
    rows="4">{{ old('descripcion', $evento->descripcion) }}</textarea>
    @error('descripcion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="fecha_inicio">Fecha de inicio</label>
    <input
        class="form-control border-0 bg-light shadow-sm @error('fecha_inicio') is-invalid @enderror"
        id="fecha_inicio" type="date" placeholder="Fecha de inicio" name="fecha_inicio"
        value="{{ old('fecha_inicio', $evento->fecha_inicio) }}">
    @error('fecha_inicio')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="fecha_fin">Fecha fin</label>
    <input
        class="form-control border-0 bg-light shadow-sm @error('fecha_fin') is-invalid @enderror"
        id="fecha_fin" type="date" placeholder="Fecha fin" name="fecha_fin"
        value="{{ old('fecha_fin', $evento->fecha_fin) }}">
    @error('fecha_fin')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href=" {{ route('eventos.show', $evento) }} ">
    Cancelar
</a>