<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_characteristics', function (Blueprint $table) {
            $table->id();
			$table->text('characteristic_text');
			$table->BigInteger('product_id');
        });

		DB::table('product_characteristics')->insert([
			[
				'characteristic_text' => 'Обечайки:Червоне дерево',
				'product_id' => 1,
			],
			[
				'characteristic_text' => 'Верхня дека: Ялина',
				'product_id' => 1,
			],
			[
				'characteristic_text' => 'Задня дека: Сапеле',
				'product_id' => 1,
			],
			[
				'characteristic_text' => 'Матеріал грифу: Нато',
				'product_id' => 1,
			],
			[
				'characteristic_text' => 'Накладка: Палісандр',
				'product_id' => 1,
			],




			[
				'characteristic_text' => 'Обечайки: Махагон',
				'product_id' => 2,
			],
			[
				'characteristic_text' => 'Верхня дека: Ялина',
				'product_id' => 2,
			],
			[
				'characteristic_text' => 'Задня дека: Махагон',
				'product_id' => 2,
			],
			[
				'characteristic_text' => 'Матеріал грифу: Червоне дерево',
				'product_id' => 2,
			],
			[
				'characteristic_text' => 'Накладка: Горіх',
				'product_id' => 2,
			],






			[
				'characteristic_text' => 'Обечайки:Махагон',
				'product_id' => 3,
			],
			[
				'characteristic_text' => 'Верхня дека: Масив сітхінської ялинки',
				'product_id' => 3,
			],
			[
				'characteristic_text' => 'Задня дека: Махагон',
				'product_id' => 3,
			],
			[
				'characteristic_text' => 'Матеріал грифу: Червоне дерево',
				'product_id' => 3,
			],
			[
				'characteristic_text' => 'Накладка: Палісандр',
				'product_id' => 3,
			],





			[
				'characteristic_text' => 'Обечайки: Палісандр',
				'product_id' => 4,
			],
			[
				'characteristic_text' => 'Верхня дека: Масив сітхінської ялинки',
				'product_id' => 4,
			],
			[
				'characteristic_text' => 'Задня дека: Палісандр',
				'product_id' => 4,
			],
			[
				'characteristic_text' => 'Матеріал грифу: Махагон',
				'product_id' => 4,
			],
			[
				'characteristic_text' => 'Накладка: Ебоні',
				'product_id' => 4,
			],





			[
				'characteristic_text' => 'Обечайки: Махагон',
				'product_id' => 5,
			],
			[
				'characteristic_text' => 'Верхня дека: Ялина',
				'product_id' => 5,
			],
			[
				'characteristic_text' => 'Задня дека: Махагон',
				'product_id' => 5,
			],
			[
				'characteristic_text' => 'Матеріал грифу: Червоне дерево',
				'product_id' => 5,
			],
			[
				'characteristic_text' => 'Накладка: Палісандр',
				'product_id' => 5,
			],



			[
				'characteristic_text' => 'Обечайки:Червоне дерево',
				'product_id' => 6,
			],
			[
				'characteristic_text' => 'Верхня дека:Ялина',
				'product_id' => 6,
			],
			[
				'characteristic_text' => 'Задня дека:Червоне дерево',
				'product_id' => 6,
			],
			[
				'characteristic_text' => 'Матеріал грифу:Червоне дерево',
				'product_id' => 6,
			],
			[
				'characteristic_text' => 'Корпус:4/4',
				'product_id' => 6,
			],
			


			[
				'characteristic_text' => 'Вихідна потужність: 40Вт.',
				'product_id' => 7,
			],
			[
				'characteristic_text' => 'Динамік: 10``.',
				'product_id' => 7,
			],
			[
				'characteristic_text' => '4 канали (Clean, Overdrive, Metal, Lead). Кожен канал має 2 передустановки.',
				'product_id' => 7,
			],
			[
				'characteristic_text' => 'Регулятори посилення та рівня, 3-смуговий еквалайзер (бас – середні – високі) та основна гучність.',
				'product_id' => 7,
			],
			[
				'characteristic_text' => '18 різних ефектів (Chorus, Phaser, Tremolo, Delay та Reverb).',
				'product_id' => 7,
			],
		]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_characteristics');
    }
};
