<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'role', 'role_color', 'bio', 'image', 'experience',
        'skills', 'social', 'is_active', 'sort_order',
    ];

    protected $casts = [
        'skills' => 'array',
        'social' => 'array',
        'is_active' => 'boolean',
    ];
}
