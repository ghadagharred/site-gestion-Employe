<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
    
        return [
            'registration_number' =>$this-> faker->numberBetween(),
            'full_name' =>$this-> faker->name(),
            'departs' =>$this-> faker->word(),
            'hire_date'  =>$this-> faker->date(),
            'phone'  =>$this-> faker->numberBetween(),
            'address' =>$this-> faker->address(),
            'city' =>$this-> faker->city(),
        ];
    }
}
