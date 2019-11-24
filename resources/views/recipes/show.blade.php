@extends('layouts.app')
@section('title'){{$recipe->name}}@endsection
@section('content')
    {{$recipe->name}}
@endsection
