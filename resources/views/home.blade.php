
@extends("layouts.app")

<!-- <x-app-layout>
   <x-alert2 type="warning">
    <x-slot name="title">TITULO</x-slot>  
        hola mundo
   </x-alert2> 
</x-app-layout> -->

@push("css") 
<style>
    body{
        background-color: darkgoldenrod;
    }
</style>
@endpush




@section("title", "LARAVEL 11")

@section("content")
    <x-alert2 type="warning">
        <x-slot name="title">TITULO</x-slot>  
        hola mundo
   </x-alert2>  

@endsection
