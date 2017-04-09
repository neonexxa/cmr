@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <h4 class="title-model-cis">Status <a class="btn btn-primary" href="{{ route('admin_status.create') }}" role="button"><i class="fa fa-plus" aria-hidden="true"></i></a></h4>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Label</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($statuses as $status)
                    <tr>
                        <th scope="row">{{$status->id}}</th>
                        <td>{{$status->label}}</td>
                        <td>
                          <a class="btn btn-primary" href="{{ route('admin_status.edit', ['id' => $status->id]) }}" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          {!! Form::model($status, ['route' => ['admin_status.destroy', $status->id], 'method' => 'DELETE', 'class' => 'delete-in-table']) !!}
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </td>
                        

                        

                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <div class="col-md-4 col-md-offset-2 col-sm-10 col-sm-offset-2">
            <h4 class="title-model-cis">Session <a class="btn btn-primary" href="{{ route('admin_session.create') }}" role="button"><i class="fa fa-plus" aria-hidden="true"></i></a></h4>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Session</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sessions as $session)
                    <tr>
                        <th scope="row">{{$session->id}}</th>
                        <td>{{$session->when}}</td>
                        <td>
                          <a class="btn btn-primary" href="{{ route('admin_session.edit', ['id' => $session->id]) }}" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          {!! Form::model($session, ['route' => ['admin_session.destroy', $session->id], 'method' => 'DELETE', 'class' => 'delete-in-table']) !!}
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <!-- add line -->
    <hr>
    <div class="row">
      <h4 class="title-model-cis">Venue <a class="btn btn-primary" href="{{ route('admin_venue.create') }}" role="button"><i class="fa fa-plus" aria-hidden="true"></i></a></h4>
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
                <a class="btn btn-primary btn-block" href="{{ route('admin_venue.edit', ['id' => $venue->id]) }}" role="button">EDIT <i class="fa fa-pencil" aria-hidden="true"></i></a>
                <br>
                {!! Form::model($venue, ['route' => ['admin_venue.destroy', $venue->id], 'method' => 'DELETE']) !!}
                  <button class="btn btn-danger btn-block" type="submit">DELETE <i class="fa fa-trash" aria-hidden="true"></i></button>
                {!! Form::close() !!}
              </div>
          </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
