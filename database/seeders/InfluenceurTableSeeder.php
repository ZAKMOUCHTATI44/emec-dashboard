<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfluenceurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $influencers = [
            [
                'fullName' => 'Wiam ZAOUI',
                'instagram_link' => 'https://www.instagram.com/wiamzaouiofficiel?hl=fr',
                'photo' => '/influenceurs/1/Wiam Zaoui.jpg',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Loubna LAHLOU',
                'instagram_link' => 'https://www.instagram.com/louloulahlou/',
                'photo' => '/influenceurs/1/Loubna Lahlou.jpg',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Abla ZEMMAMA',
                'instagram_link' => 'https://www.instagram.com/ablazemmama/?hl=fr',
                'photo' => '/influenceurs/1/Abla Zemmama.jpg',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Chaimaa BERRAZ',
                'instagram_link' => 'https://www.instagram.com/chaimaaberraz/?hl=fr',
                'photo' => '/influenceurs/1/Chaimaa Berraz.jpg',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Safae HBIRKOU',
                'instagram_link' => 'https://www.instagram.com/hbirkousafae_officiel/',
                'photo' => '/influenceurs/1/Safae Hbirkou.jpg',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Fatine ZAIMI',
                'instagram_link' => 'https://www.instagram.com/fatine_zaimi/?hl=fr',
                'photo' => '/influenceurs/2/Fatine Zaimi.jpg',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Rime AJAKKAF',
                'instagram_link' => 'https://www.instagram.com/moroccan.mirage/?hl=fr',
                'photo' => '/influenceurs/2/AJAKKAF RIME.jpg',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Houda HAYANI',
                'instagram_link' => 'https://www.instagram.com/houdahayaniamine/?hl=fr',
                'photo' => '/influenceurs/2/𝑯𝒐𝒖𝒅𝒂 𝑯𝑨𝒀𝑨𝑵𝑰 𝑨𝑴𝑰𝑵𝑬.jpg',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Mounia SENHAJI',
                'instagram_link' => 'https://www.instagram.com/mouniasenhaji/',
                'photo' => '/influenceurs/2/Mounia Senhaji.jpg',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Rita AKESBY',
                'instagram_link' => 'https://www.instagram.com/rita_trendy/?hl=fr',
                'photo' => '/influenceurs/2/Rita Akesbi.jpg',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Loubna NABIH',
                'instagram_link' => 'https://www.instagram.com/loubinnette.1/?hl=fr',
                'photo' => '/influenceurs/3/Loubna nabih.jpg',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Chaimaa GHAZI',
                'instagram_link' => 'https://www.instagram.com/moroccan.mirage/?hl=fr',
                'photo' => '/influenceurs/3/Chaimae Ghazi🪬.jpg',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Aziza ESSAID',
                'instagram_link' => 'https://www.instagram.com/rawaa_beauty/?hl=fr',
                'photo' => '/influenceurs/3/Aziza ESSAID.jpg',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Rabab BOULKHLAKHEL',
                'instagram_link' => 'https://www.instagram.com/bkl.rabab/',
                'photo' => '/influenceurs/3/Rabab BOULKHLAKHEL.jpg',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Laila BOULKADDAT',
                'instagram_link' => 'https://www.instagram.com/leilaboulkaddat/',
                'photo' => '/influenceurs/3/Laila Boulkaddat.jpg',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Douja BELKHAYATE',
                'instagram_link' => 'https://www.instagram.com/doujablk/?hl=fr',
                'photo' => '/influenceurs/4/Douja Belkhayat.jpg',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Houda HAYANI',
                'instagram_link' => 'https://www.instagram.com/houdahayaniamine/?hl=fr',
                'photo' => '/influenceurs/4/𝑯𝒐𝒖𝒅𝒂 𝑯𝑨𝒀𝑨𝑵𝑰 𝑨𝑴𝑰𝑵𝑬.jpg',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Meriem HAMMOUD',
                'instagram_link' => 'https://www.instagram.com/glowbymimi_/',
                'photo' => '/influenceurs/4/Meriem HAMMOUD.jpg',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Ihssane RIHANI',
                'instagram_link' => 'https://www.instagram.com/ihsun.daily/',
                'photo' => '/influenceurs/4/Ihssane RIHANI.jpg',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Maria LAZRAK',
                'instagram_link' => 'https://www.instagram.com/maria_lazrak/',
                'photo' => '/influenceurs/4/Maria LAZRAK.jpg',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Maria LAZRAK',
                'instagram_link' => 'https://www.instagram.com/maria_lazrak/',
                'photo' => '/influenceurs/4/Maria LAZRAK.jpg',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Yassine AMOR',
                'instagram_link' => 'https://www.instagram.com/mambahfit/',
                'photo' => '/influenceurs/5/Yassine Amor.jpg',
                'category_id' => 5,
            ],
            [
                'fullName' => 'Brahim MOULAY BBI',
                'instagram_link' => 'https://www.instagram.com/brahimlogia/?hl=fr',
                'photo' => '/influenceurs/5/Ibrahim Moulay Bbi.jpg',
                'category_id' => 5,
            ],
            [
                'fullName' => 'Ouadie BELMOEITI',
                'instagram_link' => 'https://www.instagram.com/les_badadistes/',
                'photo' => '/influenceurs/5/Belmoeiti Ouadie.jpg',
                'category_id' => 5,
            ],
            [
                'fullName' => 'Sofia BELKAMEL & Amine OUIZID',
                'instagram_link' => 'https://www.instagram.com/sofiab_hls/',
                'photo' => '/influenceurs/5/Amine & Sofia HLS.jpg',
                'category_id' => 5,
            ],
            [
                'fullName' => 'Soufiane OTTMANI',
                'instagram_link' => 'https://www.instagram.com/soufiane.ottmani/',
                'photo' => '/influenceurs/5/Soufiane OTTMANI.jpg',
                'category_id' => 5,
            ],
            [
                'fullName' => 'Imane ADINAR',
                'instagram_link' => 'https://www.instagram.com/imane_adinar/?hl=fr',
                'photo' => '/influenceurs/6/IMANE AIT LHADJ.jpg',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Badr RHAZI',
                'instagram_link' => 'https://www.instagram.com/badr_masterchef/?hl=fr',
                'photo' => '/influenceurs/6/Badr RHAZI.jpg',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Halima FILALI',
                'instagram_link' => 'https://www.instagram.com/cuisine_halima__filali/',
                'photo' => '/influenceurs/6/Halima Choujaa (Filali).jpg',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Aymane GHAZAOUI',
                'instagram_link' => 'https://www.instagram.com/9ossos/',
                'photo' => '/influenceurs/6/Aymane GHAZAOUI.jpg',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Houda SEDKI',
                'instagram_link' => 'https://www.instagram.com/sedkihouda_officiel/',
                'photo' => '/influenceurs/6/Sedki Houda.jpg',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Houda SEDKI',
                'instagram_link' => 'https://www.instagram.com/sedkihouda_officiel/',
                'photo' => '/influenceurs/6/Sedki Houda.jpg',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Khaoula ELIDRISSI ESSEBTY',
                'instagram_link' => 'https://www.instagram.com/misstech111/?hl=fr',
                'photo' => '/influenceurs/7/Khawla IDRISSI ESSEBTEY.jpg',
                'category_id' => 7,
            ],
            [
                'fullName' => '@elmehdi-tech',
                'instagram_link' => 'https://www.instagram.com/elmehdi_tech/?hl=fr',
                'photo' => '/influenceurs/7/ELMehdi_Tech.jpg',
                'category_id' => 7,
            ],
            [
                'fullName' => 'Wael SALIMI',
                'instagram_link' => 'https://www.instagram.com/waelsalimi/?hl=fr',
                'photo' => '/influenceurs/7/Wael Salimi.jpg',
                'category_id' => 7,
            ],
            [
                'fullName' => 'Hamza LOTFI',
                'instagram_link' => 'https://www.instagram.com/techbedarija_official/?hl=fr',
                'photo' => '/influenceurs/7/HAMZA LOTFI.jpg',
                'category_id' => 7,
            ],
            [
                'fullName' => 'Kamal KHAIDOUM',
                'instagram_link' => 'https://www.instagram.com/allo_kamal/',
                'photo' => '/influenceurs/7/Kamal Khaidoum.jpg',
                'category_id' => 7,
            ],
            [
                'fullName' => 'Abdelillah HABBAT',
                'instagram_link' => 'https://www.instagram.com/habbatabdelillah/?hl=fr',
                'photo' => '/influenceurs/8/Abdelillah Habbat Idrissi.jpg',
                'category_id' => 8,
            ],
            [
                'fullName' => 'Hanane KHAYATI',
                'instagram_link' => 'https://www.instagram.com/allo_kamal/',
                'photo' => '/influenceurs/8/Hanane KHAYATI.jpg',
                'category_id' => 8,
            ],
            [
                'fullName' => 'Hicham MASRAR',
                'instagram_link' => 'https://www.instagram.com/hichammasrar1/?hl=fr',
                'photo' => '/influenceurs/8/Hicham Masrar.jpg',
                'category_id' => 8,
            ],
            [
                'fullName' => 'Yassine BOUZAKHTI',
                'instagram_link' => 'https://www.instagram.com/yas_coach/',
                'photo' => '/influenceurs/8/Yassine Bouzakhti.jpg',
                'category_id' => 8,
            ],
            [
                'fullName' => 'Yassine BOUZAKHTI',
                'instagram_link' => 'https://www.instagram.com/yas_coach/',
                'photo' => '/influenceurs/8/Yassine Bouzakhti.jpg',
                'category_id' => 8,
            ],
            [
                'fullName' => 'Adam HaMRITA',
                'instagram_link' => 'https://www.instagram.com/hamritox/?hl=fr',
                'photo' => '/influenceurs/9/Adam HaMRITA.jpg',
                'category_id' => 9,
            ],
            [
                'fullName' => 'Aymane LAZAMI',
                'instagram_link' => 'https://www.instagram.com/aymaneelazami/?hl=fr',
                'photo' => '/influenceurs/9/Aymane El Azami.jpg',
                'category_id' => 9,
            ],
            [
                'fullName' => 'Youssef CHARIF',
                'instagram_link' => 'https://www.instagram.com/xcharifx/?hl=fr',
                'photo' => '/influenceurs/9/Youssef CHARIF.jpg',
                'category_id' => 9,
            ],
            [
                'fullName' => 'Mounia AMALLAL',
                'instagram_link' => 'https://www.instagram.com/monia_gaming.1/?hl=fr',
                'photo' => '/influenceurs/9/Mounia Amallal.jpg',
                'category_id' => 9,
            ],
            [
                'fullName' => 'Reda BOUYA',
                'instagram_link' => 'https://www.instagram.com/redline.jpeg/?hl=fr',
                'photo' => '/influenceurs/9/Reda Bouya.jpg',
                'category_id' => 9,
            ],
            [
                'fullName' => 'Jalal AAOUITA',
                'instagram_link' => 'https://www.instagram.com/jalalaaouita/?hl=fr',
                'photo' => '/influenceurs/10/Jalal Aaouita.jpg',
                'category_id' => 10,
            ],
            [
                'fullName' => 'Ihssane BENALLUCH',
                'instagram_link' => 'https://www.instagram.com/ihssanebenalluch/?hl=fr',
                'photo' => '/influenceurs/10/Ihssane Benalluch.jpg',
                'category_id' => 10,
            ],
            [
                'fullName' => 'Leila CHEMAM',
                'instagram_link' => 'https://www.instagram.com/leilachemam/?hl=fr',
                'photo' => '/influenceurs/10/Leila Chemam.jpg',
                'category_id' => 10,
            ],
            [
                'fullName' => 'Ismail HAMMICHE',
                'instagram_link' => 'https://www.instagram.com/smail_hammiche/?hl=fr',
                'photo' => '/influenceurs/10/smail hammiche.jpg',
                'category_id' => 10,
            ],
            [
                'fullName' => 'Saad ABID',
                'instagram_link' => 'https://www.instagram.com/saadabidofficiel/',
                'photo' => '/influenceurs/10/Saad Abid.jpg',
                'category_id' => 10,
            ],
            [
                'fullName' => 'Ilham ZIDOUHIA',
                'instagram_link' => 'https://www.instagram.com/ilhamzidouhia/',
                'photo' => '/influenceurs/11/ILham Zidouhia.jpg',
                'category_id' => 11,
            ],
            [
                'fullName' => 'Oussama TOUIL',
                'instagram_link' => 'https://www.instagram.com/ousama_touil/',
                'photo' => '/influenceurs/11/Oussama TOUIL.jpg',
                'category_id' => 11,
            ],
            [
                'fullName' => 'Mounir ZAIRIG',
                'instagram_link' => 'https://www.instagram.com/mounirzairig/',
                'photo' => '/influenceurs/11/Mounir Zairig.jpg',
                'category_id' => 11,
            ],
            [
                'fullName' => 'Manal BERNOUSSI',
                'instagram_link' => 'https://www.instagram.com/manalbernoussi/',
                'photo' => '/influenceurs/11/Manal Bernoussi.jpg',
                'category_id' => 11,
            ],
            [
                'fullName' => 'Ghizlane MATHIAU',
                'instagram_link' => 'https://www.instagram.com/ghizlanemathiau/',
                'photo' => '/influenceurs/11/Ghizlane Mathiau.jpg',
                'category_id' => 11,
            ],










        ];
        DB::table('influenceurs')->insert($influencers);

    }
}
