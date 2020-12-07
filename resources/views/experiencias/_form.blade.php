@csrf
<div class="form-group">
    <label class="my-1 mr-2" for="graduado_id">Graduado</label>
    <select class="form-control border-0 bg-light shadow-sm @error('graduado_id') is-invalid @enderror" id="graduado_id"
        name="graduado_id">
        <option value="" selected>Seleccione un graduado</option>
        @forelse($graduados as $graduado)
        <option value="{{ $graduado->id }}">{{ $graduado->nombre }}</option>
        @empty
        <option value="">No hay graduados registrados</option>
        @endforelse
    </select>
    @error('graduado_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="url_video">Link del vídeo</label>
    <input class="form-control border-0 bg-light shadow-sm @error('url_video') is-invalid @enderror" id="url_video" type="url"
        placeholder="URL" name="url_video" value="{{ old('url_video', $experiencia->url_video) }}">
    @error('url_video')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control border-0 bg-light shadow-sm @error('descripcion') is-invalid @enderror"
        name="descripcion" placeholder="Descripcion" rows="4">{{ old('descripcion', $experiencia->descripcion) }}</textarea>
    @error('descripcion')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href=" {{ route('experiencias.index', $experiencia) }} ">
    Cancelar
</a>