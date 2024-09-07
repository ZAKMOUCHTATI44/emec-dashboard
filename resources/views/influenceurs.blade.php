@extends('layouts.app')


@section('title') Influenceurs @endsection

@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <h2 class="text-center my-5">
                {{$category->name}}
            </h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                @foreach ($influenceurs as $influenceur)
                        <div  class="bg-card rounded-md flex flex-col gap-2 justify-center items-center shadow-lg p-5 relative">
                            <span  style="width: 150px;height: 150px;margin: 0px auto;">
                                <img src="{{ $influenceur->photo }}"
                                alt="{{ $influenceur->fullName }}"
                                width="150"
                                height="150"
                                style="border-radius: 50%;width: 150px;height: 150px;"
                                >
                            </span>
                            <div class="card-body flex justify-between my-3" style="justify-content: space-between;width: 100%;">
                                    <h5 class="font-semibold text-center text-black">{{ $influenceur->fullName }}</h5>
                                    <a href={{$influenceur->instagram_link}} target="_blank">
                                        <img src="/instagram.png" alt="instagram"  width="25" height="25">
                                    </a>
                            </div>
                            @if ($influenceur->getRate($influenceur->id))
                                <span class="bg-green-500 px-12 py-2 rounded-lg text-white absolute top-0 right-0   " style="background-color: #10B981">
                                    Déjà voté
                                </span>
                            @endif

                            <a href="/vote/{{$influenceur->id}}" class="bg-[#a830d0] text-white px-12 py-2 w-full text-center">
                                Donner une note
                            </a>
                    </div>
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
