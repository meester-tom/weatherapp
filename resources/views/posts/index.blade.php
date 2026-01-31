@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Weather Information</h2>
                </div>
                <div class="card-body">
                    @if($weather)
                        <div class="weather-info">
                            <h3>{{ $weather['city'] ?? 'Beverwijk' }}</h3>
                            <div class="weather-details">
                                <p><strong>Temperature:</strong> {{ $weather['temperature'] ?? 'N/A' }}°C</p>
                                <p><strong>Condition:</strong> {{ $weather['condition'] ?? 'N/A' }}</p>
                                <p><strong>Humidity:</strong> {{ $weather['humidity'] ?? 'N/A' }}%</p>
                                <p><strong>Wind Speed:</strong> {{ $weather['wind_speed'] ?? 'N/A' }} km/h</p>
                            </div>
                        </div>
                    @else
                        <p>No weather data available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
