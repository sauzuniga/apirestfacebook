@extends('layouts.app')

@section('template_title')
    {{ $personaje->name ?? "{{ __('Show') Personaje" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personajes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $personaje->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ataques:</strong>
                            {{ $personaje->ataques }}
                        </div>
                        <div class="form-group">
                            <strong>Hp:</strong>
                            {{ $personaje->hp }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $personaje->edad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
