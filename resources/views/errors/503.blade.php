@extends('layouts.app')

@section('content')
    <h4>Dear {{Auth()->user()->name}}, you must be an administrator to do this<h4>
@endsection
