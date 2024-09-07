@extends('layouts.app')


@section('title') Vote @endsection

@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="flex gap-12" style="align-items: center;gap:20px; justify-content: space-between;">
                <div class="flex" style="align-items: center;gap:20px">
                    <span  style="width: 150px;height: 150px;">
                        <img src="{{ $influenceur->photo }}"
                        alt="{{ $influenceur->fullName }}"
                        width="150"
                        height="150"
                        style="border-radius: 50%;width: 150px;height: 150px;"
                        >
                    </span>
                    <div>
                        <div class="flex" style="align-items: center;gap:20px">
                            <h2 class="text-center">
                                {{$influenceur->fullName}}
                            </h2>

                        </div>
                        <p>
                            Catégorie : {{$influenceur->category->name}}
                        </p>
                        <a href={{$influenceur->instagram_link}} target="_blank">
                            <img src="/instagram.png" alt="instagram"  width="25" height="25">
                        </a>
                    </div>
                </div>
                <div>
                    <div class=" flex text-5xl p-3 h-20 w-20 rounded-full  justify-center items-center text-white bg-[#a830d0]">
                        {{ number_format($vote->total_vote ?? 0 , 0, ',', ' ') ?? "0"}}

                    </div>
                    <p class="text-center">
                        Points
                    </p>
                </div>
            </div>

            <form action="{{route('vote.store',["id" => $influenceur->id ])}} " method="POST">
                @csrf
                <div class="row my-5">
                    <div class="col-md-4">
                        <label for="community_size" class="form-label">
                            Taille de la communauté
                        </label>
                        <input
                          type="text"
                          class="form-control"
                          id="community_size"
                          placeholder="Taille de la communauté"
                          name="community_size"
                          aria-describedby="Taille de la communauté"
                          value="{{$vote->community_size ??  null }}"
                        />
                    </div>
                    <div class="col-md-4">
                        <label for="engagement_rate" class="form-label">
                            Taux d'engagement
                        </label>
                        <input
                          type="text"
                          class="form-control"
                          id="engagement_rate"
                          placeholder="Taux d'engagement"
                          name="engagement_rate"
                          aria-describedby="Taux d'engagement"
                          value="{{$vote->engagement_rate ??  null}}"
                        />
                    </div>
                    <div class="col-md-4">
                        <label for="content_relevance" class="form-label">
                            Pertinence du contenu
                        </label>
                        <input
                          type="text"
                          class="form-control"
                          id="content_relevance"
                          placeholder="Pertinence du contenu"
                          name="content_relevance"
                          value="{{$vote->content_relevance ??  null}}"
                          aria-describedby="Pertinence du contenu"
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Notes</label>
                        <textarea
                        rows="5"
                        id="basic-default-message"
                        class="form-control"
                        placeholder="Notes"
                        name="notes"
                        ></textarea>
                    </div>
                    <button  type="submit" class="btn btn-success d-block mx-auto">
                        Voter
                    </button>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection

@push('js')

    {{-- @vite('resources/js/charts-overview.js') --}}
    <script src="{{asset("js/dashboard.js")}}"></script>
    <script src="{{asset('assets/js/cards-statistics.js')}}"></script>

<script src="{{asset("js/chart-campaign.js")}}"></script>

@endpush
