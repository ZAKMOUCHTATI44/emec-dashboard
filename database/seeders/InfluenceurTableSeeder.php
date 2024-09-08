<?php

namespace Database\Seeders;

use App\Models\Influenceur;
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
                'file' => '/influenceurs/1/Wiam ZAOUI.pdf',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Loubna LAHLOU',
                'instagram_link' => 'https://www.instagram.com/louloulahlou/',
                'photo' => '/influenceurs/1/Loubna Lahlou.jpg',
                'file' => '/influenceurs/1/Loubna LAHLOU.pdf',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Abla ZEMMAMA',
                'instagram_link' => 'https://www.instagram.com/ablazemmama/?hl=fr',
                'photo' => '/influenceurs/1/Abla Zemmama.jpg',
                'file' => '/influenceurs/1/Abla Zemmama.pdf',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Chaimaa BERRAZ',
                'instagram_link' => 'https://www.instagram.com/chaimaaberraz/?hl=fr',
                'photo' => '/influenceurs/1/Chaimaa Berraz.jpg',
                'file' => '/influenceurs/1/Chaimaa Berraz.pdf',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Safae HBIRKOU',
                'instagram_link' => 'https://www.instagram.com/hbirkousafae_officiel/',
                'photo' => '/influenceurs/1/Safae Hbirkou.jpg',
                'file' => '/influenceurs/1/Safae HBIRKOU.pdf',
                'category_id' => 1,
            ],
            [
                'fullName' => 'Fatine ZAIMI',
                'instagram_link' => 'https://www.instagram.com/fatine_zaimi/?hl=fr',
                'photo' => '/influenceurs/2/Fatine Zaimi.jpg',
                'file' => '/influenceurs/2/Fatine Zaïmi.pdf',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Rime AJAKKAF',
                'instagram_link' => 'https://www.instagram.com/moroccan.mirage/?hl=fr',
                'photo' => '/influenceurs/2/AJAKKAF RIME.jpg',
                'file' => '/influenceurs/2/AJAKKAF RIME.pdf',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Houda HAYANI',
                'instagram_link' => 'https://www.instagram.com/houdahayaniamine/?hl=fr',
                'photo' => '/influenceurs/2/𝑯𝒐𝒖𝒅𝒂 𝑯𝑨𝒀𝑨𝑵𝑰 𝑨𝑴𝑰𝑵𝑬.jpg',
                'file' => '/influenceurs/2/Houda Hayani Amine.pdf',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Mounia SENHAJI',
                'instagram_link' => 'https://www.instagram.com/mouniasenhaji/',
                'photo' => '/influenceurs/2/Mounia Senhaji.jpg',
                'file' => '/influenceurs/2/Mounia Senhaji.pdf',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Rita AKESBY',
                'instagram_link' => 'https://www.instagram.com/rita_trendy/?hl=fr',
                'photo' => '/influenceurs/2/Rita Akesbi.jpg',
                'file' => '/influenceurs/2/Mounia Senhaji.pdf',
                'category_id' => 2,
            ],
            [
                'fullName' => 'Loubna NABIH',
                'instagram_link' => 'https://www.instagram.com/loubinnette.1/?hl=fr',
                'photo' => '/influenceurs/3/Loubna nabih.jpg',
                'file' => '/influenceurs/3/ Loubna Nabih.pdf',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Chaimaa GHAZI',
                'instagram_link' => 'https://www.instagram.com/ghazichaimaee/',
                'photo' => '/influenceurs/3/Chaimae Ghazi🪬.jpg',
                'file' => '/influenceurs/3/Chaimae Ghazi.pdf',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Aziza ESSAID',
                'instagram_link' => 'https://www.instagram.com/rawaa_beauty/?hl=fr',
                'photo' => '/influenceurs/3/Aziza ESSAID.jpg',
                'file' => '/influenceurs/3/Aziza ESSAID.pdf',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Rabab BOULKHLAKHEL',
                'instagram_link' => 'https://www.instagram.com/bkl.rabab/',
                'photo' => '/influenceurs/3/Rabab BOULKHLAKHEL.jpg',
                'file' => '/influenceurs/3/Rabab Bkl.pdf',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Laila BOULKADDAT',
                'instagram_link' => 'https://www.instagram.com/leilaboulkaddat/',
                'photo' => '/influenceurs/3/Laila Boulkaddat.jpg',
                'file' => '/influenceurs/3/Laila Boulkaddat.pdf',
                'category_id' => 3,
            ],
            [
                'fullName' => 'Douja BELKHAYATE',
                'instagram_link' => 'https://www.instagram.com/doujablk/?hl=fr',
                'photo' => '/influenceurs/4/Douja Belkhayat.jpg',
                'file' => '/influenceurs/4/Douja Belkhayat.pdf',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Sofia GUEDIRA',
                'instagram_link' => 'https://www.instagram.com/sofiaguedira/',
                'photo' => '/influenceurs/4/Sofia Guedira.jpg',
                'file' => '/influenceurs/4/Sophia Guedira.pdf',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Aida Benchemsi',
                'instagram_link' => 'https://www.instagram.com/aida.benchemsi/',
                'photo' => '/influenceurs/4/Aïda Benchemsi.jpg',
                'file' => '/influenceurs/4/Aïda Benchemsi.pdf',

                'category_id' => 4,
            ],
            [
                'fullName' => 'Ihssane RIHANI',
                'instagram_link' => 'https://www.instagram.com/ihsun.daily/',
                'photo' => '/influenceurs/4/Ihssane RIHANI.jpg',
                'file' => '/influenceurs/4/Ihssane RIHANI.pdf',

                'category_id' => 4,
            ],
            [
                'fullName' => 'Maria LAZRAK',
                'instagram_link' => 'https://www.instagram.com/maria_lazrak/',
                'photo' => '/influenceurs/4/Maria LAZRAK.jpg',
                'file' => '/influenceurs/4/Maria LAZRAK.pdf',
                'category_id' => 4,
            ],
            [
                'fullName' => 'Yassine AMOR',
                'instagram_link' => 'https://www.instagram.com/mambahfit/',
                'photo' => '/influenceurs/5/Yassine Amor.jpg',
                'file' => '/influenceurs/5/Yassine Amor.pdf',
                'category_id' => 5,
            ],
            [
                'fullName' => 'Brahim MOULAY BBI',
                'instagram_link' => 'https://www.instagram.com/brahimlogia/?hl=fr',
                'photo' => '/influenceurs/5/Ibrahim Moulay Bbi.jpg',
                'file' => '/influenceurs/5/brahim Moulay Bbi.pdf',

                'category_id' => 5,
            ],
            [
                'fullName' => 'Ouadie BELMOEITI',
                'instagram_link' => 'https://www.instagram.com/les_badadistes/',
                'photo' => '/influenceurs/5/Belmoeiti Ouadie.jpg',
                'file' => '/influenceurs/5/Belmoeiti Ouadie.pdf',

                'category_id' => 5,
            ],
            [
                'fullName' => 'Sofia BELKAMEL & Amine OUIZID',
                'instagram_link' => 'https://www.instagram.com/sofiab_hls/',
                'photo' => '/influenceurs/5/Amine & Sofia HLS.jpg',
                'file' => '/influenceurs/5/Sofia Belkamel.pdf',

                'category_id' => 5,
            ],
            [
                'fullName' => 'Soufiane OTTMANI',
                'instagram_link' => 'https://www.instagram.com/soufiane.ottmani/',
                'photo' => '/influenceurs/5/Soufiane OTTMANI.jpg',
                'file' => '/influenceurs/5/Soufiane OTTMANI.pdf',

                'category_id' => 5,
            ],
            [
                'fullName' => 'Imane ADINAR',
                'instagram_link' => 'https://www.instagram.com/imane_adinar/?hl=fr',
                'photo' => '/influenceurs/6/IMANE AIT LHADJ.jpg',
                'file' => '/influenceurs/6/Imane ADINAR.pdf',

                'category_id' => 6,
            ],
            [
                'fullName' => 'Badr RHAZI',
                'instagram_link' => 'https://www.instagram.com/badr_masterchef/?hl=fr',
                'photo' => '/influenceurs/6/Badr RHAZI.jpg',
                'file' => '/influenceurs/6/Badr RHAZI .pdf',

                'category_id' => 6,
            ],
            [
                'fullName' => 'Halima FILALI',
                'instagram_link' => 'https://www.instagram.com/cuisine_halima__filali/',
                'photo' => '/influenceurs/6/Halima Choujaa (Filali).jpg',
                'file' => '/influenceurs/6/Halima Filali.pdf',

                'category_id' => 6,
            ],
            [
                'fullName' => 'Aymane GHAZAOUI',
                'instagram_link' => 'https://www.instagram.com/9ossos/',
                'photo' => '/influenceurs/6/Aymane GHAZAOUI.jpg',
                'file' => '/influenceurs/6/9ossos.pdf',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Houda SEDKI',
                'instagram_link' => 'https://www.instagram.com/sedkihouda_officiel/',
                'photo' => '/influenceurs/6/Sedki Houda.jpg',
                'file' => '/influenceurs/6/Sedki Houda.pdf',
                'category_id' => 6,
            ],
            [
                'fullName' => 'Khaoula ELIDRISSI ESSEBTY',
                'instagram_link' => 'https://www.instagram.com/misstech111/?hl=fr',
                'photo' => '/influenceurs/7/Khawla IDRISSI ESSEBTEY.jpg',
                'file' => '/influenceurs/7/Khaoula Elidrissi Essebtey.pdf',
                'category_id' => 7,
            ],
            [
                'fullName' => '@elmehdi-tech',
                'instagram_link' => 'https://www.instagram.com/elmehdi_tech/?hl=fr',
                'photo' => '/influenceurs/7/ELMehdi_Tech.jpg',
                'file' => '/influenceurs/7/ELMehdi_Tech.pdf',
                'category_id' => 7,
            ],
            [
                'fullName' => 'Wael SALIMI',
                'instagram_link' => 'https://www.instagram.com/waelsalimi/?hl=fr',
                'photo' => '/influenceurs/7/Wael Salimi.jpg',
                'file' => '/influenceurs/7/Wael Salimi.pdf',

                'category_id' => 7,
            ],
            [
                'fullName' => 'Hamza LOTFI',
                'instagram_link' => 'https://www.instagram.com/techbedarija_official/?hl=fr',
                'photo' => '/influenceurs/7/HAMZA LOTFI.jpg',
                'category_id' => 7,
                'file' => '/influenceurs/7/HAMZA LOTFI.pdf',

            ],
            [
                'fullName' => 'Kamal KHAIDOUM',
                'instagram_link' => 'https://www.instagram.com/allo_kamal/',
                'photo' => '/influenceurs/7/Kamal Khaidoum.jpg',
                'file' => '/influenceurs/7/Kamal Khaidoum.pdf',

                'category_id' => 7,
            ],
            [
                'fullName' => 'Abdelillah HABBAT',
                'instagram_link' => 'https://www.instagram.com/habbatabdelillah/?hl=fr',
                'photo' => '/influenceurs/8/Abdelillah Habbat Idrissi.jpg',
                'file' => '/influenceurs/8/Abdelillah Habbat Idrissi.pdf',

                'category_id' => 8,
            ],
            [
                'fullName' => 'Hanane KHAYATI',
                'instagram_link' => 'https://www/.instagram.com/hanane_khayati1/',
                'photo' => '/influenceurs/8/Hanane KHAYATI.jpg',
                'file' => '/influenceurs/8/',
                'category_id' => 8,
            ],
            [
                'fullName' => 'Hicham MASRAR',
                'instagram_link' => 'https://www.instagram.com/hichammasrar1/?hl=fr',
                'photo' => '/influenceurs/8/Hicham Masrar.jpg',
                'file' => '/influenceurs/8/Hicham Masrar.pdf',

                'category_id' => 8,
            ],
            [
                'fullName' => 'Yassine BOUZAKHTI',
                'instagram_link' => 'https://www.instagram.com/yas_coach/',
                'photo' => '/influenceurs/8/Yassine Bouzakhti.jpg',
                'file' => '/influenceurs/8/Yassine Bouzakhti.pdf',

                'category_id' => 8,
            ],
            [
                'fullName' => 'Line Souaidi',
                'instagram_link' => 'https://www.instagram.com/getfitbyline/',
                'photo' => '/influenceurs/8/getfitbyline.jpg',

                'category_id' => 8,
            ],
            [
                'fullName' => 'Adam HaMRITA',
                'instagram_link' => 'https://www.instagram.com/hamritox/?hl=fr',
                'photo' => '/influenceurs/9/Adam HaMRITA.jpg',
                'file' => '/influenceurs/9/Adam hamrita.pdf',

                'category_id' => 9,
            ],
            [
                'fullName' => 'Aymane LAZAMI',
                'instagram_link' => 'https://www.instagram.com/aymaneelazami/?hl=fr',
                'photo' => '/influenceurs/9/Aymane El Azami.jpg',
                'file' => '/influenceurs/9/Aymane El Azami.pdf',

                'category_id' => 9,
            ],
            [
                'fullName' => 'Youssef CHARIF',
                'instagram_link' => 'https://www.instagram.com/xcharifx/?hl=fr',
                'photo' => '/influenceurs/9/Youssef CHARIF.jpg',
                'file' => '/influenceurs/9/ Youssef charif.pdf',

                'category_id' => 9,
            ],
            [
                'fullName' => 'Mounia AMALLAL',
                'instagram_link' => 'https://www.instagram.com/monia_gaming.1/?hl=fr',
                'photo' => '/influenceurs/9/Mounia Amallal.jpg',
                'file' => '/influenceurs/9/Mounia Amallal.pdf',

                'category_id' => 9,
            ],
            [
                'fullName' => 'Reda BOUYA',
                'instagram_link' => 'https://www.instagram.com/redline.jpeg/?hl=fr',
                'photo' => '/influenceurs/9/Reda Bouya.jpg',
                'file' => '/influenceurs/9/',

                'category_id' => 9,
            ],
            [
                'fullName' => 'Jalal AAOUITA',
                'instagram_link' => 'https://www.instagram.com/jalalaaouita/?hl=fr',
                'photo' => '/influenceurs/10/Jalal Aaouita.jpg',
                'file' => '/influenceurs/10/',

                'category_id' => 10,
            ],
            [
                'fullName' => 'Ihssane BENALLUCH',
                'instagram_link' => 'https://www.instagram.com/ihssanebenalluch/?hl=fr',
                'photo' => '/influenceurs/10/Ihssane Benalluch.jpg',
                'file' => '/influenceurs/10/Ihssane Benalluch.pdf',

                'category_id' => 10,
            ],
            [
                'fullName' => 'Leila CHEMAM',
                'instagram_link' => 'https://www.instagram.com/leilachemam/?hl=fr',
                'photo' => '/influenceurs/10/Leila Chemam.jpg',
                'file' => '/influenceurs/10/Leila Chemam.pdf',

                'category_id' => 10,
            ],
            [
                'fullName' => 'Ismail HAMMICHE',
                'instagram_link' => 'https://www.instagram.com/smail_hammiche/?hl=fr',
                'photo' => '/influenceurs/10/smail hammiche.jpg',
                'file' => '/influenceurs/10/Ismail Hammich.pdf',

                'category_id' => 10,
            ],
            [
                'fullName' => 'Saad ABID',
                'instagram_link' => 'https://www.instagram.com/saadabidofficiel/',
                'photo' => '/influenceurs/10/Saad Abid.jpg',
                'file' => '/influenceurs/10/',
                'category_id' => 10,
            ],
            [
                'fullName' => 'Ilham ZIDOUHIA',
                'instagram_link' => 'https://www.instagram.com/ilhamzidouhia/',
                'photo' => '/influenceurs/11/ILham Zidouhia.jpg',
                'file' => '/influenceurs/10/',

                'category_id' => 11,
            ],
            [
                'fullName' => 'Oussama TOUIL',
                'instagram_link' => 'https://www.instagram.com/ousama_touil/',
                'photo' => '/influenceurs/11/Oussama TOUIL.jpg',
                'file' => '/influenceurs/10/',

                'category_id' => 11,
            ],
            [
                'fullName' => 'Mounir ZAIRIG',
                'instagram_link' => 'https://www.instagram.com/mounirzairig/',
                'photo' => '/influenceurs/11/Mounir Zairig.jpg',
                'file' => '/influenceurs/10/',

                'category_id' => 11,
            ],
            [
                'fullName' => 'Manal BERNOUSSI',
                'instagram_link' => 'https://www.instagram.com/manalbernoussi/',
                'photo' => '/influenceurs/11/Manal Bernoussi.jpg',
                'category_id' => 11,
                'file' => '/influenceurs/10/',

            ],
            [
                'fullName' => 'Ghizlane MATHIAU',
                'instagram_link' => 'https://www.instagram.com/ghizlanemathiau/',
                'photo' => '/influenceurs/11/Ghizlane Mathiau.jpg',
                'category_id' => 11,
                'file' => '/influenceurs/10/',

            ],
        ];

        foreach ($influencers as $influencerData) {
            Influenceur::create($influencerData);
        }

    }
}
