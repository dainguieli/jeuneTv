<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\video>
 */
class videoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_Vidéo' => fake()->name(),
              
           'heure_diffusion' => fake()->time(),
            'jour_diffusion' => fake()->date(),
            'lien_video' => fake()->url(),
           'description' => fake()->text(),
        
            'image' => fake()->name(),
            'categorie_id' => fake()->unique(),
          
           
     
        ];
    }
}
