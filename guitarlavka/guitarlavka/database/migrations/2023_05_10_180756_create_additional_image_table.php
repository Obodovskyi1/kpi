<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('additional_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->BigInteger('product_id');
        });
    

		DB::table('additional_images')->insert([
			[
				'product_id' => 1,
				'image_path' => 'src\ProductCard\additional\dscf6587.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src\ProductCard\additional\dscf6583.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src\ProductCard\additional\dscf6582.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src\ProductCard\additional\dscf6580.jpg',
			],
			[
				'product_id' => 1,
				'image_path' => 'src\ProductCard\additional\dscf6574.jpg',
			],
			
			
			
			[
				'product_id' => 2,
				'image_path' => 'src\ProductCard\additional\dscf3318.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src\ProductCard\additional\dscf3322.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src\ProductCard\additional\dscf3324.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src\ProductCard\additional\dscf3325.jpg',
			],
			[
				'product_id' => 2,
				'image_path' => 'src\ProductCard\additional\dscf3328.jpg',
			],



			[
				'product_id' => 3,
				'image_path' => 'src\ProductCard\additional\dscf8022.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src\ProductCard\additional\dscf8024.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src\ProductCard\additional\dscf8026.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src\ProductCard\additional\dscf8029.jpg',
			],
			[
				'product_id' => 3,
				'image_path' => 'src\ProductCard\additional\dscf8037.jpg',
			],



			[
				'product_id' => 4,
				'image_path' => 'src\ProductCard\additional\dscf1954-1.l8sz5.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src\ProductCard\additional\dscf1958-1.t3dvd.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src\ProductCard\additional\dscf1960-1.b1umd.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src\ProductCard\additional\dscf1972-1.qpr7q.jpg',
			],
			[
				'product_id' => 4,
				'image_path' => 'src\ProductCard\additional\dscf1980-1.vwuvf.jpg',
			],



			[
				'product_id' => 5,
				'image_path' => 'src\ProductCard\additional\dscf1193.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src\ProductCard\additional\dscf1197.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src\ProductCard\additional\dscf1219.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src\ProductCard\additional\dscf1221.jpg',
			],
			[
				'product_id' => 5,
				'image_path' => 'src\ProductCard\additional\dscf1275.jpg',
			],


			[
				'product_id' => 6,
				'image_path' => 'src\ProductCard\additional\0ef337f3-cc36-4c6f-9ef6-46f14acd087a.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src\ProductCard\additional\3cefc048-5885-45bb-af92-538788e1a246.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src\ProductCard\additional\089cfff5-d4a0-4b29-905f-354c88e4c3e1.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src\ProductCard\additional\a076fa2f-cdef-4bf5-9d43-30e924cbce98.jpg',
			],
			[
				'product_id' => 6,
				'image_path' => 'src\ProductCard\additional\d3db72a9-6c17-40bc-b03d-1810e25124db.jpg',
			],


			[
				'product_id' => 7,
				'image_path' => 'src\ProductCard\additional\1.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src\ProductCard\additional\2.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src\ProductCard\additional\2.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src\ProductCard\additional\2.jpg',
			],
			[
				'product_id' => 7,
				'image_path' => 'src\ProductCard\additional\2.jpg',
			],
		
		]);
	}	

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_images');
    }
};
