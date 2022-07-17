@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="heading" style="margin: 20px; font-size: 24px">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row" style="display: flex; flex-direction: row; justify-content: center; padding: 40px; width: 100%">
                            <a href="{{ url('/api/classrooms') }}">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px; text-align: center"></i>
                                <br>
                                <strong>Classrooms</strong>
                            </div>
                            </a>
                            <a href="{{ url('/api/students') }}">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center; align-items: center">
                                <i class="fa fa-users fa-lg mt-lg-5" style="font-size: 96px"></i>
                                <br>
                                <strong>Students</strong>
                            </div>
                            </a>    
                            <a href="{{ url('/api/curriculums') }}">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-book fa-lg" style="font-size: 96px; text-align: center"></i>
                                <br>
                                <strong>Curriculums</strong>
                            </div>
                            </a>
                            <a href="{{ url('/api/schedules') }}">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-calendar fa-lg" style="font-size: 96px; text-align: center"></i>
                                <br>
                                <strong>Schedule</strong>
                            </div>
                            </a>
                            <a href="{{ url('/api/resources') }}">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-info-circle fa-lg" style="font-size: 96px; text-align: center"></i>
                                <br>
                                <strong>Resources</strong>
                            </div>
                            </a>
                            <a href="{{ url('/api/messages') }}">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-envelope fa-lg" style="font-size: 96px; text-align: center"></i>
                                <br>
                                <strong>Messages</strong>
                            </div>
                            </a>
                            <a href="{{ url('/api/settings') }}">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-cogs fa-lg" style="font-size: 96px; text-align: center"></i>
                                <br>
                                <strong>Settings</strong>
                            </div>
                            </a>
                    </div>

                </div>
            </div>
            <br />
            <h1 style="margin-top: 80px; text-align: center"><em>"Nothing can defeat the Human Will..."</em> <strong>- Benjamin Disraeli</strong></h1>
        </div>
    </div>
</div>
@endsection
