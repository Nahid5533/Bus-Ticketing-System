@extends('layouts.app')

@section('content')
    <h1>Booking Form</h1>
    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <label for="trip_date">Trip Date:</label>
        <input type="date" id="trip_date" name="trip_date" required>



        <button type="submit">Book Now</button>
    </form>
@endsection
