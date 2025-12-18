@extends('layout.app')

@section('content')
  @component('components.navbar')
      
  @endcomponent
  @include('frontend.membership.hero')
  <div class="space-y-10">
    @include('frontend.membership.strategic')
    @component('components.footer')
    
    @endcomponent
  </div>
@endsection