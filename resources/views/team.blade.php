@extends('layout.index')
@section('content')
<div class="cardTeam">
@foreach ($allEquipe as $item)
<div class="loop max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <div class="py-5 text-center">
        <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{$item->equipe}}</a>
        <span class="text-sm text-gray-700 dark:text-gray-200">{{$item->continent->continent}} <br> {{$item->pays}} <br>{{$item->ville}} <br> nombre de joueur : {{$item->nbrJoueur}}</span>
    </div>
    <div class="btnn">
        <button class="btn">
            <a href="/{{ $item->id}}/editTeam">Edit</a>
        </button><hr>
        <form action="/{{$item->id}}/deleteTeam" method="post">
            @csrf
            @method('DELETE')
            <button class="btndelete" type="submit">Delete</button>
        </form>
    </div>

</div>
@endforeach
</div>
@endsection
