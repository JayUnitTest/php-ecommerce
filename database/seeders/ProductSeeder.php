<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([

            [
            'prodName' => '13mm Strength Shop Lever Belt',
            'prodPrice' => "100",
            'prodCategory'=> "Belts",
            'prodGallery'=>"https://cdn.shopify.com/s/files/1/0619/0222/5661/products/10mm-_-13mm-black_7_8a4447a2-90d0-49d0-a52e-041cc753c28e_998x998.jpg?v=1643292619",
            "prodDescription" => "13mm lever belt (Powerlifting) by Strength Shop. Perfect for a beginner or the advanced lifer!"
            ],

            [
                'prodName' => 'Titan Wrist Wraps',
                'prodPrice' => "25",
                'prodCategory'=> "Wrist Wraps",
                'prodGallery'=>"https://cdn.shopify.com/s/files/1/0266/1187/5875/products/Titanium_WW_720x.jpg?v=1575555562",
                "prodDescription" => "Titan wrist wraps. Sold as pairs,
                IPF Approved"
                ],

                [
                    'prodName' => 'GymShark Lifting straps',
                    'prodPrice' => "20",
                    'prodCategory'=> "Lifting Straps",
                    'prodGallery'=>"https://cdn.shopify.com/s/files/1/0098/8822/products/SiliconeLiftingStrapsBlackI1A4S-BBBB180_1920x.jpg?v=1678781478",
                    "prodDescription" => "One more rep with the GymShark Silicone Grip Lifting Straps. allowing you to lift more weight."
                    ],

                    [
                        'prodName' => 'MyProtein Liquid Chalk',
                        'prodPrice' => "10",
                        'prodCategory'=> "Chalk",
                        'prodGallery'=>"https://static.thcdn.com/images/large/original//productimg/1600/1600/10529941-1474734172642155.jpg",
                        "prodDescription" => "Improve your grip — maximize your lift"
                        ],



        ]);

    }
}
