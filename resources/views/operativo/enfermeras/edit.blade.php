@extends('layouts.theme')

@section('content')
    @livewire('operative.edit-nurse', ['nurse' => $nurse])
@endsection
