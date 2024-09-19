<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $table = 'listings';
    protected $primaryKey  = 'id';
    protected $fillable = [
        'user_id',
        'place_name',
        'place_description',
        'place_type',
        'place_region',
        'place_province_city',
        'place_municipality_town',
        'place_brgy_street',
        'place_email',
        'place_contact_num',
        'place_room_size',
        'place_monthly_rent',
        'archived'
    ];
    protected $dates  = ['created_at', 'updated_at'];


    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('place_name', 'like', '%' . request('search') . '%')
                ->orWhere('place_type', 'like', '%' . request('search') . '%')
                ->orWhere('place_description', 'like', '%' . request('search') . '%')
                ->orWhere('place_region', 'like', '%' . request('search') . '%')
                ->orWhere('place_province_city', 'like', '%' . request('search') . '%')
                ->orWhere('place_municipality_town', 'like', '%' . request('search') . '%')
                ->orWhere('place_brgy_street', 'like', '%' . request('search') . '%');
        }



        // if ($filters['rent_max'] ?? false && $filters['rent_max'] ?? false  ) {
        //     $minPrice = request()->input('min_rent'); // Or use a default value
        //     $maxPrice = request()->input('max_rent'); // Or use a default value

        //     $listings = Listing::whereBetween('place_monthly_rent', [$minPrice, $maxPrice])->get();
        // }

    }
}
