@extends('layouts.master')

@section('title')
    Inschrijven | Congres Technische Bedrijfskunde
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
                        <span class="title">Inschrijven</span><span class="decoration"></span><span
                                class="decoration"></span><span class="decoration"></span>
                    </h2>
                    {!! Form::open() !!}
                    <div class="form-group required @if($errors->has('commission')) has-error @endif">
                        {!! Form::label('sessie1','Eerste Sessie',['class' => 'control-label']) !!}
                        {!! Form::select('sessie1', $sessies1, null, ['class' => 'form-control', 'value' => Input::old('sessie1')]) !!}
                        @if ($errors->has('commission')) <p class="help-block">{{ $errors->first('commission') }}</p> @endif
                    </div>
                    <div class="form-group required @if($errors->has('dispuut')) has-error @endif">
                        {!! Form::label('sessie2','Tweede Sessie',['class' => 'control-label']) !!}
                        {!! Form::select('sessie2', $sessies2, null, ['class' => 'form-control', 'value' => Input::old('sessie2')]) !!}
                        @if ($errors->has('dispuut')) <p class="help-block">{{ $errors->first('dispuut') }}</p> @endif
                    </div>
                    <div class="form-group required @if($errors->has('name')) has-error @endif">
                        {!! Form::label('name','Naam',['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'value' => Input::old('name'),'placeholder' => 'Naam']) !!}
                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                    </div>
                    <div class="form-group required @if($errors->has('email')) has-error @endif">
                        {!! Form::label('email','Mail',['class' => 'control-label']) !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'value' => Input::old('email'),'placeholder' => 'Mail']) !!}
                        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                    </div>
                    <div class="form-group required @if($errors->has('hogeschool')) has-error @endif">
                        {!! Form::label('hogeschool','Hogeschool',['class' => 'control-label']) !!}
                        {!! Form::text('hogeschool', null, ['class' => 'form-control', 'value' => Input::old('hogeschool'),'placeholder' => 'Hogeschool']) !!}
                        @if ($errors->has('hogeschool')) <p class="help-block">{{ $errors->first('hogeschool') }}</p> @endif
                    </div>
                    <div class="form-group required @if($errors->has('vakgebied')) has-error @endif">
                        {!! Form::label('vakgebied','Vakgebied',['class' => 'control-label']) !!}
                        {!! Form::text('vakgebied', null, ['class' => 'form-control', 'value' => Input::old('vakgebied'),'placeholder' => 'Vakgebied']) !!}
                        @if ($errors->has('vakgebied')) <p class="help-block">{{ $errors->first('vakgebied') }}</p> @endif
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Schrijf je in', ['class' => 'btn btn-green']) !!}
                    </div>
                    {!! Form::close() !!}
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