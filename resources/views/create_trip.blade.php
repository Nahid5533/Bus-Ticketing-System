<!-- resources/views/create_trip.blade.php -->

@extends('layouts.app') <!-- Assuming you have a main layout file -->

@section('content')
    <h1>Create a New Trip</h1>
    <form method="POST" action="{{ route('trips.store') }}">
        @csrf
        <label for="trip_date">Trip Date:</label>
        <input type="date" id="trip_date" name="trip_date" required>

        <label for="location_id">Location:</label>
        <select id="location_id" name="location_id" required>
            <!-- Loop through locations to populate dropdown options -->
            @foreach ($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <!-- Add other necessary fields for trip creation -->

        <button type="submit">Create Trip</button>
    </form>
@endsection
