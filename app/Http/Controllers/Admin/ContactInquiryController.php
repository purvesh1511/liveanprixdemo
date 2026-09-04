<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;

class ContactInquiryController extends Controller
{
    public function index()
    {
        $inquiries = ContactInquiry::latest()->get();
        return view('admin.contact-inquiries.index', compact('inquiries'));
    }

    public function show($id)
    {
        $inquiry = ContactInquiry::findOrFail($id);

        if (!$inquiry->is_read) {
            $inquiry->update(['is_read' => true]);
        }

        return view('admin.inquiries.show', ['inquiry' => $inquiry]);
    }

    public function markRead($id)
    {
        $inquiry = ContactInquiry::findOrFail($id);
        $inquiry->update(['is_read' => true]);

        return back()->with('success', 'Marked as read.');
    }

    public function destroy($id)
    {
        ContactInquiry::findOrFail($id)->delete();

        return redirect()->route('admin.contact-inquiries.index')->with('success', 'Contact inquiry deleted.');
    }
}
