<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SavedListing extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'saved_listings';
    protected $fillable = ['user_id', 'listing_id', 'user_name'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function listing() {
        return $this->belongsTo(Listing::class);
    }
}
