<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
    public function definition(): array
    {
        $departements = [
            'publicité', 'Rousource Humaine', 'sponsoring', 'marqueting', // Ajoutez d'autres noms de départements fictifs ici
        ];
    
        return [
            'nom_departement' =>$this->faker->randomElement($departements),
            'nom_directeur' =>$this-> faker->name(),
        ];
    }
}
