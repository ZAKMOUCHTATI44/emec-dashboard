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
                        <div style="display: flex;align-items: center;gap: 20px">
                            <a href={{$influenceur->instagram_link}} target="_blank">
                                <img src="/instagram.png" alt="instagram"  width="25" height="25">
                            </a>
                            <a href="/" class="btn btn-success mx-auto">
                                Télécharger la brochure
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div style=" height: 8rem;width: 8rem;border-radius: 50%;font-size:1.5rem" class=" flex text-2xl p-3 h-32 w-32 rounded-full  justify-center items-center text-white bg-[#a830d0]">
                        {{ number_format($vote->total_vote ?? 0 , 0, ',', ' ') ?? "0"}} / 30

                    </div>
                    <p class="text-center">
                        Points
                    </p>
                </div>
            </div>

         <p class="mt-5">
            Chers membres du jury, <br />
            Veuillez évaluer chaque candidat selon les critères suivants :<br />
            Taille de la communauté : 10/10<br />
            Taux d'engagement : 10/10<br />
            Pertinence du contenu : 10/10<br />
            Le total maximum est de 30/30. Chaque critère est essentiel pour juger l’impact et l’engagement de chaque candidat. Merci de votre attention et de votre impartialité dans l’évaluation !
         </p>
            <form action="{{route('vote.store',["id" => $influenceur->id ])}} " method="POST">
                @csrf
                <div class="row my-">
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
                        @error('community_size')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
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
                        @error('engagement_rate')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
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
                        @error('content_relevance')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
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
