<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker as PersianFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App>
 */
class AppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $preview_width = $this->faker->numberBetween(200, 600);
        $preview = [
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300),
            $this->faker->imageUrl($preview_width,300)
        ];
        return [
            'title' => $title = PersianFaker::word() . PersianFaker::word()." " .PersianFaker::word(),
            'slug' => Str::replace(' ', '-', $title)."-".$this->faker->numberBetween(1000, 9999),
            'owner' => Str::replace(' ', '-', PersianFaker::fullName()),
            'version' => $this->faker->numberBetween(1, 15) . "." . sprintf("%02d", $this->faker->numberBetween(1, 15)). "." . sprintf("%02d", $this->faker->numberBetween(1, 15)),
            'file' => 'null',
            'cover' => $this->faker->imageUrl(104, 104),
            'size' => $this->faker->numberBetween(9, 100),
            'description' => PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph() ."<br>". PersianFaker::paragraph()  ,
            'preview' => json_encode(Arr::random($preview, $this->faker->numberBetween(4, 8))),
            'category_id' => $this->faker->numberBetween(3, 32),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
