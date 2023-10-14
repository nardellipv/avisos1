<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->unique()->word(5);
        return [
            'title' => $title,
            'description' => fake()->realText('1000'),
            'status' => fake()->randomElement(['Activo', 'Pausado', 'Desactivo','Pendiente']),
            'publish' => fake()->randomElement(['Free', 'Destacado']),
            'phone' => fake()->e164PhoneNumber(),
            'phoneWsp' => fake()->randomElement($array = array('Y', 'N')),
            'visit' => rand(1000, 9999),
            'like' => rand(1000, 999),
            'photo' => '',
            'end_date' => \Carbon\Carbon::parse(now()->addDay(30)),
            'user_id' => rand(1, 10),
            'category_id' => rand(1, 11),
            'subcategory_id' => rand(1, 87),
            'region_id' => rand(1, 18),
            'ref' => fake()->md5,
            'slug' => $title,
        ];
    }
}
