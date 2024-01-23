<x-layout title="Séries">
    <a class="btn btn-dark my-3" href="/series/criar">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
</x-layout>

{{-- Parei no vídeo Estilizando as views: https://cursos.alura.com.br/course/laravel-criando-aplicacao-mvc/task/103807 --}}