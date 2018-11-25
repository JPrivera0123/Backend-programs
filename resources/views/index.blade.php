
@extends('layouts.app')

@section('content')

<h1>Fibonacci Series</h1>
<div class="card card-body bg-light">
    <div class="container">
        <div class="row">


    {!! Form::open(['action' => 'BackendController@fibonacci', 'method'=>'POST']) !!}
      <label>Enter a number  </label>
      <br>
        {{ Form::text('text', null, ['class' => ($errors->has('text')) ? 'form-control is-invalid' : 'form-control"']) }}

        {{ Form::submit('Submit', ['class' => 'btn btn-primary' ]) }}


    {!! Form::close() !!}




        </div>
      </div>


      @if(isset($output))

      <p>result: </p> <?php echo implode($output) ?>

      @endif
    </div>


@endsection
