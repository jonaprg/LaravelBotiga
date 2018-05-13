<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;
class ProductTableSeeder extends Seeder {
    /**
     * Run the Categories table seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' 			=> 'Bici Carretera 1',
                'slug' 			=> 'carretera-1',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 1372.00,
                'image' 		=> 'https://goo.gl/ysVWCF',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bici Carretera 2',
                'slug' 			=> 'carretera-2',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 3154.00,
                'image' 		=> 'https://goo.gl/odaau1',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bici Carretera 3',
                'slug' 			=> 'carretera-3',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 1999.00,
                'image' 		=> 'https://goo.gl/45XmN2',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bici Muntanya 1',
                'slug' 			=> 'mtb-1',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 1249.00,
                'image' 		=> 'https://goo.gl/hnpxmc',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Bici Muntanya 2',
                'slug' 			=> 'mtb-2',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 590.00,
                'image' 		=> 'https://goo.gl/tPaooM',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Bici Muntanya 3',
                'slug' 			=> 'mtb-3',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 772.00,
                'image' 		=> 'https://goo.gl/WMqBbL',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Bici Carretera 4',
                'slug' 			=> 'carretera-4',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 999.00,
                'image' 		=> 'https://goo.gl/VjKtxZ',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bici Muntanya 4',
                'slug' 			=> 'mtb-4',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 1787.00,
                'image' 		=> 'https://goo.gl/wjTNjo',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Bici JRG',
                'slug' 			=> 'bici-jrg',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 4999.00,
                'image' 		=> 'https://goo.gl/AKMuUb',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Bici COUND',
                'slug' 			=> 'bici-COUND',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 4999.00,
                'image' 		=> 'https://goo.gl/wCLkhn',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],

        );
        Product::insert($data);
    }
}
