<x-layout title="editar série">
      <form action="/series/update" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ $serie->nome }}</label>
             <input type="hidden" name="id" value="{{ $serie->id }}">
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>