@extends('layout.app')

@section('content')
  @component('components.navbar')
  @endcomponent
  @include('frontend.homesection.hero')
  {{-- @include('frontend.homesection.member') --}}
  {{-- @include('frontend.homesection.growth') --}}

  @component('components.footer')
  
  @endcomponent
@endsection