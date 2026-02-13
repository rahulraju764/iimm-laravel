<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'What is the main objective of a warehouse?',
                'content' => "It's operations form a critical and integral part of modern supply management. IIMM firmly believes that strengthening these capabilities plays a pivotal role in making businesses sustainable, efficient, and competitive in today’s dynamic marketplace.",
                'image' => 'blogs/warehouse.webp',
                'published_at' => '2025-01-27 00:00:00',
            ],
            [
                'title' => 'Is logistics a good career?',
                'content' => "Logistics offers varied career prospects, which blends problem-solving, international trade and technology. It provides stability, diverse roles, and growth opportunities across various industries. Logistics professionals manage supply chains and making them vital to business success. With rising e-commerce and globalization, logistics careers are relevant, advanced, and provide rewarding opportunities worldwide.",
                'image' => 'blogs/logitics.webp',
                'published_at' => '2025-01-27 00:00:00',
            ],
            [
                'title' => 'IIMM affiliation with IFPSM',
                'content' => "Affiliation with International Federation of Purchasing And Supply Management.\n\nThrough our affiliation with IFPSM, the world’s largest network of 2,50,000 purchasing and supply chain professionals, across 40 + countries, IIMM empowers its members with true global recognition.",
                'image' => 'blogs/materials.webp',
                'published_at' => '2025-01-27 00:00:00',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create([
                'title' => $blog['title'],
                'slug' => Str::slug($blog['title']),
                'content' => $blog['content'],
                'image' => $blog['image'],
                'published_at' => $blog['published_at'],
                'status' => true,
            ]);
        }
    }
}
