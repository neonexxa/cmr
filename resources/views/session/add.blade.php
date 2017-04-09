@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Session</div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'admin_session.store']) !!}
                        @include('form.session',['button_data' => 'Add Session'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
