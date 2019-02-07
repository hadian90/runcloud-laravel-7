<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i = 1; $i < 10; $i++){
            $new = new User();
            $new->name = 'User '.$i;
            $new->email = $i.'user@run.com';
            $new->password = bcrypt('123456');
            $new->save();
        }
        
    }
}
