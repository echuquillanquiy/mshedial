@extends('layouts.theme')

@section('content')
    @livewire('operative.edit-medical', ['medical' => $medical])
@endsection
