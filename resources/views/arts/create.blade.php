@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/a" enctype="multipart/form-data" method="post">
        @csrf
    <div class="row">
    <div class="col-8 offset-2">
        <div class="row">
            <h1>사진 추가</h1>
        </div>
        <div class="row mb-3">
            <label for="title" class="col-md-4 col-form-label ">사진 제목</label>

           
                <input id="title" 
                type="text" 
                class="form-control @error('title') is-invalid @enderror" 
                name="title" 
                value="{{ old('title') }}" 
                required autocomplete="title" 
                autofocus>

                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
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
        <button class="btn btn-primary">사진 추가하기</button>
     
        

    </div>
</div>
    </div>
   </form>
</div>
@endsection