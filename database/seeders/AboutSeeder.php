<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'content' => 'Zakir Soft is a Software company and Software Development Training Institute. We develop Softwares for your business and we also provide quality software training in Adabor Since 2020. We have passionate teams like Full Stack Laravel Developer, Android Developer, UI/UX Designer. We have management system softwares for the local market.

            we also have eCommerce systems for your online business.'
        ]);
    }
}
