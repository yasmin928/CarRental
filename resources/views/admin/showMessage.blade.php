@extends('admin.master')

@section('title', 'Show Message')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>View Message</h3>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <h2>Full Name: {{ $message->firstname }} {{ $message->lastname }}</h2>
                        <br>
                        <h2>Email: {{ $message->email }}</h2>
                        <br>
                        <h2>Message Content:</h2>
                        <p>{{ $message->message_content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
