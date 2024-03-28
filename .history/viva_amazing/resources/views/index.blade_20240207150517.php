@extends('layouts.app')

@section('title')
    Viva Amazing
@endsection

@section('sidebar')
    @component('components.Sidebar')
    @endcomponent

@endsection

@section('content')
    @component('components.MainContent')
    @endcomponent
@endsection