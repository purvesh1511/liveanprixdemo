<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use App\Models\HireInquiry;

class InquiryController extends Controller
{
    public function index()
    {
        $contactInquiries = ContactInquiry::latest()->get();
        $hireInquiries = HireInquiry::latest()->get();
        return view('admin.inquiries.index', compact('contactInquiries', 'hireInquiries'));
    }

    public function show($id)
    {
        $inquiry = ContactInquiry::find($id) ?? HireInquiry::find($id);
        if (!$inquiry) abort(404);

        if ($inquiry instanceof ContactInquiry || $inquiry instanceof HireInquiry) {
            if (!$inquiry->is_read) {
                $inquiry->update(['is_read' => true]);
            }
        }

        return view('admin.inquiries.show', ['inquiry' => $inquiry]);
    }

    public function markRead($id)
    {
        $inquiry = ContactInquiry::find($id) ?? HireInquiry::find($id);
        if ($inquiry) {
            $inquiry->update(['is_read' => true]);
        }
        return back()->with('success', 'Marked as read.');
    }

    public function destroy($id)
    {
        $inquiry = ContactInquiry::find($id);
        if ($inquiry) {
            $inquiry->delete();
        } else {
            $hire = HireInquiry::find($id);
            if ($hire) $hire->delete();
        }
        return back()->with('success', 'Inquiry deleted.');
    }
}
