<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            ['id' => '1', 'name' => 'Turismo', 'slug' => 'turismo', 'icon' => 'la la-ship'],
            ['id' => '2', 'name' => 'Fiestas y Eventos', 'slug' => 'fiestas_y_eventos', 'icon' => 'la la-coffee'],
            ['id' => '3', 'name' => 'Mantenimiento Vehículos', 'slug' => 'mantenimiento_vehiculo', 'icon' => 'la la-car'],
            ['id' => '4', 'name' => 'Mantenimiento Hogar', 'slug' => 'mantenimiento_hogar', 'icon' => 'la la-home'],
            ['id' => '5', 'name' => 'Tecnología', 'slug' => 'tecnologia', 'icon' => 'la la-laptop'],
            ['id' => '6', 'name' => 'Servicio Mascotas', 'slug' => 'servicio_mascotas', 'icon' => 'la la-stethoscope'],
            ['id' => '7', 'name' => 'Ropa y Moda', 'slug' => 'ropa_moda', 'icon' => 'la la-cut'],
            ['id' => '8', 'name' => 'Logística - Traslados', 'slug' => 'logisticia_traslados', 'icon' => 'la la-truck'],
            ['id' => '9', 'name' => 'Enseñanza - Capacitación', 'slug' => 'ensenanza_capacitacion', 'icon' => 'la la-book'],
            ['id' => '10', 'name' => 'Servicios Profesionales', 'slug' => 'servicios_profesionales', 'icon' => 'la la-balance-scale'],
            ['id' => '11', 'name' => 'Otros servicios', 'slug' => 'otros_servicios', 'icon' => 'la la-paperclip'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
