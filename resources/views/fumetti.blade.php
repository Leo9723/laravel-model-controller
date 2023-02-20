@extends('layouts.app')

@section('content')

<div class="main-cont">
   @foreach ($comics as $key => $comic)
   <a href="{{ route('detail-fumetti', ['id' => $comic['id']]) }}">
      <div class="card">
         <div class="thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
         </div>
         <div class="title">
            {{ $comic['title'] }}
         </div>
      </div>
   </a>
   @endforeach
</div>
@endsection('content')


