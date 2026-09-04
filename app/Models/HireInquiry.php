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

    public const BUDGET_LABELS = [
        '0_5000'      => 'Less than $5,000',
        '5000_10000'  => '$5,000 - $10,000',
        '10000_25000' => '$10,000 - $25,000',
        '25000_plus'  => '$25,000+',
    ];

    public const TIMELINE_LABELS = [
        '15'      => 'ASAP (Within 2 weeks)',
        '30'      => 'Within 1 month',
        '90'      => '1-3 months',
        '90_plus' => '3+ months',
    ];

    public function getBudgetLabelAttribute(): string
    {
        return self::BUDGET_LABELS[$this->budget] ?? ($this->budget ?? '-');
    }

    public function getTimelineLabelAttribute(): string
    {
        return self::TIMELINE_LABELS[$this->timeline] ?? ($this->timeline ?? '-');
    }
}
