<?php

namespace Database\Factories;

use App\Models\Tickets;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $estado = ['Abierto','Cerrado','Seguimiento'];
        $prioridad = ['Normal','Urgente'];
        $edificio=['Edificio 1','Edificio 2'];

        return [
            'Nombre' => $this-> faker-> company,
            'Departamento' => $this-> faker ->text(50),
            'Edificio' => $this-> faker ->random_bytes($edificio),
            'Problema' => $this-> faker ->text(150),
            'Prioridad' => $this-> faker ->random_bytes($prioridad),
            'Estado' => $this-> faker ->random_bytes($estado),
            'Creacion' => $this-> faker ->text(20),
            'Termino' => $this-> faker ->text(20),

        ];
    }
}