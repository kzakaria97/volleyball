@extends('layout.index')
@section('content')
<div class="div-team">
    <br>
    <form action="/storeTeam" method="post">

    @csrf
    <section class="createForm max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Créez votre équipe</h2>
    
        <form>
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Nom de l'équipe</label>
                    <input id="username" type="text" name="equipe" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
                
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="password">Nombre de joueur dans l'équipe</label>
                    <input type="number" name="nbrJoueur" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Ville</label>
                    <input id="emailAddress" name="ville" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
    
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="passwordConfirmation">Pays</label>
                    <input id="passwordConfirmation" type="text"name="pays" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                </div>
    
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Continent</label>
                    <select name="continent_id" id="" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        @foreach ($allContinent as $item)
                        <option value="{{ $item->id }}">{{ $item->continent }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
    
            <div class="flex justify-end mt-6">
                <input type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" value="créer">
            </div>
        </form>
    </section>
</form>
</div>
@endsection