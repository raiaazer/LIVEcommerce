<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GenerateFakeProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:fake-products {--count=30}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate fake products and insert them into the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = (int) $this->option('count');
        $faker = Faker::create();

        $baseURL = 'frontend/assets/images/products/';
        $images = [
            'product-1.jpg', 'product-1-2.jpg', 'product-2.jpg', 'product-2-2.jpg',
            'product-3.jpg', 'product-3-2.jpg', 'product-4.jpg', 'product-4-2.jpg',
            'product-5.jpg', 'product-5-2.jpg', 'product-6.jpg', 'product-6-2.jpg',
            'product-7.jpg', 'product-7-2.jpg', 'product-8.jpg', 'product-8-2.jpg',
            'product-9.jpg', 'product-9-2.jpg', 'product-10.jpg', 'product-10-2.jpg',
        ];

        $products = [];
        for ($i = 0; $i < $count; $i++) {
            $image1 = $faker->randomElement($images);
            $image2 = $faker->randomElement($images);

            $products[] = [
                'name' => $faker->words(3, true),
                'image1' => $baseURL . $image1,
                'image2' => $baseURL . $image2,
                'price' => $faker->randomFloat(2, 20, 200),
                'old_price' => $faker->randomFloat(2, 20, 300),
                'quantity' => $faker->numberBetween(5, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($products);

        $this->info("Successfully inserted {$count} fake products into the database.");

        return Command::SUCCESS;
    }
}
