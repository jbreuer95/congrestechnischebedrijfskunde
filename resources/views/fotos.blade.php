@extends('layouts.master')

@section('title')
    Foto's | Congres Technische Bedrijfskunde
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
                        <span class="title">Foto's</span><span class="decoration"></span><span
                                class="decoration"></span><span class="decoration"></span>
                    </h2>
                    <p>Na afloop van het congres zijn foto’s en andere media via op deze pagina.</p>
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