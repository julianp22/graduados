@csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input class="form-control border-0 bg-light shadow-sm @error('nombre') is-invalid @enderror" 
    id="nombre" 
    type="text" 
    placeholder="Nombre"
    name="nombre" 
    value="{{ old('nombre', $graduado->nombre) }}"
    onkeydown="return /[a-z, ]/i.test(event.key)"
    onblur="if (this.value == '') {this.value = '';}"
    onfocus="if (this.value == '') {this.value = '';}">
    @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="cedula">Cedula</label>
    <input class="form-control border-0 bg-light shadow-sm @error('cedula') is-invalid @enderror" 
    id="cedula" 
    type="number" 
    placeholder="Cedula"
    name="cedula" 
    value="{{ old('cedula', $graduado->cedula) }}">
    @error('cedula')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control border-0 bg-light shadow-sm @error('email') is-invalid @enderror" 
    id="email" 
    type="email" 
    placeholder="Email"
    name="email" 
    value="{{ old('email', $graduado->email) }}">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="fecha_grado">Fecha de grado</label>
    <input class="form-control border-0 bg-light shadow-sm @error('fecha_grado') is-invalid @enderror" 
    id="fecha_grado" 
    type="date" 
    placeholder="Fecha de grado"
    name="fecha_grado" 
    value="{{ old('fecha_grado', $graduado->fecha_grado) }}">
    @error('fecha_grado')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="num_celular">Numero de célular</label>
    <input class="form-control border-0 bg-light shadow-sm @error('num_celular') is-invalid @enderror" 
    id="num_celular" 
    type="number" 
    placeholder="Numero de célular"
    name="num_celular" 
    value="{{ old('num_celular', $graduado->num_celular) }}">
    @error('num_celular')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<select class="selectpicker countrypicker" data-flag="true" ></select>
 
  <script>
    $('.countrypicker').countrypicker();
  </script> 

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href=" {{ route('graduados.index') }} ">
    Cancelar
</a>