<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'role', 'initials', 'message', 'stars',
        'color', 'star_color', 'is_active', 'sort_order',
    ];

    protected $casts = [
        'stars' => 'integer',
        'is_active' => 'boolean',
    ];
}
