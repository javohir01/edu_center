<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['id' => '8','name_uz' => 'Qoraqalpog‘iston Respublikasi','name_ru' => 'Республика Каракалпакстан','name_en' => 'Karakalpakstan Republic','name_cyrl' => 'Қорақалпоғистон Республикаси','c_order' => '1','soato' => '1735', 'ns10_code' => 35],
            ['id' => '9','name_uz' => 'Buxoro viloyati','name_ru' => 'Бухарская область','name_en' => 'Bukhara Region','name_cyrl' => 'Бухоро вилояти','c_order' => '3','soato' => '1706', 'ns10_code' => 6],
            ['id' => '10','name_uz' => 'Samarqand viloyati','name_ru' => 'Самаркандская область','name_en' => 'Samarkand Region','name_cyrl' => 'Самарқанд вилояти','c_order' => '8','soato' => '1718', 'ns10_code' => 18],
            ['id' => '11','name_uz' => 'Navoiy viloyati','name_ru' => 'Навоийская область','name_en' => 'Navoiy Region','name_cyrl' => 'Навоий вилояти','c_order' => '6','soato' => '1712', 'ns10_code' => 12],
            ['id' => '12','name_uz' => 'Andijon viloyati','name_ru' => 'Андижанская область','name_en' => 'Andijan Region','name_cyrl' => 'Андижон вилояти','c_order' => '2','soato' => '1703', 'ns10_code' => 3],
            ['id' => '13','name_uz' => 'Farg‘ona viloyati','name_ru' => 'Ферганская область','name_en' => 'Fergana Region','name_cyrl' => 'Фарғона вилояти','c_order' => '12','soato' => '1730', 'ns10_code' => 30],
            ['id' => '14','name_uz' => 'Surxondaryo viloyati','name_ru' => 'Сурхандарьинская область','name_en' => 'Surkhandarya Region','name_cyrl' => 'Сурхондарё вилояти','c_order' => '10','soato' => '1722', 'ns10_code' => 22],
            ['id' => '15','name_uz' => 'Sirdaryo viloyati','name_ru' => 'Сырдарьинская область','name_en' => 'Syrdarya Region','name_cyrl' => 'Сирдарё вилояти','c_order' => '9','soato' => '1724', 'ns10_code' => 24],
            ['id' => '16','name_uz' => 'Xorazm viloyati','name_ru' => 'Хорезмская область','name_en' => 'Khorezm Region','name_cyrl' => 'Хоразм вилояти','c_order' => '13','soato' => '1733', 'ns10_code' => 33],
            ['id' => '17','name_uz' => 'Toshkent viloyati','name_ru' => 'Ташкентская область','name_en' => 'Tashkent Region','name_cyrl' => 'Тошкент вилояти','c_order' => '11','soato' => '1727', 'ns10_code' => 27],
            ['id' => '18','name_uz' => 'Qashqadaryo viloyati','name_ru' => 'Кашкадарьинская область','name_en' => 'Kashkadarya Region','name_cyrl' => 'Қашқадарё вилояти','c_order' => '5','soato' => '1710', 'ns10_code' => 10],
            ['id' => '19','name_uz' => 'Jizzax viloyati','name_ru' => 'Джизакская область','name_en' => 'Jizzakh Region','name_cyrl' => 'Жиззах вилояти','c_order' => '4','soato' => '1708', 'ns10_code' => 8],
            ['id' => '21','name_uz' => 'Namangan viloyati','name_ru' => 'Наманганская область','name_en' => 'Namangan Region','name_cyrl' => 'Наманган вилояти','c_order' => '7','soato' => '1714', 'ns10_code' => 14],
            ['id' => '22','name_uz' => 'Toshkent shahri','name_ru' => 'город Ташкент','name_en' => 'Tashkent City','name_cyrl' => 'Тошкент шаҳри','c_order' => '14','soato' => '1726', 'ns10_code' => 26]
        ];
        DB::table('regions')->insert($regions);
    }
}