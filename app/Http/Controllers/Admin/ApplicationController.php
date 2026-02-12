<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::latest()->paginate(10);
        return view('admin.applications.index', compact('applications'));
    }

    public function show(Application $application)
    {
        if (!$application->is_read) {
            $application->update(['is_read' => true]);
        }
        return view('admin.applications.show', compact('application'));
    }

    public function destroy(Application $application)
    {
        // Delete associated files
        if ($application->qualification_file) {
            Storage::disk('public')->delete($application->qualification_file);
        }
        if ($application->payment_proof_file) {
            Storage::disk('public')->delete($application->payment_proof_file);
        }
        if ($application->photo) {
            Storage::disk('public')->delete($application->photo);
        }

        $application->delete();
        return redirect()->route('admin.applications.index')->with('success', 'Application deleted successfully.');
    }
}
