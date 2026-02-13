<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = [
            [
                'title' => 'IIMM Seminar at Cochin Branch',
                'image' => 'gallery/1.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM Seminar at Mumbai Branch',
                'image' => 'gallery/10.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],  
            [
                'title' => 'IIMM Seminar at Cochin Branch',
                'image' => 'gallery/13.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Certificate Ceremony',
                'image' => 'gallery/3.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM Seminar on Contract and Negotiation',
                'image' => 'gallery/iimm-gallery-12.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Certificate Ceremony',
                'image' => 'gallery/15.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM HOLDING EXECUTIVE COMMITTEE',
                'image' => 'gallery/exicutive-meeting.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM Seminar on Contract and Negotiation',
                'image' => 'gallery/event-14.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM Seminar on Contract and Negotiation',
                'image' => 'gallery/event-15.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM Seminar on Contract and Negotiation',
                'image' => 'gallery/iimm-3.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM Seminar on Contract and Negotiation',
                'image' => 'gallery/iimm-gallery.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM Seminar on Contract and Negotiation',
                'image' => 'gallery/iimm-gallery-11.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'gallery/gallery-4.0.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'gallery/gallery-3.0.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'IIMM at Spectrum inter state management fest by Holy Grace College, Mala. Students with IIMM.',
                'image' => 'gallery/gallery-1.webp',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('galleries')->insert($galleries);
    }
}
