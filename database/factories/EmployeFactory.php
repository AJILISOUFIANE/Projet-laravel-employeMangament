<?php

namespace Database\Factories;

use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Matricule' => $this->faker->numberBetween(),
            'fullname' => $this->faker->name(),
            'depart' => $this->faker->word(),
            'hire_date' => $this->faker->date(),
            'phone' => $this->faker->numberBetween(),
            'address' => $this->faker->address(),
            'city' => $this->faker->state(),
        ];
    }
}
