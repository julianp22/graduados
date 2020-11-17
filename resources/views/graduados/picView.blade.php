@extends('layout')

@section('title', 'Cambiar foto')

@section('content')

<div class="container py-4">
    <div class="text-center">
        <h3 class="display-6">Foto actual</h2>
            <img src="{{asset('storage/' . $graduado->foto)}}" class="rounded img-thumbnail" alt="Responsive image"
                height="200px" width="200px">
    </div>

    <div class="row py-4">
        <div class="col-lg-6 mx-auto">
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" type="file" onchange="readURL(this);"
                    class="form-control border-0 @error('foto') is-invalid @enderror" accept="image/*">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Elige una foto</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i
                            class="fa fa-cloud-upload mr-2 text-muted"></i><small
                            class="text-uppercase font-weight-bold text-muted">Buscar</small></label>
                </div>
                @error('foto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <p class="font-italic text-center">Debajo aparecerá la nueva foto</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt=""
                    class="img-fluid rounded shadow-sm mx-auto d-block" height="200px" width="200px"></div>
        </div>
    </div>
    <div class="row py-4">
        <a class="btn btn-primary btn-block rounded-pill" href="#"
            onclick="document.getElementById('actualizar-foto').submit()">Actualizar foto
        </a>
        <a class="btn btn-link btn-block" href=" {{ route('graduados.show', $graduado) }} ">
            Cancelar
        </a>
    </div>
    <form id="actualizar-foto" method="POST" class="d-none" action="{{ route('updatePic', $graduado->id) }}">
        @csrf
        <button>Actualizar</button>
    </form>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });

    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );

    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
    var input = event.srcElement;
    var fileName = input.files[0].name;
    infoArea.textContent = 'File name: ' + fileName;
    }
</script>

@endsection