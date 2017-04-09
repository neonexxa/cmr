@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Session</div>

                <div class="panel-body">
                    {!! Form::model($session, ['route' => ['admin_session.update', $session->id], 'method' => 'PUT']) !!}
                        @include('form.session',['button_data' => 'Save Session'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
