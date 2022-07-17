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
                            <a href="#">
                            <div class="row is-large row-block">
                                Classrooms
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block">
                                Students
                            </div>
                            </a>    
                            <a href="#">
                            <div class="row is-large row-block">
                                Curriculums
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block">
                                Resources
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block">
                                Messages
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block">
                                Settings
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
