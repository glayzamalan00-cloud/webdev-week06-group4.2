@extends('layouts.app')

@section('content')
    <h2>Contact Us</h2>
    <p>Have a question or concern? Reach out to us using the details below.</p>

    <h3>Calauan Community College</h3>
    <p>Brgy. Sto. Tomas, Calauan, Laguna</p>

    <h3>Get in Touch</h3>
    <ul>
        @foreach($contacts as $label => $value)
            <li><strong>{{ $label }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>

    <x-alert>Note: Online messaging will be available in a future update.</x-alert>
@endsection