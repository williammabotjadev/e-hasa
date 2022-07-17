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
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px; text-align: center"></i>
                                <span>Classrooms</span>
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px"></i>
                                <span>Students</span>
                            </div>
                            </a>    
                            <a href="#">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px; text-align: center"></i>
                                <span>Curriculums</span>
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px; text-align: center"></i>
                                <span>Schedule</span>
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px; text-align: center"></i>
                                <span>Resources</span>
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px; text-align: center"></i>
                                <span>Messages</span>
                            </div>
                            </a>
                            <a href="#">
                            <div class="row is-large row-block py-5" style="display: flex; flex-direction: column; text-align: center">
                                <i class="fa fa-laptop fa-lg" style="font-size: 96px; text-align: center"></i>
                                <span>Settings</span>
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
