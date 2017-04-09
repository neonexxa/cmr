@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h4 class="title-model-cis">All Booking History</h4>
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
          <th>
            {!! Form::model($booking, ['route' => ['admin_booking.update', $booking->id], 'method' => 'PUT']) !!}
                {!! Form::select('status_id', $statuses, null, array('class' => 'form-control', 'required' => 'true', 'style' => 'width:50%;display:inline')) !!}
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            {!! Form::close() !!}
          </th>
          <th>
          {!! Form::model($booking, ['route' => ['user_booking.destroy', $booking->id], 'method' => 'DELETE', 'class' => 'delete-in-table']) !!}
            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
          {!! Form::close() !!}
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
</div>
@endsection
