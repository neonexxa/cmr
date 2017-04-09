@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Booking : # {{$booking->id}}</div>

                <div class="panel-body">
                    {!! Form::model($booking, ['route' => ['user_booking.update', $booking->id], 'method' => 'PUT']) !!}
                        @include('form.bookingedit',['button_data' => 'Save Booking'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
