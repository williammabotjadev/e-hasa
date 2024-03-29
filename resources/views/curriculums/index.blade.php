@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="heading" style="margin: 20px; font-size: 24px">{{ __('Curriculums') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (count($curriculums) > 0) 
                        <h1>Your Curricula</h1>
                    @else
                    <div style="display: flex; justify-content: center; align-items: center; width: 100%">
                        <a href="{{ url('/api/curriculums/create') }}" class="button is-large" style="background: #808000; color: white">Create a Curriculum</h1>
                    </div>
                    @endif
                </div>

@endsection
