<?php

use Illuminate\Database\Seeder;

class checkPointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('check_points')->insert([
            'id'=>1,
            'check_points_contents' => '耳のかゆみ',
            'check_types_id' => '1',
            'treatment_contents' => '耳をかゆがっている場合は耳にトラブルを抱えている可能性が非常に高いので、すぐにかかりつけの病院で相談するようにしてください。',
        ]
        );

        DB::table('check_points')->insert([
            'id'=>2,
            'check_points_contents' => '耳の汚れ',
            'check_types_id' => '1',
            'treatment_contents' => '少しの耳垢程度ならば、洗浄液を使って犬の耳をキレイにして観察しましょう。洗浄すれば菌の繁殖を押さえて、外耳炎の予防になります。
	                                 しかし黒や黄色など、耳垢が多い場合はすぐに病院で診てもらいましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>3,
            'check_points_contents' => '耳の臭い',
            'check_types_id' => '1',
            'treatment_contents' => '耳の中は蒸れることがあるため、犬独特の臭いがすることがあります。この場合洗浄液を使って犬の耳をキレイにしましょう。
                                     しかし、耳が臭う以外にかゆがっていたり、頭を振ったりする素振りがあると、耳にトラブルを抱えている可能性が非常に高いので、すぐにかかりつけの病院で相談するようにしてください。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>4,
            'check_points_contents' => '目やに・涙が多い',
            'check_types_id' => '2',
            'treatment_contents' => '健康な状態でも、ほこりやまつげなどが目に入って一時的に涙や、目やにが多く出る場合がありますが、
	                                 その時は目薬（犬猫用目薬）で洗い流して、丁寧に涙をふいて様子をみてください。
	                                 しかし、涙や、目やにが多く出ている他に目の充血、目を気にしてこするといった症状がある場合は病院に行きましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>5,
            'check_points_contents' => '目の濁り',
            'check_types_id' => '2',
            'treatment_contents' => '目が濁っていたりする状態は、目になんらかの異常があり、視力にかかわる病気の可能性があります。獣医師の診察を受けてください。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>6,
            'check_points_contents' => '目の充血',
            'check_types_id' => '2',
            'treatment_contents' => ' 目にゴミや埃が入ったときや目をこすったことで、充血することがあります。こうしたものは一時的ですぐに血は引いていくでしょう。
                                     しかし、涙が多い、目やにが出ている、まばたきが多い、まぶしそうにしているといったときやなかなか治らないといったようであれば病気の可能性があるので、獣医師に診てもらいましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>7,
            'check_points_contents' => '目が見えていない',
            'check_types_id' => '2',
            'treatment_contents' => '視力にかかわる病気の可能性があります。早めに獣医師の診察を受けてくださいい。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>8,
            'check_points_contents' => '歯茎の色',
            'check_types_id' => '3',
            'treatment_contents' => '歯茎が赤い場合は、歯肉炎、口内炎や腫瘍なども考えられるので、早めに動物病院で診てもらいましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>9,
            'check_points_contents' => '歯の汚れ',
            'check_types_id' => '3',
            'treatment_contents' => '口から少しニオイがする、歯垢がついている程度の状態なら、歯磨きを行うことで、口の中の状態を健康に保ち、歯周病を防ぐことができます。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>10,
            'check_points_contents' => '口臭',
            'check_types_id' => '3',
            'treatment_contents' => 'しっかりと歯石がついていたり、不快なニオイがある場合は、歯周病になっている可能性があります。
                                     歯石などがないのに、口から異臭がする場合は、歯周病以外の内蔵などの病気が考えられるので、獣医師に診てもらいましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>11,
            'check_points_contents' => 'よだれが垂れる',
            'check_types_id' => '3',
            'treatment_contents' => '口の中に痛みがある場合は、食べ方がおかしくなったり、よだれを垂らすという症状が出やすくなります。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>12,
            'check_points_contents' => '鼻水',
            'check_types_id' => '4',
            'treatment_contents' => '異物が鼻に入ったり寒かったりすることで鼻水が出ることがあります。このような場合透明な鼻水がでますがあまり心配しなくても良いでしょう。
                                     しかし黄色くネバつきのある鼻水、血液が混じった茶色い鼻水、空気が混じった泡のような鼻水が出ていたり、くしゃみや熱などの併発している症状によっては病気が原因である可能性もあります。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>13,
            'check_points_contents' => 'くしゃみ',
            'check_types_id' => '4',
            'treatment_contents' => 'くしゃみが単発性のもので、その後元気に過ごし食欲もあるのなら、そのまま様子を観察しましょう。
                                     しかし、鼻水が止まらない、発熱している、食欲がないなど、くしゃみ以外の症状を併発している場合や、くしゃみを一日の中で何度も繰り返す場合は要注意です。',
        ]
        );
        

        DB::table('check_points')->insert([
            'id'=>14,
            'check_points_contents' => '身体のかゆみ',
            'check_types_id' => '5',
            'treatment_contents' => '犬が掻く回数や時間がいつもより多少あるくらいなら、問題ないでしょう。
                                    ですが、あまりに頻度が多く、しつこく掻いていることが続くようであれば、獣医師に相談することが重要です。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>15,
            'check_points_contents' => '皮膚の色',
            'check_types_id' => '5',
            'treatment_contents' => '皮膚の色が赤や黒、黄色などに変わっていたら要注意です。重い病気の場合もあるので、早急に対処しなければなりません。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>16,
            'check_points_contents' => 'ふけ・脱毛',
            'check_types_id' => '5',
            'treatment_contents' => '犬の皮膚が健康な状態であっても、ターンオーバーによって多少のふけは出ます。
                                    乾燥している場合や肌に合っていないシャンプー、ストレスが原因で出ることがあります。
                                    乾燥肌の場合は、シャンプーをする間隔を見直して皮脂を取り除きすぎないようにしたり、保湿剤でケアをしてあげたりするのがおすすめです。
                                    また、ストレスを溜めないように犬の本質を尊重した環境作りも大切です。
                                    しかし生活習慣や環境を見直しても改善が見られなかったり、ふけの量が増えて目立ってきた場合は、皮膚に何らかのトラブルが生じている可能性もありますので一度動物病院で診てもらいましょう。
                                    
                                    換毛期（春と秋）でないのに抜け毛がある状態や脱毛により地肌が目立つようになる場合は、さまざまな病気のサインであることもあります。一度動物病院で診てもらいましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>17,
            'check_points_contents' => '毛のつや',
            'check_types_id' => '5',
            'treatment_contents' => '毛艶や毛並みが悪くなっているという場合には栄養状態の偏りや老化、ブラッシングやシャンプーなどの手入れが不足していたりする可能性があります。
                                    ドッグフードの見直しやブラッシングをしましょう。食事やブラッシングなどで手をつくしても改善が見られない場合は、何らかの病気にかかっている可能性も考えられます。',
        ]
        );
        

        DB::table('check_points')->insert([
            'id'=>18,
            'check_points_contents' => '歩き方',
            'check_types_id' => '6',
            'treatment_contents' => 'まっすぐ歩けていなかったり、スキップをしているような歩き方、かばうような歩き方をしていたりするときは要注意。すぐにかかりつけの病院で相談するようにしてください。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>19,
            'check_points_contents' => '肉球をよく舐める',
            'check_types_id' => '6',
            'treatment_contents' => '肉球の間を舐めるしぐさが増えたら、肉球や指先や指の間に怪我をしている場合がありますので確認してみましょう。
            怪我をしている場合は病院で診てもらいましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>20,
            'check_points_contents' => '爪の伸び',
            'check_types_id' => '6',
            'treatment_contents' => '爪が伸びている場合は切りましょう。
            どこまで切っていいのかわからないなど不安な時はトリマーさんに任せるのが安心です。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>21,
            'check_points_contents' => 'お腹のいぼ・ほくろ',
            'check_types_id' => '7',
            'treatment_contents' => '犬のいぼ・ほくろには、がんなどの病気の可能性があり良性と悪性が存在します。早めに獣医師に診てもらうと安心です。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>22,
            'check_points_contents' => 'お腹のしこり',
            'check_types_id' => '7',
            'treatment_contents' => 'お腹にしこりが見つかったときはがんなどの病気の可能性があるためすぐに動物病院を受診する必要があります。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>23,
            'check_points_contents' => '下痢・便秘',
            'check_types_id' => '8',
            'treatment_contents' => '少しずつでも排便するなら、一過性のものかもしれないので観察を。便秘が続く場合は、病気の可能性もあります。
            症状が下痢だけで、ほかの状態はいつもと変わらない場合は、しばらく様子を見てもいいでしょう。しかし、2日以上症状が続くようであれば病院に行きましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>24,
            'check_points_contents' => '排便のしぶり',
            'check_types_id' => '8',
            'treatment_contents' => '便意があり、排便のスタイルをするのに、排せつしない「しぶり」状態は、便秘だけでなく、排尿障害の可能性もあります。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>25,
            'check_points_contents' => 'おしっこの色',
            'check_types_id' => '8',
            'treatment_contents' => '犬のおしっこの正常な色は、個々の犬によって多少の個体差はあるものの、澄んだ薄い黄色です。
	濃い黄色・オレンジ色、赤色の血尿の場合は病気の可能性かあるため、病院での早めの診察が望まれます。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>26,
            'check_points_contents' => 'おしっこの回数',
            'check_types_id' => '8',
            'treatment_contents' => '排尿回数には固体差がありますが、飲水量や尿量が増えてきたという印象がある場合や、1日尿が出ていない場合、オシッコをするポーズをするのに出にくくなっていることに気がついたら、早めの受診が肝心です。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>27,
            'check_points_contents' => '嘔吐',
            'check_types_id' => '8',
            'treatment_contents' => '犬は比較的吐くことの多い動物です。一度だけ吐いた後、いつもと同様に元気があり、食欲もあるようなら、それほど問題はないと思われます。
	                                しかし、継続するようであれば、動物病院での診察が不可欠です。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>28,
            'check_points_contents' => '元気に動けない',
            'check_types_id' => '9',
            'treatment_contents' => '好きなはずの散歩中に歩くのをやめてしまったり、誘っても運動を嫌がったり、すぐにバテてしまう場合は、循環器や呼吸器の病気かもしれません。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>29,
            'check_points_contents' => 'ご飯を食べない',
            'check_types_id' => '9',
            'treatment_contents' => '食欲は健康のバロメーター。食事を全くしない時は、なんらかの病気にかかっているかもしれません。ただし、犬の性格によっては、飼育環境の変化など、ストレスによって食欲が減退する場合もあります。
	元気にしていて、下痢や嘔吐、咳など、他の症状がみられない成犬の場合は、１～２日様子を観察しましょう。',
        ]
        );
        
        DB::table('check_points')->insert([
            'id'=>30,
            'check_points_contents' => 'ありません',
            'check_types_id' => '10',
            'treatment_contents' => 'これからも健康な状態を維持できるように日頃からのケアをしっかりしていきましょう。',
        ]
        );
        

    }
}
