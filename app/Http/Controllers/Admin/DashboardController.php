<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use App\Models\HireInquiry;
use App\Models\NewsletterSubscriber;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\TeamMember;
use App\Models\BlogPost;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_inquiries' => ContactInquiry::count() + HireInquiry::count(),
            'unread_inquiries' => ContactInquiry::where('is_read', false)->count() + HireInquiry::where('is_read', false)->count(),
            'subscribers' => NewsletterSubscriber::where('is_active', true)->count(),
            'services' => Service::count(),
            'portfolios' => Portfolio::count(),
            'team_members' => TeamMember::count(),
            'blog_posts' => BlogPost::count(),
        ];

        $recentInquiries = ContactInquiry::latest()->take(5)->get();
        $recentHires = HireInquiry::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentInquiries', 'recentHires'));
    }
}
