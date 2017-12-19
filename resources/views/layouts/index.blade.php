@extends('layouts.master')

@section('content')

@foreach($trees as $tree)

    @include('partials.tree')

@endforeach

@endsection