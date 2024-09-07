<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Influenceur extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function votes():HasMany
    {
        return $this->hasMany(Vote::class);
    }


    public function getRate($id) {

        $vote = Vote::where('user_id', Auth::user()->id)
        ->where('influenceur_id', $id)
        ->selectRaw('
            (CAST(community_size AS DECIMAL(5,2)) +
            CAST(engagement_rate AS DECIMAL(5,2)) +
            CAST(content_relevance AS DECIMAL(5,2))) as total_vote
        ')
        ->first();

        if($vote) {
            return $vote->total_vote ? true : false ;
        }

        return false;
    }
}
