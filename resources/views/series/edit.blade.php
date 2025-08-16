<x-layout title="editar série">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome"/>
</x-layout>