<?php
// auqi van los datos que siempre quiero tener en mi tabla

// php artisan db:seed   para agregar los datos

//php  artisan migrated:fresh --seed    eliminar y ejecutar las los datos
namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();  
        $this->call([
            UserSeeders::class,
            PostSeeder::class
        ]);
   
        
   
    }


}