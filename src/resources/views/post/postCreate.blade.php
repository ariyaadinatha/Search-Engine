@extends('template.section')

@section('content')
<div class="container">
    <form action="/post/store" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="title" class="col-form-label"> Title </label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                        name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="description" class="col-form-label"> Description </label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" 
                        name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="document" class="col-form-label"> Document </label>
                        <input id="document" type="file" class="form-control-file @error('document') is-invalid @enderror" 
                        name="document" required autocomplete="document" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group">
                    <label for="image" class="col-form-label"> Image </label>
                        <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" 
                        name="image" required autocomplete="image" autofocus>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
            </div>
        </div>


        <div>
            <div class="row pt-3">
                <div class="col-8 offset-2">
                    <button class="btn btn-primary"> Post </button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection