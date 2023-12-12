@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">    
    <div class="col-8">
    <img src="/storage/{{ $art->image }}" class="w-50">
</div>
<div class="col-4">
 <p>글쓴이: {{$art->user->name}}</p>
 <p>사진명: {{$art->title}}</p>
</div>
</div>   
</div> 
@endsection