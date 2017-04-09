@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Status</div>

                <div class="panel-body">
                    {!! Form::model($status, ['route' => ['admin_status.update', $status->id], 'method' => 'PUT']) !!}
                        @include('form.status',['button_data' => 'Save Status'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
