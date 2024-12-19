<x-layout meta-title="navidad">
    <x-slot:sidebar>
        NAVIDAD
    </x-slot:sidebar>
    <h1>REGALOS DE NAVIDAD</h1>
    @foreach ( $regalos as $regalo )
        <h2>-{{$regalo["nombre"]}}</h2>
        
    @endforeach

    <h1>VIAJES POR NAVIDAD</h1>
    </x-layout>
    