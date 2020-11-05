@csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input class="form-control border-0 bg-light shadow-sm @error('nombre') is-invalid @enderror" 
    id="nombre" 
    type="text" 
    placeholder="Nombre"
    name="nombre" 
    value="{{ old('nombre', $producto->nombre) }}">
    @error('nombre')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="marca">Marca</label>
    <input class="form-control border-0 bg-light shadow-sm @error('marca') is-invalid @enderror" 
    id="marca" 
    type="text" 
    placeholder="Marca"
    name="marca" 
    value="{{ old('marca', $producto->marca) }}">
    @error('marca')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label class="my-1 mr-2" for="prenda">Prenda</label>
    <select class="form-control border-0 bg-light shadow-sm @error('prenda') is-invalid @enderror" 
    id="prenda"
    name="prenda">
        <option value="" selected>Seleccione prenda</option>
        <option value="Camiseta" {{ old('prenda') == 'Camiseta' ? 'selected' : '' }}>Camiseta</option>
        <option value="Pantalon" {{ old('prenda') == 'Pantalon' ? 'selected' : '' }}>Pantalon</option>
        <option value="Zapatos" {{ old('prenda') == 'Zapatos' ? 'selected' : '' }}>Zapatos</option>
    </select>
    @error('prenda')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="talla">Talla</label>
    <input class="form-control border-0 bg-light shadow-sm @error('talla') is-invalid @enderror" 
    id="talla" 
    type="text" 
    placeholder="Talla"
    name="talla" 
    value="{{ old('talla', $producto->talla) }}">
    @error('talla')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="costo">Costo</label>
    <input class="form-control border-0 bg-light shadow-sm @error('costo') is-invalid @enderror" 
    id="costo" 
    type="number" 
    placeholder="Costo"
    name="costo" 
    value="{{ old('costo', $producto->costo) }}">
    @error('costo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control border-0 bg-light shadow-sm @error('descripcion') is-invalid @enderror"  
    name="descripcion" 
    placeholder="Descripcion"
    rows="3">{{ old('descripcion', $producto->descripcion) }}</textarea>
    @error('descripcion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="foto">Foto: </label>
    <input type="file" id="foto" accept="image/*" name="foto" value="{{ old('foto', $producto->foto) }}" class="@error('foto') is-invalid @enderror">
    @error('foto')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href=" {{ route('productos.index') }} ">
    Cancelar
</a>