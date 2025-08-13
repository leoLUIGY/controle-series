<x-layout title="Séries">
    <a href="/series/criar"class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group ">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between">{{ $serie->nome  }}

                <div class=" d-inline-block d-flex">
                    <form action="/series/update" method="GET">
                        @csrf
                        <input type="hidden" name="id" value="{{ $serie->id }}">
                        <button type="submit" class="btn btn-primary" >Editar</button>
                    </form>
                    <form action="/series/remover" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $serie->id }}">
                        <button type="submit" class="btn btn-primary" >Remover</button>
                    </form>
                </div>
            </li>
            
        @endforeach
    </ul>
</x-layout>