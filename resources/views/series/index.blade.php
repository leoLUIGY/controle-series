<x-layout title="Séries">
    <a href="/series/criar"class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group ">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between">{{ $serie->nome  }}

                <div class=" d-inline-block">
                    <form action="/series/remover" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $serie->id }}">
                        <button type="submit" class="btn btn-primary" >Remover</button>
                    </form>
                </div>
            </li>
            
        @endforeach
    </ul>
</x-layout>