@csrf
<div class="form-group">
    <label for="titulo">Título</label>
    <input class="form-control border-0 bg-light shadow-sm @error('titulo') is-invalid @enderror" id="titulo"
        type="text" placeholder="Título" name="titulo" value="{{ old('titulo', $noticia->titulo) }}"
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
    rows="4">{{ old('descripcion', $noticia->descripcion) }}</textarea>
    @error('descripcion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href=" {{ route('noticias.show', $noticia) }} ">
    Cancelar
</a>