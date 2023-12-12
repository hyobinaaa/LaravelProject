@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img src="/storage/{{$user -> artist -> image}}" class="rounded-circle w-100">
      </div>
      <div class="col-9 pt-5">
            <div>
                <div class="d-flex justify-content-between">
                    <div class="h4">글쓴이: {{$user -> username}}</div>
                    <a href="/a/create">글 올리기</a>
                </div>

                <a href="/artist/{{$user->id}}/edit">글쓴이 프로필</a>

            </div>


            <div class="d-flex">
                <div class="pr-5"><strong>{{$user -> arts->count()}}사진</strong></div>
               
            </div>

            <div>
                <div class="pt-4 font-weight-bold">{{ $user->artist->title }}</div>
                <div>{{ $user->artist->description }}</div>
                <div><a href="#">{{ $user->artist->url ?? '홈페이지 없음'}}</a></div>
            </div>
            <div class="row pt-5">
            @foreach($user->arts as $art)
                <div class="col-5 pb-4">
                    <a href="/a/{{$art->id}}">
                        <img src="/storage/{{ $art->image }}" class="w-100">
                    </a>
                </div>
            @endforeach

            </div>
      </div>
    </div>
</div>
@endsection
