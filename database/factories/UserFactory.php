<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    // public function definition()
    // {
    //     return [
    //         'name' => $this->faker->name,
    //         'email' => $this->faker->unique()->safeEmail,
    //         'password' => Hash::make('password'),
    //         'google_id' => $this->faker->randomNumber(9),
    //         'github_id' => $this->faker->randomNumber(8),
    //         'username' => $this->faker->userName,
    //         'created_at' => now(),
    //         'updated_at' => now(),
    //         'email_verified_at' => now(),
    //         'avatar' => 'storage/Blog/image/avatars/' . $this->faker->image('public/storage/Blog/image/avatars', 200, 200, null, false),
    //         'gender' => $this->faker->numberBetween(0, 1),
    //         // 'password' => Hash::make(Str::random(10)),
    //     ];

    // }


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'google_id' => $this->faker->randomNumber(9),
            'github_id' => $this->faker->randomNumber(8),
            'username' => $this->faker->userName,
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
            'avatar' => 'storage/Blog/image/avatars/' . $this->faker->image('public/storage/Blog/image/avatars', 200, 200, null, false),
            'gender' => $this->faker->numberBetween(0, 1),
            // 'password' => Hash::make(Str::random(10)),
        ];
    }
}
