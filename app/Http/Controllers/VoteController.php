<?php

namespace App\Http\Controllers;

use App\Models\Influenceur;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $influenceur = Influenceur::find($id);

        $vote = Vote::where('user_id', Auth::user()->id)
        ->where('influenceurs_id', $id)
        ->selectRaw('
            (CAST(community_size AS DECIMAL(5,2)) +
            CAST(engagement_rate AS DECIMAL(5,2)) +
            CAST(content_relevance AS DECIMAL(5,2))) as total_vote,
            community_size,
            engagement_rate,
            content_relevance
        ')
        ->first();




        return view("vote" , compact("influenceur" , "vote"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {
        $vote = new Vote();
        $vote->community_size = $request['community_size'];
        $vote->engagement_rate = $request['engagement_rate'];
        $vote->content_relevance = $request['content_relevance'];
        $vote->notes = $request['notes'] ?? null;
        $vote->user_id = Auth::user()->id;
        $vote->influenceurs_id = $id;
        $vote->save();

        return redirect()->back()->with('success', 'Métrique ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
