<?php

namespace Database\Seeders;

use App\Models\Zona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zona::create([
            'nama_zona' => 'Zona 3',
            'deskripsi_zona' => 'Selamat datang di Zona Kekuatan Karismatik, tempat di mana keanggunan dan kekuatan bertemu dalam harmoni yang megah. Di sini, Anda akan dihadapkan pada kehadiran yang megah dari hewan-hewan paling gagah di alam. Dengan setiap langkah, Anda akan merasakan getaran kekuatan dari singa yang perkasa dan harimau yang misterius. Tatapan tajam mereka mencerminkan keberanian dan kekuatan alam semesta. Zona ini adalah panggung bagi pertunjukan kekuatan dan keagungan dari dua raja hutan ini. Dengarkan dentuman langkah mereka, saksikan gerakan elegan mereka, dan rasakan aura ketegasan yang memenuhi udara di Zona Kekuatan Karismatik ini.
            ',
            'foto_zona' => 'fotoZona/3.png',
            'foto_zona_detail' => 'fotoZona/Zona 3.png',
        ]);

        Zona::create([
            'nama_zona' => 'Zona 2',
            'deskripsi_zona' => 'Selamat datang di Zona Petualangan Eksotis, di mana keajaiban alam bertemu dengan keunikan hewan-hewan yang memukau. Di sini, Anda akan merasakan semangat petualangan yang mendalam seiring dengan setiap langkah yang Anda ambil. Mulai dari tatapan lembut orangutan yang cerdas hingga kemegahan zebra yang berderet di padang rumput, dan dari kemegahan unta yang kokoh hingga keangkeran komodo yang mengagumkan, setiap hewan di zona ini membawa Anda pada perjalanan tak terlupakan melintasi belantara alam. Sambil berjalan agak jauh, Anda juga akan bertemu dengan kera-kera cerdik yang menghibur dengan kelucuan dan kecerdasan mereka. Merasakan udara segar dan terik matahari, saksikanlah kehidupan liar yang penuh warna di Zona Petualangan Eksotis ini, di mana petualangan dan penemuan tak pernah berakhir.
            ',
            'foto_zona' => 'fotoZona/2.png',
            'foto_zona_detail' => 'fotoZona/Zona 2.png',
        ]);

        Zona::create([
            'nama_zona' => 'Zona 1',
            'deskripsi_zona' => 'Selamat datang di Zona Surga Eksotis, tempat di mana keanggunan dan keindahan bertemu dalam harmoni sempurna. Di sini, Anda akan dihiasi dengan panorama yang memukau oleh hewan-hewan yang menjadi ikon kecantikan alam. Dari flamboyan flaminggo yang menari-nari di air, hingga siluet bangau yang anggun di ufuk langit, dan dari julang yang mempesona dengan sayapnya yang luas hingga keindahan elegan merak yang memukau mata, setiap momen di zona ini adalah kesempatan untuk meresapi keanggunan alam semesta. Sambutlah keajaiban warna dan bentuk dalam zonasi yang mempesona ini, di mana kehidupan hewan membawa Anda dalam perjalanan tak terlupakan melalui dunia keindahan alam.
            ',
            'foto_zona' => 'fotoZona/1.png',
            'foto_zona_detail' => 'fotoZona/Zona 1.png',
        ]);

        Zona::create([
            'nama_zona' => 'Zona 4',
            'deskripsi_zona' => 'Selamat datang di Zona Pesona Savana, tempat di mana kecepatan, keanggunan, dan keunikan bertemu dalam satu kesatuan yang menakjubkan. Di depan Anda, kera-kera cerdas bermain-main dengan kegembiraan, sementara di kejauhan, cheetah mengintai dengan tangkasnya, mencerminkan keanggunan alam liar. Saat Anda melanjutkan perjalanan, Anda akan melewati kompleks yang mengagumkan, di mana kumpulan bison, kuda nil yang menjelajahi perairan, llama yang mempesona, kuda yang perkasa, anoa yang misterius, kangguru yang lincah, rusa yang anggun, dan jerapah yang megah, semuanya hidup berdampingan dalam harmoni yang menakjubkan. Zona ini adalah perayaan dari keanekaragaman alam, di mana Anda dapat merasakan keajaiban savana dan hutan yang luas, sambil menyaksikan pesona hewan-hewan yang memanggil tempat ini sebagai rumah mereka. Selamat menikmati keindahan alam yang luar biasa di Zona Pesona Savana ini!',
            'foto_zona' => 'fotoZona/4.png',
            'foto_zona_detail' => 'fotoZona/Zona 4.png',
        ]);

        Zona::create([
            'nama_zona' => 'Zona 5',
            'deskripsi_zona' => 'Selamat datang di Zona Hutan Harmoni, tempat di mana keelokan alam dan kehidupan hewan saling bersatu dalam keselarasan yang memukau. Di kompleks di sebelah kanan Anda, gajah-gajah yang megah, simpanse-simpanse yang pintar, dan elang-elang yang gagah berkumpul bersama, menciptakan suasana keanggunan dan kebijaksanaan. Sementara itu, di sebelah kiri, kera-kera cerdik, harimau-harimau perkasa, dan macan tutul yang mengesankan menjaga ketegasan dan keindahan alam liar. Saat Anda melanjutkan perjalanan ke depan, Anda akan menemukan kumpulan nilgai yang anggun, landak-landak yang menggemaskan, capybara-capybara yang ramah, dan iguana-iguana yang mempesona, semuanya hidup berdampingan dalam harmoni yang damai. Zona ini adalah perpaduan dari kekuatan, kecerdasan, dan keindahan alam, yang memperlihatkan betapa luar biasanya kehidupan di hutan ini. Nikmatilah suasana Zona Hutan Harmoni yang menenangkan dan memukau ini!',
            'foto_zona' => 'fotoZona/5.png',
            'foto_zona_detail' => 'fotoZona/Zona 5.png',
        ]);

        Zona::create([
            'nama_zona' => 'Zona 6',
            'deskripsi_zona' => 'Selamat datang di Zona Kehidupan Liar Multi-Dimensi, tempat di mana Anda akan dihadapkan pada keajaiban alam di berbagai habitat yang berbeda. Di depan Anda, beruang-beruang yang menggemaskan, kaswari-kaswari yang perkasa, dan kakaktua-kakaktua yang berwarna-warni membentuk barisan yang mengagumkan, mencerminkan keindahan kehidupan di berbagai belahan dunia.

            Saat Anda melanjutkan perjalanan, Anda akan masuk ke dalam ruang aquarium besar yang mempesona, di mana Anda akan terpesona oleh keindahan ikan air tawar dan ikan air laut yang berenang dengan gemerlapnya. Suasana yang tenang dan indah di dalam aquarium ini akan membius Anda dengan kedamaian alam bawah laut.
            
            Setelah keluar dari aquarium, perjalanan Anda akan dilanjutkan dengan menemui ular-ular yang mengintai, penyu-penyu yang melambai, dan akhirnya, jalak bali yang anggun. Dalam setiap langkah, Anda akan merasakan keajaiban kehidupan yang beraneka ragam, dari darat hingga laut, dan dari hutan hingga lautan.
            
            Lurus menuju jalan keluar, Anda akan membawa kenangan tak terlupakan tentang keindahan alam dan keragaman hayati yang luar biasa. Selamat menikmati petualangan di Zona Kehidupan Liar Multi-Dimensi ini, di mana setiap sudutnya adalah panggilan untuk mengagumi dan merenungkan keajaiban alam semesta.',
            'foto_zona' => 'fotoZona/6.png',
            'foto_zona_detail' => 'fotoZona/Zona 6.png',
        ]);
    }
}
