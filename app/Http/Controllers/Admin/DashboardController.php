<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Event;
use App\Models\News;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Career;
use App\Models\Enquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'courses' => Course::count(),
            'events' => Event::count(),
            'news' => News::count(),
            'blogs' => Blog::count(),
            'galleries' => Gallery::count(),
            'testimonials' => Testimonial::count(),
            'careers' => Career::count(),
            'enquiries' => Enquiry::count(),
            'unread_enquiries' => Enquiry::where('is_read', false)->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
