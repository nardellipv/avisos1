<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->delete();

        $subcategories= [
            ['name' => 'Alojamiento', 'category_id' => '1'],
            ['name' => 'Alquiler de Autos', 'category_id' => '1'],
            ['name' => 'Excursiones y Paseos', 'category_id' => '1'],
            ['name' => 'Paquetes Turísticos', 'category_id' => '1'],
            ['name' => 'Pasajes', 'category_id' => '1'],
            ['name' => 'Asistencia al Viajero', 'category_id' => '1'],
            ['name' => 'Otros', 'category_id' => '1'],
            ['name' => 'Alquiler de Carpas y Gazebos', 'category_id' => '2'],
            ['name' => 'Alquiler de Equipos', 'category_id' => '2'],
            ['name' => 'Alquiler de Escenarios', 'category_id' => '2'],
            ['name' => 'Alquiler de Indumentaria', 'category_id' => '2'],
            ['name' => 'Alquiler de Mobiliario', 'category_id' => '2'],
            ['name' => 'Animación y Alquiler de juegos', 'category_id' => '2'],
            ['name' => 'Bebidas', 'category_id' => '2'],
            ['name' => 'Catering', 'category_id' => '2'],
            ['name' => 'Decoración y Ambientación', 'category_id' => '2'],
            ['name' => 'Personal Gastronómico', 'category_id' => '2'],
            ['name' => 'Salones y Quintas', 'category_id' => '2'],
            ['name' => 'Servicios Audiovisuales', 'category_id' => '2'],
            ['name' => 'Vehículos para Eventos', 'category_id' => '2'],
            ['name' => 'Otros', 'category_id' => '2'],
            ['name' => 'Audio', 'category_id' => '3'],
            ['name' => 'Cerrajería', 'category_id' => '3'],
            ['name' => 'Cuidado del Vehículo', 'category_id' => '3'],
            ['name' => 'Diagnósticos', 'category_id' => '3'],
            ['name' => 'Llantas y Neumáticos', 'category_id' => '3'],
            ['name' => 'Lubricentros', 'category_id' => '3'],
            ['name' => 'Parabrisas y Cristales', 'category_id' => '3'],
            ['name' => 'Seguridad Vehicular', 'category_id' => '3'],
            ['name' => 'Service Programado', 'category_id' => '3'],
            ['name' => 'Talleres', 'category_id' => '3'],
            ['name' => 'Tunning', 'category_id' => '3'],
            ['name' => 'Otros', 'category_id' => '3'],
            ['name' => 'Albañil', 'category_id' => '4'],
            ['name' => 'Carpintería', 'category_id' => '4'],
            ['name' => 'Cerrajería', 'category_id' => '4'],
            ['name' => 'Decoración y Ambientación', 'category_id' => '4'],
            ['name' => 'Electricista', 'category_id' => '4'],
            ['name' => 'Fumigación', 'category_id' => '4'],
            ['name' => 'Herrería', 'category_id' => '4'],
            ['name' => 'Jardinería y Exteriores', 'category_id' => '4'],
            ['name' => 'Limpieza', 'category_id' => '4'],
            ['name' => 'Pintor', 'category_id' => '4'],
            ['name' => 'Pisos', 'category_id' => '4'],
            ['name' => 'Plomero y Gasista', 'category_id' => '4'],
            ['name' => 'Revestimientos', 'category_id' => '4'],
            ['name' => 'Pisos', 'category_id' => '4'],
            ['name' => 'Profesionales de Construcción', 'category_id' => '4'],
            ['name' => 'Revestimentos', 'category_id' => '4'],
            ['name' => 'Techos', 'category_id' => '4'],
            ['name' => 'Aire acondicionado', 'category_id' => '4'],
            ['name' => 'Electrodomésticos', 'category_id' => '4'],
            ['name' => 'Calderas y Radiadores', 'category_id' => '4'],
            ['name' => 'Otros', 'category_id' => '4'],
            ['name' => 'Alarmas y Camaras de Seguridad', 'category_id' => '5'],
            ['name' => 'Audio y Video', 'category_id' => '5'],
            ['name' => 'Celulares y Telefonía', 'category_id' => '5'],
            ['name' => 'Computación', 'category_id' => '5'],
            ['name' => 'Consolas', 'category_id' => '5'],
            ['name' => 'Cámaras Digitales', 'category_id' => '5'],
            ['name' => 'GPS', 'category_id' => '5'],
            ['name' => 'Programadores', 'category_id' => '5'],
            ['name' => 'Relojes', 'category_id' => '5'],
            ['name' => 'Otros', 'category_id' => '5'],
            ['name' => 'Adiestramiento Canino', 'category_id' => '6'],
            ['name' => 'Cruza', 'category_id' => '6'],
            ['name' => 'Cuidado e Higiene', 'category_id' => '6'],
            ['name' => 'Paseadores de Perros', 'category_id' => '6'],
            ['name' => 'Peluquerías Caninas', 'category_id' => '6'],
            ['name' => 'Perros en Adopción', 'category_id' => '6'],
            ['name' => 'Traslados', 'category_id' => '6'],
            ['name' => 'Veterinaria', 'category_id' => '6'],
            ['name' => 'Otros', 'category_id' => '6'],
            ['name' => 'Confección', 'category_id' => '7'],
            ['name' => 'Estampados', 'category_id' => '7'],
            ['name' => 'Corte y Moldería', 'category_id' => '7'],
            ['name' => 'Arreglos', 'category_id' => '7'],
            ['name' => 'Lavandería y Tintorería', 'category_id' => '7'],
            ['name' => 'Bordados', 'category_id' => '7'],
            ['name' => 'Otros', 'category_id' => '7'],
            ['name' => 'Contadores y Estudios', 'category_id' => '10'],
            ['name' => 'Abogados y Estudios Jurídicos', 'category_id' => '10'],
            ['name' => 'Gestores', 'category_id' => '10'],
            ['name' => 'Productores de Seguros', 'category_id' => '10'],
            ['name' => 'Despachantes de Aduana', 'category_id' => '10'],
            ['name' => 'Tasadores', 'category_id' => '10'],
            ['name' => 'Otros', 'category_id' => '10'],
        ];

        foreach ($subcategories as $subcategory) {
            SubCategory::create($subcategory);
        }
    }
}
