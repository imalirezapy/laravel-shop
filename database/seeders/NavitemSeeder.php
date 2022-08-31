<?php

namespace Database\Seeders;

use App\Models\Navitem;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rows = [
            [
                'name' => 'برنامه',
                'link'=>'/',
                'dropdown-menu' => false,
                'dropdown-item' => false,
                'sm' => false,
                'lg' => true,
                'order' => 1
            ],
            [
                'name' => 'بازی',
                'link'=>'?games',
                'dropdown-menu' => false,
                'dropdown-item' => false,
                'sm' => false,
                'lg' => true,
                'order' => 2
            ],
            [
                'name' => 'پشتیبانی',
                'link'=>'?#help',
                'dropdown-menu' => false,
                'dropdown-item' => false,
                'sm' => false,
                'lg' => true,
                'order' => 3
            ],
            [
                'name' => 'سایر',
                'link'=>'#',
                'dropdown-menu' => true,
                'dropdown-item' => false,
                'sm' => false,
                'lg' => false,
                'order' => 4
            ],
            [
                'name' => 'توسعه دهندگان بازار',
                'link'=>'?developer',
                'dropdown-menu' => false,
                'dropdown-item' => true,
                'sm' => false,
                'lg' => false,
                'order' => 1
            ],
            [
                'name' => 'تبلیغات در بازار',
                'link'=>'?ads',
                'dropdown-menu' => false,
                'dropdown-item' => true,
                'sm' => false,
                'lg' => false,
                'order' => 2
            ],
            [
                'name' => 'برای شما',
                'link'=>'/',
                'dropdown-menu' => false,
                'dropdown-item' => false,
                'sm' => true,
                'lg' => false,
                'order' => 1
            ],
            [
                'name' => 'دسته بندی ها',
                'link'=>'?categories',
                'dropdown-menu' => false,
                'dropdown-item' => false,
                'sm' => true,
                'lg' => false,
                'order' => 2
            ],
            [
                'name' => 'کودک',
                'link'=>'?child',
                'dropdown-menu' => false,
                'dropdown-item' => false,
                'sm' => true,
                'lg' => false,
                'order' => 3
            ],
        ];
        foreach ($rows as $row) {
            Navitem::create($row);
        }
    }

}
