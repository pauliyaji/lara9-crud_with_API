<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
           'name'=>'Paul Iyaji',
           'slug'=>'paul-iyaji',
           'mobile'=>'+447539952264',
           'phone'=>'+2348124638776',
           'email'=>'paul@p3portfolio.com',
           'address'=>'91 Chippenham Road',
           'post_code'=>'TS4 3NT',
           'city'=>'middlesbrough',
           'birthday'=>'March 27'
        ]);
        Contact::create([
            'name'=>'Chidinma Oluchi',
            'slug'=>'chidinma-oluchi',
            'mobile'=>'+447539952265',
            'phone'=>'+2348034890777',
            'email'=>'chidinmagu@gmail.com',
            'address'=>'91 Chippenham Road',
            'post_code'=>'TS4 3NT',
            'city'=>'middlesbrough',
            'birthday'=>'December 15'
        ]);
    }
}
