<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $players = [
            [
                'name' => 'Home',
                'type' => 'banner',
                'value' => "",
                'parent' => '',
                'status' => 0,
                'isupload' => 1
                
            ],
            [
                'name' => 'Home',
                'type' => 'bannerheading',
                'value' => "",
                'parent' => 'banner',
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'bannerquote',
                'value' => "",
                'parent' => 'banner',
                'status' => 0,
                'isupload' => 0
            ],
           
            [
                'name' => 'Home',
                'type' => 'Abouttext',
                'value' => "",
                'parent' => 'About',
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'Aboutleague',
                'value' => "",
                'parent' => 'AboutLeague',
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'ourmatchcontent',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'imgcard1',
                'value' => "",
                'status' => 0,
                'isupload' => 1
            ],
            [
                'name' => 'Home',
                'type' => 'headingcard1',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'cardcontent1',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'imgcard2',
                'value' => "",
                'status' => 0,
                'isupload' => 1
            ],
            [
                'name' => 'Home',
                'type' => 'headingcard2',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'cardcontent2',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'Lawofplay',
                'value' => "",
                'parent' => '',
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Home',
                'type' => 'Lawofplayfile',
                'value' => "",
                'parent' => '',
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'headingLeft',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'BoldParagraphLeft',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'ParagraphLeft',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'imageLeft',
                'value' => "",
                'status' => 0,
                'isupload' => 1
            ],
            [
                'name' => 'About',
                'type' => 'ImgQuoteLeft',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'Rightquoteauthor',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'PlayerInformation',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'HeadinRight',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'BoldParagraphRight',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'ParagraphRight',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'imageRight',
                'value' => "",
                'status' => 0,
                'isupload' => 1
            ],
            [
                'name' => 'About',
                'type' => 'ImgQuoteRight',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'About',
                'type' => 'Rightquoteauthor',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Players',
                'type' => 'Heading',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Players',
                'type' => 'Paragraph',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Gallery',
                'type' => 'Heading',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Gallery',
                'type' => 'Paragraph',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Gallery',
                'type' => 'Sport',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Contact',
                'type' => 'Heading',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Contact',
                'type' => 'Paragraph',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Contact',
                'type' => 'Contact',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Footer',
                'type' => 'Paragraph',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Footer',
                'type' => 'newsletters',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Footer',
                'type' => 'fb',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Footer',
                'type' => 'twitter',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Footer',
                'type' => 'gmail',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Footer',
                'type' => 'pinterest',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],
            [
                'name' => 'Footer',
                'type' => 'yt',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ], [
                'name' => 'Footer',
                'type' => 'insta',
                'value' => "",
                'status' => 0,
                'isupload' => 0
            ],


           
            
        ];

        foreach ($players as $player) {
            Page::create($player);
        }
    }
}
