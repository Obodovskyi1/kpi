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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_type');
            $table->float('product_price');
            $table->text('product_description');
            $table->string('product_main_img');
        });
    

		DB::table('products')->insert([
			[
				'product_name' => 'Kepma D1C Dreadnough Black',
				'product_type' => 'Акустична гітара',
				'product_price' => 15000,
				'product_description' => 'Коли вибираєш перший інструмент, дуже важлива зручність гри. Якщо навчанню заважають суто технічні несправності інструменту, це може відбити все бажання вчитися далі. Але Kepma D1C допомагає вирішити ці проблеми.',
				'product_main_img' => 'src/ProductCard/kepmad1c.jpg',
			],
			[
				'product_name' => 'Kepma EDCE Natural',
				'product_type' => 'Электроакустична гітара ',
				'product_price' => 22000,
				'product_description' => 'Незважаючи на невисоку вартість, гітара виявляє себе чудовим звуком та строєм. Прекрасно підійде для тих, хто робить перші кроки в освоєнні інструменту, але може задовольнити потреби і серйознішого музиканта.',
				'product_main_img' => 'src/ProductCard/kepmaedce.jpg',
			],
			[
				'product_name' => 'Kepma F1-OM (Cherryburst)',
				'product_type' => 'Акустична гітара ',
				'product_price' => 64800,
				'product_description' => 'Гітара Kepma F1-OM починає лінійку топових інструментів. У неї зовсім невеликий корпус – типу Orchestra. Але всередині живе великий та широкий звук. Все завдяки матеріалам найвищої якості. Верхня дека – з масиву сітхінської ялини, нижня дека та обичайки – червоне дерево.',
				'product_main_img' => 'src/ProductCard/kepmaf1om.jpg',
			],
			[
				'product_name' => 'Kepma G1-GA',
				'product_type' => 'Акустична гітара ',
				'product_price' => 113600,
				'product_description' => 'Kepma G1-GA – ще один інструмент з преміальної лінійки G1. Усі інструменти цієї серії виготовляються із високоякісних порід деревини із застосуванням сучасних технологій.',
				'product_main_img' => 'src/ProductCard/kepmag1ga.jpg',
			],
			[
				'product_name' => 'Kepma EAC Sunburst',
				'product_type' => 'Акустична гітара ',
				'product_price' => 17000,
				'product_description' => 'Головна перевага гітар Kepma EAC - їх корпус з ламінату звучить так само рівно, як масив.',
				'product_main_img' => 'src/ProductCard/kepmaeac.jpg',
			],
			[
				'product_name' => 'Kepma D1C Natural Gloss',
				'product_type' => 'Акустична гітара',
				'product_price' => 15000,
				'product_description' => 'Гітара яка дивує своїм звуком та якістю, відмінно лежить у руках. Верхня дека з ялини, нижня та обичайка з червоного дерева, класичний набір, який робить звук яскравим та об`ємним. Гітара відмінно підійде як для гітаристів-початківців, так і для досвідчених музикантів.',
				'product_main_img' => 'src/ProductCard/kepmad1cnatural.jpg',
			],
			[
				'product_name' => 'NUX Mighty',
				'product_type' => 'Комбоусилитель',
				'product_price' => 18500,
				'product_description' => 'Mighty-40BT Цифровий комбопідсилювач, 40Вт, Nux Mighty 40 BT – повністю цифровий комбопідсилювач із потужністю 40Вт. Оснащений різноманітними ефектами, але дозволяє легко перемикатися між різними стилями гри та музичними жанрами.',
				'product_main_img' => 'src/ProductCard/nuxmighty.jpg',
			],
		]);
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
