@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Venue</div>

                <div class="panel-body">
                    {!! Form::model($venue, ['route' => ['admin_venue.update', $venue->id], 'method' => 'PUT']) !!}
                        @include('form.venue',['button_data' => 'Save Venue'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
