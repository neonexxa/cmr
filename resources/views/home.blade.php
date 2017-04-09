@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h4 class="title-model-cis">Venue</h4>
    </div>
    <div class="row">
      @foreach ($venues as $venue)
        <div class="col-md-3 col-sm-12" style="padding: 5px">
          <div class="card-kofix">
              <div class="card-kofix-head">
                {{$venue->name}}
              </div>
              <hr>
              <div class="card-kofix-body">
                <strong>Location:</strong> {{$venue->location}}
                <br>
                <strong>Status:</strong> {{$venue->status->label}}
              </div>
              <hr>
              <div class="card-kofix-action">
                <a class="btn {{ $venue->status->label == 'Open' ? 'btn-success' : 'btn-danger' }} btn-block" href="" role="button">{{ $venue->status->label == 'Open' ? 'Available' : 'Lock' }}</a>
                <br>
              </div>
          </div>
        </div>
      @endforeach
    </div>
    <hr>
    <div class="row">
        <a class="btn btn-info btn-block" href="{{ route('user_booking.create') }}" role="button">Submit New Booking <i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
    </div>
</div>
@endsection
