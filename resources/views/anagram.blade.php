
@extends('layouts.app')

@section('content')
<h1>Anagram Tester</h1>

<div class="card card-body bg-light">
     <div class="container">
            <div class="row">


        {!! Form::open(['action' => 'BackendController@anagram', 'method'=>'POST']) !!}
          <label>Enter your words </label>
          <br>
            {{ Form::text('first') }}
            {{ Form::text('second') }}
            <br>
            <br>

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
