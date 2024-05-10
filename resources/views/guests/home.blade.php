@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @forelse ($today_trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                {{ $train->id }}
                                <div class="company">{{ $train->company }}</div>
                                <div class="departure_station">{{ $train->departure_station }}</div>
                                <div class="arrival_station">{{ $train->arrival_station }}</div>
                                <div class="departure_time">{{ $train->departure_time }}</div>
                                <div class="arrival_time">{{ $train->arrival_time }}</div>
                                <div class="code">{{ $train->train_code }}</div>
                                <div class="wagons">{{ $train->wagons_number }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No trains</p>
            @endforelse
        </div>
    </div>
@endsection
