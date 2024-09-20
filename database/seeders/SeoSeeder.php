<?php

namespace Database\Seeders;

use App\Models\seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    public function run(): void
    {
        $players = [
            [
                'page' => 'Home',
                'title' => 'seo_title',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Home',
                'title' => 'seo_description',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Home',
                'title' => 'seo_author',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Home',
                'title' => 'seo_keyword',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'About',
                'title' => 'seo_title',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'About',
                'title' => 'seo_description',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'About',
                'title' => 'seo_author',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'About',
                'title' => 'seo_keyword',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Player',
                'title' => 'seo_title',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Player',
                'title' => 'seo_description',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Player',
                'title' => 'seo_author',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Player',
                'title' => 'seo_keyword',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Gallery',
                'title' => 'seo_title',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Gallery',
                'title' => 'seo_description',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Gallery',
                'title' => 'seo_author',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Gallery',
                'title' => 'seo_keyword',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'League',
                'title' => 'seo_title',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'League',
                'title' => 'seo_description',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'League',
                'title' => 'seo_author',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'League',
                'title' => 'seo_keyword',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Match',
                'title' => 'seo_title',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Match',
                'title' => 'seo_description',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Match',
                'title' => 'seo_author',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Match',
                'title' => 'seo_keyword',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Contact',
                'title' => 'seo_title',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Contact',
                'title' => 'seo_description',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Contact',
                'title' => 'seo_author',
                'value' => '',
                'status' => 0
                        
            ],
            [
                'page' => 'Contact',
                'title' => 'seo_keyword',
                'value' => '',
                'status' => 0
                        
            ],
            
           
            
        ];

        foreach ($players as $player) {
            seo::create($player);
        }
    }
}
