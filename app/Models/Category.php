<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use HasFactory;

    public function influenceurs(): HasMany
    {
        return $this->hasMany(Influenceur::class);
    }



    public function getTotal($id)
    {
        $influenceIDs = Influenceur::where("category_id" , $id)->pluck('id');
        $votesCount = Vote::where("user_id" , Auth::user()->id)
        ->whereIn('influenceur_id', $influenceIDs)
        ->count();

        return $votesCount;
    }

}
