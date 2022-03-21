<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\New_;
use ZipStream\File;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      $about =  About::create([
            'title' => 'Test',
            'description' =>'test'
        ]);

      $user = User::create([
          'name'     => 'abo Qusi',
          'email'    =>'TM@gmail.com',
          'password' => Hash::make('password123')
      ]);

        $faker = Faker::create();
        $imageUrl = $faker->imageUrl(640,480, null, false);
        $about->addMediaFromUrl($imageUrl)->toMediaCollection('about');
    }
}
