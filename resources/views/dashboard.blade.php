@extends('layoutnya')
@section('judul','Dashboard')
@section('content')
<section class="section">
    <div class="row">
    <h1>Hello </h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
      
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
      
                        You are Logged In
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

