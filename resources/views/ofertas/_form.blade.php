@csrf
<div class="form-group">
    <label for="cargo">Cargo</label>
    <input class="form-control border-0 bg-light shadow-sm @error('cargo') is-invalid @enderror" id="cargo"
        type="text" placeholder="Cargo" name="cargo" value="{{ old('cargo', $oferta->cargo) }}"
        onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}"
        onfocus="if (this.value == '') {this.value = '';}">
    @error('cargo')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="empresa">Empresa</label>
    <input class="form-control border-0 bg-light shadow-sm @error('empresa') is-invalid @enderror" id="empresa"
        type="text" placeholder="Empresa" name="empresa" value="{{ old('empresa', $oferta->empresa) }}"
        onkeydown="return /[a-z, ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}"
        onfocus="if (this.value == '') {this.value = '';}">
    @error('empresa')
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
    rows="4">{{ old('descripcion', $oferta->descripcion) }}</textarea>
    @error('descripcion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="salario">Salario</label>
    <input class="form-control border-0 bg-light shadow-sm @error('salario') is-invalid @enderror" id="salario"
        type="number" placeholder="Salario" name="salario"
        value="{{ old('salario', $oferta->salario) }}">
    @error('salario')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="url">Link de la oferta</label>
    <input class="form-control border-0 bg-light shadow-sm @error('url') is-invalid @enderror" id="url"
        type="url" placeholder="URL" name="url"
        value="{{ old('url', $oferta->url) }}">
    @error('url')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href=" {{ route('ofertas.index', $oferta) }} ">
    Cancelar
</a>