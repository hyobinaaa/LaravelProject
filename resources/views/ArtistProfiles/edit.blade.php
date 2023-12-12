@extends('layouts.app')

@section('content')
<div class="container">
    
    <form action="/artist/{{ $user -> id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
    <div class="row">
    <div class="col-8 offset-2">
        <div class="row">
            <h1>글쓴이 프로필 수정</h1>
        </div>
        <div class="row mb-3">
            <label for="title" class="col-md-4 col-form-label ">글쓴이 명</label>

           
                <input id="title" 
                type="text" 
                class="form-control @error('title') is-invalid @enderror" 
                name="title" 
                value="{{ old('title') ?? $user->artist->title }}" 
                required autocomplete="title" 
                autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            
        </div>

        <div class="row mb-3">
            <label for="description" class="col-md-4 col-form-label ">글쓴이 소개</label>

           
                <input id="description" 
                type="text" 
                class="form-control @error('title') is-invalid @enderror" 
                name="description" 
                value="{{ old('description') ?? $user->artist->description }}" 
                required autocomplete="description" 
                autofocus>

                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            
        </div>

        <div class="row mb-3">
            <label for="url" class="col-md-4 col-form-label ">글쓴이 소개 링크</label>

           
                <input id="url" 
                type="text" 
                class="form-control @error('title') is-invalid @enderror" 
                name="url" 
                value="{{ old('url') ?? $user->artist->url}}" 
                required autocomplete="url" 
                autofocus>

                @if ($errors->has('url'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('url') }}</strong>
                    </span>
                @endif
            
        </div>
    <div class="row">
        <label for="image" class="col-md-4 col-form-label ">사진첨부:</label>
        <input type="file" class="form-control-file" id="image" name="image">


        @if ($errors->has('image'))
            <strong>{{ $errors->first('image') }}</strong>
        @endif


    </div>

    
    <div class="row pt-4">
        <button class="btn btn-primary">저장</button>
     
        

    </div>
</div>
    </div>
   </form>
</div>
@endsection
