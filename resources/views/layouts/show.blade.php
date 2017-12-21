@extends('layouts.master')

@section('content')

@include('partials.tree')

<a style="padding-right: 6px; float: right" class="small" href="/tree/{{$tree->id}}">Permalink</a>

@endsection