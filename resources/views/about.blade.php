@extends('layouts.main')

@section('container')


    <h1>INI HALAMAN ABOUT RAPID</h1>
    <br>
    <h3>{{ $name }}</h3>
    <h3>{{ $email }}</h3>
    <p>Hallo, saya Hafizd Muhammad IT Specialist dari PT. Rapid Infrastruktur Indonesia</p>
    <img src="{{ $image }}" alt="{{ $name }}" width="200">

@endsection


