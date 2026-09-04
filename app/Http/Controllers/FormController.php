<?php
namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use App\Models\HireInquiry;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:80|min:3',
            'email' => 'required|email|max:120',
            'phone' => 'nullable|string|max:15',
            'service' => 'required|string|max:100',
            'message' => 'required|string|min:10|max:2000',
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = $request->userAgent();

        ContactInquiry::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for your message! We will get back to you within 24 hours.',
        ]);
    }

    public function hireSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:80|min:3',
            'email' => 'required|email|max:120',
            'phone' => 'nullable|string|max:15',
            'service' => 'required|string|max:100',
            'budget' => 'nullable|string|max:100',
            'timeline' => 'nullable|string|max:100',
            'details' => 'required|string|min:10|max:2000',
        ]);

        HireInquiry::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'service_type' => $validated['service'],
            'budget' => $validated['budget'] ?? null,
            'timeline' => $validated['timeline'] ?? null,
            'message' => $validated['details'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Our team will contact you within 24 hours.',
        ]);
    }

    public function newsletterSubscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:120',
        ]);

        NewsletterSubscriber::updateOrCreate(
            ['email' => $validated['email']],
            ['ip_address' => $request->ip()]
        );

        return response()->json([
            'success' => true,
            'message' => 'You have been subscribed to our newsletter!',
        ]);
    }
}
