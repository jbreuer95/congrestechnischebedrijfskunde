@extends('layouts.master')

@section('title')
    Contact | Congres Technische Bedrijfskunde
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
                        <span class="title">Contact</span><span class="decoration"></span><span
                                class="decoration"></span><span class="decoration"></span>
                    </h2>
                    <p>Mochten er vragen zijn over de inhoud of rondom de inschrijving, neem contact met ons op via:</p>
                    <p><a href="mailto:info@congrestechnischebedrijfskunde.nl">info@congrestechnischebedrijfskunde.nl</a></p>
                </div>
            </div>
            @include('partials.sessies')
        </div>
    </div>
@endsection