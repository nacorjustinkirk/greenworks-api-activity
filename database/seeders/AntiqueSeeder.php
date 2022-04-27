<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AntiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('antiques')->insert([
            'name' => 'Test',
            'price' => '123',
            'description' => 'This is a test!',
            'imageUrl' => 'https://scontent.fmnl30-2.fna.fbcdn.net/v/t1.15752-9/272851312_3008428622742964_1108569026661250844_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=ae9488&_nc_ohc=xsL49jj_VF4AX9j_Lql&_nc_oc=AQmAFyIan7zsmQVh35uQC8wP8AYudrmewz0h9b02wNHWK3QsDoMM19no1QaF8Uh9AVU&_nc_ht=scontent.fmnl30-2.fna&oh=03_AVKh4Tz76ycCLaJkOkQj-1VV4zGtTzGhjU6MV4EA9CP2kQ&oe=628D0868'
        ]);
    }
}
