<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'service_type', 'budget', 'timeline',
        'message', 'company', 'is_read', 'ip_address', 'user_agent',
    ];

    protected $casts = ['is_read' => 'boolean'];
}
