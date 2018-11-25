
@extends('layouts.app')

@section('content')
<h1>Palindrome Tester</h1>

<div class="card card-body bg-light">
     <div class="container">
            <div class="row">


        {!! Form::open(['action' => 'BackendController@palindrome', 'method'=>'POST']) !!}
          <label>Enter a word </label>
          <br>
            {{ Form::text('text') }}

            {{ Form::submit('Submit', ['class' => 'btn btn-primary' ]) }}


        {!! Form::close() !!}



            </div>
      </div>

          <!-- @if(isset($word))

          <h6>Palindrome:</h6> "{{$word}}"

          @else
          <h6>Not Palindrome</h6>
          @endif -->
  </div>

@endsection
