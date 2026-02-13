<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Str;

class ImportEventsSeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'title' => 'Seminar of success gathering of the students',
                'image' => 'events/event-1.webp',
                'description' => 'Seminar of success gathering of the students',
            ],
            [
                'title' => 'Meet the team of IIMM sucess in Cochin',
                'image' => 'events/event-2.webp',
                'description' => 'Meet the team of IIMM sucess in Cochin',
            ],
            [
                'title' => 'Well organised training programme conducted in Cochin',
                'image' => 'events/event-3.webp',
                'description' => 'Well organised training programme conducted in Cochin',
            ],
            [
                'title' => 'IIMM Mumbai had an event on Services Procurement.',
                'image' => 'events/event-4.webp',
                'description' => 'IIMM Mumbai had an event on Services Procurement.',
            ],
            [
                'title' => 'Chairman and Past Chairman with Officers of various Organisations',
                'image' => 'events/event-9.webp',
                'description' => 'Chairman and Past Chairman with Officers of various Organisations',
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'events/event-3.0.webp',
                'description' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'events/event-6.0.webp',
                'description' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'events/event-7.0.webp',
                'description' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'events/event-5.0.webp',
                'description' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'events/event-4.0.webp',
                'description' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
            ],
        ];

        foreach ($events as $eventData) {
            Event::create([
                'title' => $eventData['title'],
                'slug' => Str::slug($eventData['title']) . '-' . uniqid(), // Ensure unique slug
                'description' => $eventData['description'],
                'image' => $eventData['image'], // Storing exact path as requested
                'status' => true,
                'date' => now(),
            ]);
        }
    }
}
