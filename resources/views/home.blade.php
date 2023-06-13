@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-start">
                            <div class="col">
                                <div class="card bg-dark text-white">
                                    <div class="card-body">
                                        <h3 class="card-title text-center">
                                            POST
                                        </h3>
                                        <h4 class="card-subtitle fw-bold text-warning text-center">
                                            {{ $posts->count() }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
