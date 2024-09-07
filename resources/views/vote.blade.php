@extends('layouts.app')


@section('title') Vote @endsection

@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="flex gap-12" style="align-items: center;gap:20px">
                <span style="width: 150px;height: 150px;">
                    <img src="{{ $influenceur->photo }}"
                    alt="{{ $influenceur->fullName }}"
                    width="150px"
                    height="150px"
                    style="border-radius: 50%"
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

            <div class="row">
                <div class="col-md-4">
                    <label for="18_24_audience_daily_report" class="form-label">
                        Taille de la communauté
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      id="18_24_audience_daily_report"
                      placeholder="Taille de la communauté"
                      name="18_24_audience_daily_report"
                      aria-describedby="Taille de la communauté"
                    />
                </div>
                <div class="col-md-4">
                    <label for="18_24_audience_daily_report" class="form-label">
                        Taux d'engagement
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      id="18_24_audience_daily_report"
                      placeholder="Taux d'engagement"
                      name="18_24_audience_daily_report"
                      aria-describedby="Taux d'engagement"
                    />
                </div>
                <div class="col-md-4">
                    <label for="18_24_audience_daily_report" class="form-label">
                        Pertinence du contenu
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      id="18_24_audience_daily_report"
                      placeholder="Pertinence du contenu"
                      name="18_24_audience_daily_report"
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

        </div>
    </div>
</div>
@endsection

@push('js')

    {{-- @vite('resources/js/charts-overview.js') --}}
    <script src="{{Vite::asset("resources/js/dashboard.js")}}"></script>

@endpush
