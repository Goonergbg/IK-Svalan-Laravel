<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create admin
        User::create([
            'firstname' => 'Johan',
            'lastname' => 'Östby',
            'birthday' => '1989-03-23',
            'email' => 'admin@iksvalan.se',
            'admin' => 1,
            'password' => bcrypt('87654321'),
        ]);

        factory(App\User::class, 100)->create()->each(function ($user) {
                $datetime = new \DateTime;
                $birthday = new \DateTime($user->birthday);
                $money = $birthday->diff($datetime)->y > 17 ? 500 : 300;
                $user->fees()->create([
                    'money' => $money,
                    'payed' => rand(0,1),
        ]);
    });
    }
}
