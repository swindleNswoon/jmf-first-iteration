@extends('layouts.app')
@section('content')

    <div class="container">
        <h5><span>Donate</span></h5>
    </div>

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
        {{Form::submit('Select Payment Method', ['class'=> 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div>
@endsection
