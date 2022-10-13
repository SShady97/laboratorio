<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'Prueba de TSH',
                'cost' => '78500',
                'fast' => true
            ],
            [
                'name' => 'Antigeno de prostata PSA',
                'cost' => '68750',
                'fast' => false
            ],
            [
                'name' => 'Acido urico',
                'cost' => '50100',
                'fast' => false
            ],
            [
                'name' => 'Creatinina',
                'cost' => '89000',
                'fast' => false
            ],
        ];

        foreach ($services as $key => $value) {
            Service::create($value);
        }
        
    }
}
