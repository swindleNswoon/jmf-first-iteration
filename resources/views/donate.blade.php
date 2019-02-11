@extends('layouts.app')
@section('content')
<h1>donate</h1>

<div class="container">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    @endif
</div>
<div class="container">
{!! Form::open(['url' => 'info/submit']) !!}
    <div class="form-group">
        {{Form::label('firstname', 'First Name')}}
        {{Form::text('firstname', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('lastname', 'Last Name')}}
        {{Form::text('lastname', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('address', 'Address')}}
        {{Form::text('address', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('state', 'State/Province')}}
        {{Form::text('state', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('country', 'Country')}}
        {{Form::text('country', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('zip', 'Zip/Postal Code')}}
        {{Form::text('zip', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail')}}
        {{Form::text('email', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone', '', ['class' => 'form-control'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div>
@endsection
