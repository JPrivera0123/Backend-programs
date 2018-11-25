
@extends('layouts.app')

@section('content')
<h1>Number Sorting</h1>

<div class="card card-body bg-light">
     <div class="container">
            <div class="row">


        {!! Form::open(['action' => 'BackendController@numsort', 'method'=>'POST']) !!}
          <label>Enter your five numbers: </label>
          <br>
            {{ Form::text('first') }}
            {{ Form::text('second') }}
            {{ Form::text('third') }}
            {{ Form::text('fourth') }}
            {{ Form::text('fifth') }}<br><br>

            {{ Form::submit('Submit', ['class' => 'btn btn-primary' ]) }}


        {!! Form::close() !!}

            </div>
            <br>



          <div class="container">
          <div class="row">
                <div class="col-sm">
                  @if(isset($output))

                  <p> Ascending: </p> <?php echo implode($output); ?>


                </div>

                  <div class="col-sm">


                  <p> Descending: </p>
                    <?php
                      rsort($output);
                      echo implode($output);
                      ?>


                 </div>

                  @endif

          </div>
        </div>

</div>

</div>

@endsection
