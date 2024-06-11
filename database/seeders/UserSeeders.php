<?php
// para crear seeeder is php artisan make:seeder  name
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = new User();
        // $user->name = "victor";
        // $user->email = "victor@gmail.com";
        // $user->password = bcrypt("123456");
        // $user->save();
    
        // $user->name = "victor";
        // $user->email = "victor@gmail.com";
        // $user->password = bcrypt("123456");
        // $user->save();

        User::factory(10)->create();

  
    }



}
