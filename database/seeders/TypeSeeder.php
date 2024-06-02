<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $types = [
            'Sviluppo Web',
            'Applicazione Mobile',
            'Design Grafico',
            'Marketing Digitale',
            'Educazione ed Istruzione',
        ];

        foreach ($types as $type) {
            Type::create([
                'label' => $type,
                'color' => $faker->hexColor(),
            ]);
        }
    }
}
