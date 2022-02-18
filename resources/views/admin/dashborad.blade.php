@extends('admin.layouts.master')
@section('title')
Dashborad
@stop

@section('css')
@livewireStyles
@endsection

@section('page')
@endsection

@section('page1')
@endsection

@section('page2')
@endsection

@section('content')
@isset($slot)
{{ $slot }}

@endisset



@endsection

@section('js')
@livewireScripts
@endsection
