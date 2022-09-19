@extends('layout.index')
@section('content')
<div class="div-joueur">
    <br>
    <form action="{{route('updatePlayer',$editJoueur->id)}}" method="post" enctype="multipart/form-data">
        @csrf
    @method('PUT')
    
    <section class="createForm max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Créez votre joueur</h2>
    
        <form>
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Nom</label>
                    <input id="username" type="text" name="nom" value="{{$editJoueur->nom}}" placeholder="nom" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Prenom</label>
                    <input id="emailAddress" name="prenom" type="text" placeholder="prenom" value="{{$editJoueur->prenom}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">telephone</label>
                    <input type="text" name="telephone" value="{{$editJoueur->telephone}}" placeholder="telephone" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">email</label>
                    <input id="passwordConfirmation" type="email"name="email" value="{{$editJoueur->email}}" placeholder="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Genre</label>
                    <select name="genre_id" id="" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        @foreach ($editGenre as $item)
                        <option value="{{$item->id}}">{{$item->genre}}</option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Pays d'origine</label>
                    <input id="username" type="text" name="pays" value="{{$editJoueur->pays}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Rôle</label>
                    <select name="role_id" id="" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        @foreach ($editRole as $item)
                        <option value="{{$item->id}}">{{$item->role}}</option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Equipe</label>
                    <select name="equipe_id" id="" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        @foreach ($editEquipe as $item)
                        <option value="{{$item->id}}">{{$item->equipe}}</option>
                        @endforeach
                    </select>
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">photo</label>
                    <input id="username" type="file" name="url" value="{{$editJoueur->url}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
            </div>
    
            <div class="flex justify-end mt-6">
                <input type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" value="update">
            </div>
        </form>
    </section>
    </form>
</div>
@endsection