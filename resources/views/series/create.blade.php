<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        @csrf
        <div class="form- mt-3">
            <label for="nome">Nome: </label>
            <input  class="form-control" type="text" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-dark mt-3">Adicionar</button>
    </form>
</x-layout>