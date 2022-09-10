@extends('layouts.master')

@section('title')
    {{__('messages.main page')}}

@endsection

@section('css')
@endsection

@section('page_name')
    {{__('messages.dashboard')}}

@endsection

@section('second_directory')
    {{__('messages.main page')}}
@endsection

@section('first_directory')
    {{__('messages.dashboard')}}

@endsection

@section('content')
    <div class="container">
{{__('messages.hello dashboard')}}
<br>
<form action="{{route('test')}}" method="post">
    @csrf
    <input name="test" type="text">

    <button type="submit" class="btn-danger">test</button>
    @if($errors->has('test'))
        <div class="alert alert-danger">{{ $errors->first('test') }}</div>
    @endif
</form>
    </div>
@endsection

@section('script')
@endsection


