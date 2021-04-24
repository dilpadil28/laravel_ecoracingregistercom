<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gender' => $this->faker->randomElement(['pria', 'wanita']),
            'birth' => $this->faker->date('Y-m-d', 'now'),
            'address' => $this->faker->address(),
            'id_number' => $this->faker->unique()->numberBetween(1000,9000),
            'phone' => $this->faker->unique()->phoneNumber(),
            'user_id' => $this->faker->unique()->numberBetween(2,11),
        ];
    }
}
