<?php

namespace Database\Seeders;

use App\Models\Abonnement;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Commande;
use App\Models\Movies;
use Illuminate\Console\Command;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'admin'
        ]);
        Commande::create([
            'session_id' => '01',
            'nom' => 'pone',
            'email' =>'pone@gmail.com',
            'country' =>'mali',
            'payment_method' =>'paypal',
            'tel' => str_replace('+', '', fake()->unique()->e164PhoneNumber()),
            'total' => 1000,
        ]);
        Abonnement::create([
            'nom' => '01 MONTH SUBSCRIBE',
            'prix' => '08',
            'description' => 'Plus de 12000 chaines, 90000 films and 12000 series',
            'duree' => '30',
        ]);
        Abonnement::create([
            'nom' => '06 MONTH SUBSCRIBE',
            'prix' => '23',
            'description' => 'Plus de 12000 chaines, 90000 films and 12000 series',
            'duree' => '180',
        ]);
        Abonnement::create([
            'nom' => '12 MONTH SUBSCRIBE',
            'prix' => '30',
            'description' => 'Plus de 12000 chaines, 90000 films and 12000 series',
            'duree' => '365',
        ]);
        // Movies::factory(10)->create();
        $categories = Category::factory(5)->create();
        // foreach($categories as $category){
        //     Post::factory(3)->create(
        //         [
        //             'user_id' => $user->id,
        //             'category_id' => $category->id,
        //         ]
        //         );
        // }
        // User::factory(10)->create();

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
