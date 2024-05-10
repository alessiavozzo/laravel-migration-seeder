@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Treni disponibili:</h1>
        <div class="row row-cols-1 gy-3">


            <div class="col">

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
                        @if ($train->departure_platform != null || $train->arrival_platform != null)
                            <div class="platform">
                                <div class="departure-platform">
                                    <strong>Binario di partenza:</strong>
                                    {{ $train->departure_platform }}
                                </div>
                                <div class="arrival-platform">
                                    <strong>Binario di arrivo</strong>
                                    {{ $train->arrival_platform }}
                                </div>
                            </div>
                        @endif
                        @if ($train->type != null)
                            <div class="type">
                                <strong>Tipo di treno: </strong>
                                {{ $train->type }}
                            </div>
                        @endif
                        <div class="wagons"><strong>Carrozze: </strong>{{ $train->wagons_number }}</div>
                        <div class="code text-end"><strong>Codice: </strong>{{ $train->train_code }}</div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
