@extends('layouts.app')

@section('content')
    <h2 style="color: purple; text-align: center;">Welcome to CCC Portal</h2>
    <p style="color: #9c589c; text-align: center;">
        Welcome to CCC Portal, the student information and campus services portal of Calauan Community College.
        Access your records, submit requests, and stay connected with your campus in one place.
    </p>

    <x-alert type="success">
        <strong>Featured:</strong> One portal for records, requests, and campus updates.
    </x-alert>

    <h3 style="color: purple;">Our Features</h3>

    @if(count($features) > 0)
        <ul>
            @foreach($features as $feature)
                <li><strong>{{ $feature['title'] }}</strong>: {{ $feature['desc'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No features available yet.</p>
    @endif
@endsection