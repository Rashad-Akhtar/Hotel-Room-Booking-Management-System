<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotel1 = [
            'title' => 'Luxurious 3 Bed Room' , 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor dapibus iaculis. Pellentesque vitae fringilla eros, vitae bibendum enim.',
            'advance_amount' => '12000',
            'price' => '25000',
            'image1' => 'hotels/images/hotel1.jpg',
            'image2' => 'hotels/images/hotel2.jpg' 
        ];

        $hotel2 = [
            'title' => 'Luxurious 2 Bed Room' , 
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor dapibus iaculis. Pellentesque vitae fringilla eros, vitae bibendum enim.',
            'advance_amount' => '10000',
            'price' => '20000',
            'image1' => 'hotels/images/hotel3.jpg',
            'image2' => 'hotels/images/hotel4.jpg' 
        ];

        Hotel::create($hotel1);
        Hotel::create($hotel2);
    }
}
