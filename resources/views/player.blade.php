@extends('layout.index')
@section('content')
<div class="cardd">
@foreach ($allJoueur as $item)
<div class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 mb-6">
    <img class="object-cover w-full h-56" src="{{asset('storage/img/'. $item->photo->url)}}" alt="avatar">
    <div class="py-5 text-center">
        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{$item->nom}} {{$item->prenom}}</a>
        <span class="text-sm text-gray-700 dark:text-gray-200">{{$item->telephone}} {{$item->email}} <br>{{$item->genre->genre}} {{$item->pays}} <br>{{$item->role->role}} {{$item->equipe->equipe}} {{$item->photo->photo}}</span>
    </div>
    <div class="btnnn">
        <button class="btn">
            <a href="/{{ $item->id}}/editPlayer">Edit</a>
        </button>
        <form action="/{{$item->id}}/deletePlayer" method="post">
            @csrf
            @method('DELETE')
            <button class="btndelete" type="submit">Delete</button>
        </form>
    </div>
</div>
@endforeach
</div>
@endsection