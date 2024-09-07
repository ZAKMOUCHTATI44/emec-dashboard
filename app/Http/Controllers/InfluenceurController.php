<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Influenceur;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfluenceurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,$id)
    {
        $influenceurs = Influenceur::where("category_id" , $id)->get();
        $category = Category::find($id);

        return view('influenceurs', compact("influenceurs" , "category"));

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        dd("BONJOUR");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Influenceur $influenceur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Influenceur $influenceur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Influenceur $influenceur)
    {
        //
    }
}
