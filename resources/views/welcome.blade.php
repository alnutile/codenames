@extends('layouts.app')

@section('title', 'Welcome')


@section('content')
<livewire:show-codename :random="$random" />
@endsection