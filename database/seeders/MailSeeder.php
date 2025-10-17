<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mail; 

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mails = [
            ['name'=>'rex','email'=>'rexwirasantoso@gmail.com','subject'=>'subject1','content'=>'hi :D'],
            ['name'=>'rex2','email'=>'rex1wirasantoso@gmail.com','subject'=>'subject2','content'=>'sup :D'],
            ['name'=>'rex3','email'=>'rexw2irasantoso@gmail.com','subject'=>'subject3','content'=>'hallo :D']
        ];

        foreach($mails as $m){
            Mail::create($m);
        }
    }
}
