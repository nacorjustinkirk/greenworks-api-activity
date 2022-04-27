<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->insert([
            'sender' => 'Justin',
            'message' => 'This is a test!',
            'imageUrl' => 'https://scontent.fmnl30-2.fna.fbcdn.net/v/t1.15752-9/278921251_770185403952198_6708189617693247772_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Q6Zb2V_cqUgAX_gUJjR&_nc_ht=scontent.fmnl30-2.fna&oh=03_AVLaIuq5CdFhQJU_MsXs4g3-LvHV-jg22Z1f4t1OBbjH4A&oe=628C4464'
        ]);
    }
}
