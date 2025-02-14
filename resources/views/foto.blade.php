@extends('welcome')
@section('title', 'Album Fotografico')

@section('content')
<div style="background-color: rgb(57, 57, 57);">
<div class="container" style="padding-top: 130px;">
    <h1 style="padding-bottom: 25px; color: aliceblue;">Galleria</h1>
    <div class="album-grid" style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: flex-start; text-align: center;">
        @foreach ($images as $photo)
            <div class="album-item">
                <a data-fancybox="gallery" href="{{ asset($photo->path) }}">
                    <img src="{{ asset($photo->path) }}" alt="Foto" style="width: 200px; height: 200px;" class="zoom">
                </a>
                    <div class="text-center">
                        <form action="{{ route('foto.modificaFoto', ['id' => $photo->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="custom-file-label" for="photo_{{ $photo->id }}">Modifica</label>
                            <input type="file" class="form-control custom-file-input" id="photo_{{ $photo->id }}" name="photo" accept="image/*" onchange="this.form.submit()">
                        </form>
                    </div>
            </div>
        @endforeach
        </div>
    </div>

     <div style="display: flex; justify-content: center; align-items: center; padding-top: 50px;">
        <a href="#modal" class="btn-dashboard" id="crea">Aggiungi foto</a>
    </div>

    <div class="text-center">
        <div class="text-center" style="margin-top: 20px;">
            <form action="{{ route('foto.add', ['id' => $album->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="album_id" value="{{ $album->id }}">

                <label class="custom-file-label">Aggiungi una Foto</label>
                <input type="file" class="form-control custom-file-input" name="photo" accept="image/*" onchange="this.form.submit()">
            </form>
        </div>
    </div>

    <button class="btn btn-dashboard"> ciao </button>
</div>
@endsection
