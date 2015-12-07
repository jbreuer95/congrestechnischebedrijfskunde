@extends('layouts.master')

@section('title')
    Break out sessies | Congres Technische Bedrijfskunde
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
                        <span class="title">Break out sessies</span><span class="decoration"></span><span
                                class="decoration"></span><span class="decoration"></span>
                    </h2>

                    <p>Bij de <a href="/inschrijven">inschrijving</a> kan iedere deelnemer een keuze maken voor een break out&nbsp;sessie die hij
                        of zij volgt in de eerste ronde en een andere break out sessie voor in de tweede ronde.
                        Inschrijven voor de break out sessies kan tot 13-01-2016.</p>

                    <p>De keuze bestaat per ronde&nbsp;uit de volgende break out&nbsp;sessies;</p>
                        @include('partials.sessies')
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-header">
                    <h2>
                        <span class="title">Tijd en locatie</span><span class="decoration"></span><span
                                class="decoration"></span><span class="decoration"></span>
                    </h2>
                </div>
                <div class="tab-content">
                    <p>20-01-2016</p>
                    <p>Aanvang: 10:00</p>
                    <p>Koningsbergerstraat 9, te Utrecht</p>
                </div>
            </div>
        </div>
    </div>
@endsection