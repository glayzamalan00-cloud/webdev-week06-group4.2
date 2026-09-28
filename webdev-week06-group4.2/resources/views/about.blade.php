@extends('layouts.app')

@section('content')
    <h2>About CCC Portal</h2>
    <p>CCC Portal is a web-based integrated student information and campus services portal developed for Calauan Community College.</p>

    <h3>Our Purpose</h3>
    <ul>
        <li>Integrate enrollment, grades, and records into one accessible platform.</li>
        <li>Provide campus services such as a helpdesk for inquiries, concerns, and requests.</li>
        <li>Improve administrative processes and communication between students, faculty, and staff.</li>
    </ul>

    <h3>Who We Are</h3>
    <p>We are 3rd year BSIT students of PUP – Calauan Campus, building this project as part of our research and coursework.</p>

    <h3>Meet the Team</h3>
    <ul>
        @foreach($members as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>
@endsection