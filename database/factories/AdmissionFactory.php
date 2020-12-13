<?php

namespace Database\Factories;

use App\Models\Admission;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdmissionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admission::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_complet' => $this->faker->nom_complet,
            'sexe' => $this->faker->sexe,
            'age' => $this->faker->age,
            'adresse' => $this->faker->adresse,
            'nationalite' => $this->faker->nationalite,
            'status' => $this->faker->randomElement(array('masculin','feminin')),
            'motif_admission' => $this->faker->motif_admission,
            'date_admission' => $this->faker->date_admission,
            'diag_principal' => $this->faker->diag_principal,
            'nlit' => $this->faker->nlit,
            'date_sortie' => $this->faker->date_sortie,
            'mode_sortie' => $this->faker->mode_sortie,
        ];
    }
}
