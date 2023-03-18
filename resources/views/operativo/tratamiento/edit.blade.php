@extends('layouts.theme')

@section('content')
    @livewire('operative.treatment-edit', ['treatment' => $treatment])
@endsection
