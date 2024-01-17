<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>
    <ul>
        @foreach($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>

{{-- Parei no vídeo Estilizando as views: https://cursos.alura.com.br/course/laravel-criando-aplicacao-mvc/task/103804 --}}