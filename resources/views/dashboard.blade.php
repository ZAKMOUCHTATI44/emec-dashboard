@extends('layouts.app')


@section('title') Overview @endsection

@section('content')
<style>
    .bg-card{
  background-image: url("/bg-card.jpg?v=121");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}
</style>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                @foreach ($categories as $category)
                        <a href="/influenceur/{{$category->id }}" class="bg-card rounded-md flex flex-col gap-5 justify-center items-center shadow-2xl p-5">
                            <img src="{{ $category->photo }}"
                            alt="{{ $category->name }}"
                            width="55"
                            height="55"
                            class="card-img-top"
                            style="width: 55px;height: 55px;margin: 0px auto"
                            >
                            <div class="card-body">
                                <h5 class="font-semibold text-center text-white">{{ $category->name }}</h5>
                            </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

    {{-- @vite('resources/js/charts-overview.js') --}}
    <script src="{{asset("js/dashboard.js")}}"></script>


@endpush
