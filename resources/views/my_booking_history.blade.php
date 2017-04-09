@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h4 class="title-model-cis">My Booking History</h4>
    </div>
    <div class="row">
      	<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Date Booking</th>
		      <th>Venue</th>
		      <th>Start</th>
		      <th>Until</th>
		      <th>Status</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach ($bookings as $booking )
		    <tr>
		      <th scope="row">{{ $booking->id }}</th>
		      <th>{{ $booking->created_at }}</th>
		      <th>{{ $booking->venue->name }}</th>
		      <th>{{ $booking->start }}</th>
		      <th>{{ $booking->end }}</th>
		      <th>{{ $booking->status->label }}</th>
		      <th>
		      	@if($booking->status->label == 'Pending')
		      	<a class="btn btn-primary" href="{{ route('user_booking.edit', ['id' => $booking->id]) }}" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
		      	{!! Form::model($booking, ['route' => ['user_booking.destroy', $booking->id], 'method' => 'DELETE', 'class' => 'delete-in-table']) !!}
                  <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                {!! Form::close() !!}
		      	@else
		      	{!! Form::model($booking, ['route' => ['user_booking.destroy', $booking->id], 'method' => 'DELETE', 'class' => 'delete-in-table']) !!}
                  <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                {!! Form::close() !!}
		      	@endif
		      </th>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
    </div>
</div>
@endsection
