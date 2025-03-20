<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $palabras = [
            'Raul', 'Fer', 'Josting', 'David', 'Lorien',
            'DingHao', 'Beatriz', 'Gabriel', 'Sergio', 'Nico',
            'Ayoub', 'Daniel', 'Jorge', 'Ernesto', 'Hector'
        ];
        $palabraAleatoria = $palabras[array_rand($palabras)];

        return [
           'titulo'=>$this->faker->sentence(3),
           'contenido'=>$this->faker->text(100),
           'autor'=> $palabraAleatoria,
           'fecha'=>$this->faker->date()
        ];
    }
}
