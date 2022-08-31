<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'برنامه',
            'slug' => 'app',

        ]);
        Category::create([
            'name' => 'بازی',
            'slug' => 'game'

        ]);

        $apps = [
            'آب و هوا',
            'آموزش',
            'امور مالی',
            'تناسب اندام',
            'رفت و آمد',
            'سرگرمی',
            'شبکه های اجتماعی',
            'عکاسی و ویدیو',
            'برنامه کودک',
            'موسیقی',
            'آشپزی و رستوران',
            'ابزار ها',
            'پزشکی',
            'خرید',
            'سبک زندگی',
            'سفر',
            'شخصی سازی',
            'کتاب ها و مطبوعات',
            'مذهبی',
            'برنامه ورزشی',
        ];

        $games = [
            'استراتژی',
            'امتیازی',
            'رانندگی',
            'کلمات و دانستنی ها',
            'معمایی',
            'اکشن',
            'تفننی',
            'شبیه سازی',
            'کودک',
            'ورزشی',
        ];

        foreach ($apps as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'parent_id' => 1
            ]);
        }
        foreach ($games as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'parent_id' => 2
            ]);
        }


    }
}
