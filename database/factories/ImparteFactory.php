<?php

namespace Database\Factories;

use App\Models\Imparte;
use App\Models\Profesor;
use App\Models\Clase;
use App\Models\Aula;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImparteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imparte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'c_codclase' => Clase::inRandomOrder()->first()->id,
            'p_idprofesor' => Profesor::inRandomOrder()->first()->id,
            'a_idaula' => Aula::inRandomOrder()->first()->id
        ];
    }
}
