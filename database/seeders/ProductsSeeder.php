<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Triangle bra',
                'slug' => 'triangle_bra',
                'description' => 'This bra is a hero top designed to be fully functional without compromising on style. She is a deceptively supportive
                triangle top complimented by a unique racerback shape.',
                'price' => 55 ,
                'stock' => 50 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'High Neck bra',
                'slug' => 'high_neck_bra',
                'description' => 'Square up in style. This crop blends gingham sweetness with high-performance grit. Featuring a high halter neck and fuller
                coverage, it keeps the goods secure through every invert. The snug fit and racer back frame your hard-earned shoulders while ensuring
                zero slip-ups. Sweet pattern, serious support.',
                'price' => 42 ,
                'stock' => 45 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'High leg pole short',
                'slug' => 'high_leg_pole_short',
                'description' => 'High leg, cheeky cut shorts with cute hip garter detailing - these bottoms are destined to become your favourite little black
                shorts!',
                'price' => 49 ,
                'stock' => 10 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'High waisted pole short',
                'slug' => 'high_waisted_pole_short',
                'description' => 'These buttery soft shorts put you in control. Cinch the drawstrings for a cheeky
                high-leg cut or keep them relaxed for fuller coverage. Finished with a secure thick waistband and the signature Dragonfly embroidery,
                they’re ready for every move you make.',
                'price' => 40 ,
                'stock' => 3 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Long sleeved tops',
                'slug' => 'long sleeved-tops',
                'description' => 'The Omega top is everything we wanted and more! Featuring long sleeves with cut outs at all the important contact points,
                you can feel comfortable and supported in this bold new pole-drobe essential.',
                'price' => 69 ,
                'stock' => 25 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Hoodie',
                'slug' => 'hoodie',
                'description' => 'Your post-training comfort just got a serious upgrade. This oversized hoodie is your new go-to for cosy vibes,
                with a relaxed fit, a deep hood, and two side pockets for your essentials. Finished with an inverted Poledancer, it’s an effortless
                statement piece for studio commutes and rest days.',
                'price' => 44 ,
                'stock' => 21 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Grippy leggings',
                'slug' => 'grippy_leggings',
                'description' => 'We recommend the Ultra Grip series for pole dancers looking for extra grip, for dancers looking for leggings
                that mimic the grip you get from your own skin, still allowing you to transition and flow around the pole without getting stuck-
                we recommend the Original series. ',
                'price' => 69 ,
                'stock' => 11 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'Full length leggings',
                'slug' => 'full_length_leggings',
                'description' => 'These are really high waisted leggings that go all the way up to above your belly button and stay in place even during an intensive workout.',
                'price' => 43 ,
                'stock' => 10 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Leg warmer',
                'slug' => 'leg_warmer',
                'description' => 'These 89cm ribbed leg warmers are your new best friend for warm-ups and training. Featuring a stretchy fit and handy stirrups,
                they retain heat to keep muscles happy between tricks. The perfect staple for keeping things toasty.
                Plus, they add that extra pop to level up any pole look.',
                'price' => 8 ,
                'stock' => 60 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'Back warmer',
                'slug' => 'back_warmer',
                'description' => 'Keep your back warm and safe before, during and after exercise. Back warmer is perfect while waiting for a performance,
                for warm-up and stretching when you need to have your back warm. Two layers for maximum comfort.',
                'price' => 20 ,
                'stock' => 35 ,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ]);
    }
}
