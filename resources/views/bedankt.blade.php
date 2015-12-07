@extends('layouts.master')

@section('title')
    Bedankt | Congres Technische Bedrijfskunde
    @endsection

    @section('content')
            <!-- Showcase
    ================ -->
    <div class="container">
        <div class="row">
            <!-- Welcome message
                ================= -->
            <div class="col-md-8">
                <div class="block-header">
                    <h2>
                        <span class="title">Inschrijving gelukt</span><span class="decoration"></span><span
                                class="decoration"></span><span class="decoration"></span>
                    </h2>
                    <p>Bedankt voor uw inschrijving, wij kijken er naar uit u 20 januari te verwelkomen.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-header">
                    <h2>
                        <span class="title">Sessies</span><span class="decoration"></span><span
                                class="decoration"></span><span class="decoration"></span>
                    </h2>
                </div>
                <div class="tab-content">
                    @include('partials.sessies')
                </div>
            </div>
        </div>
    </div>
@endsection