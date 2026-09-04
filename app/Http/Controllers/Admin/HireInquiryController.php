<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HireInquiry;

class HireInquiryController extends Controller
{
    public function index()
    {
        $inquiries = HireInquiry::latest()->get();
        return view('admin.hire-inquiries.index', compact('inquiries'));
    }

    public function show($id)
    {
        $inquiry = HireInquiry::findOrFail($id);

        if (!$inquiry->is_read) {
            $inquiry->update(['is_read' => true]);
        }

        return view('admin.inquiries.show', ['inquiry' => $inquiry]);
    }

    public function markRead($id)
    {
        $inquiry = HireInquiry::findOrFail($id);
        $inquiry->update(['is_read' => true]);

        return back()->with('success', 'Marked as read.');
    }

    public function destroy($id)
    {
        HireInquiry::findOrFail($id)->delete();

        return redirect()->route('admin.hire-inquiries.index')->with('success', 'Hire inquiry deleted.');
    }
}
