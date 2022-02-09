<?php

use Illuminate\Database\Seeder;

class checkTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('check_types')->insert([
            'id'=>1,
            'check_types_name' => '耳',
        ]
        );
        
        DB::table('check_types')->insert([
            'id'=>2,
            'check_types_name' => '目',
        ]
        );
        
        DB::table('check_types')->insert([
            'id'=>3,
            'check_types_name' => '口',
        ]
        );

        DB::table('check_types')->insert([
            'id'=>4,
            'check_types_name' => '鼻',
        ]
        );

        DB::table('check_types')->insert([
            'id'=>5,
            'check_types_name' => '皮膚・毛',
        ]
        );

        DB::table('check_types')->insert([
            'id'=>6,
            'check_types_name' => '足・肉球',
        ]
        );

        DB::table('check_types')->insert([
            'id'=>7,
            'check_types_name' => 'お腹',
        ]
        );

        DB::table('check_types')->insert([
            'id'=>8,
            'check_types_name' => '排せつ',
        ]
        );

        DB::table('check_types')->insert([
            'id'=>9,
            'check_types_name' => '全体',
        ]
        );
        
        DB::table('check_types')->insert([
            'id'=>10,
            'check_types_name' => '全て当てはまらない',
        ]
        );




    }
}
