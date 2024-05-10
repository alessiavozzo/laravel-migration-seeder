@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Treni disponibili:</h1>
        <div class="row row-cols-1 gy-3">

            @forelse ($trains as $train)
                <div class="col">
                    <a class="text-dark text-decoration-none" href="{{ route('train', ['trainId' => $train->id]) }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="top-ticket p-2 rounded d-flex justify-content-between">
                                    <div class="train-id">{{ $train->id }}</div>
                                    <div class="company">{{ $train->company }}</div>
                                </div>
                                <div class="stations">
                                    <div class="departure_station"><strong>Partenza:
                                        </strong>{{ $train->departure_station }}
                                    </div>
                                    <div class="arrival_station"><strong>Arrivo: </strong>{{ $train->arrival_station }}
                                    </div>
                                </div>
                                <div class="times">
                                    <div class="departure_time">{{ date('d-m-Y', strtotime($train->departure_time)) }}</div>
                                    <div class="departure_time">{{ date('H:i', strtotime($train->departure_time)) }}</div>
                                </div>
                                <div class="wagons"><strong>Carrozze: </strong>{{ $train->wagons_number }}</div>
                                <div class="code text-end"><strong>Codice: </strong>{{ $train->train_code }}</div>

                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p>No trains</p>
            @endforelse
        </div>
    </div>
@endsection
