<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function userRating($preference) {
        // Assuming $preference is a string, e.g. 'high' or 'low'
    
        // Calculate the average rating for the product
        $avg_rating = $this->rating_sum / $this->rating_count;
    
        // Return the rating based on the user's preference
        if ($preference == 'high') {
            return round($avg_rating);
        } else if ($preference == 'low') {
            return floor($avg_rating);
        } else {
            return $avg_rating;
        }
    }
}
