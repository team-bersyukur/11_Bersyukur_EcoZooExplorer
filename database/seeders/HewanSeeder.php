<?php

namespace Database\Seeders;

use App\Models\Hewan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hewan::create([
            'zona_id' => 3,
            'nama_hewan' => 'Singa',
            'nama_ilmiah_hewan' => 'Panthera leo',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Singa adalah mamalia besar yang dikenal karena kekuatan dan keanggunannya. Mereka memiliki bulu berwarna cokelat keemasan dengan rambut lebat di sekitar leher (singa jantan).',
            'foto' => 'assets_admin/img/hewan/Singa.jpg',
        ]);

        Hewan::create([
            'zona_id' => 3,
            'nama_hewan' => 'Harimau',
            'nama_ilmiah_hewan' => 'Panthera tigris',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Harimau adalah kucing besar dengan belang hitam dan jingga yang khas. Mereka adalah pemburu yang sangat terampil dan memiliki kekuatan yang mengesankan.',
            'foto' => 'assets_admin/img/hewan/Harimau.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Cheetah',
            'nama_ilmiah_hewan' => 'Acinonyx jubatus',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Cheetah dikenal sebagai hewan tercepat darat, dengan tubuh ramping dan bulu berwarna kuning kecokelatan serta bercak hitam yang khas di tubuhnya.',
            'foto' => 'assets_admin/img/hewan/Cheetah.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Kera',
            'nama_ilmiah_hewan' => 'Primates',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Kera adalah primata yang cenderung hidup di pepohonan. Mereka memiliki tangan yang fleksibel dan ekor yang tidak panjang.',
            'foto' => 'assets_admin/img/hewan/Kera.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Kuda Nil',
            'nama_ilmiah_hewan' => 'Hippopotamus amphibius',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Kuda nil adalah mamalia besar yang hidup di wilayah perairan seperti sungai dan danau. Mereka memiliki tubuh besar dengan mulut lebar dan hidung yang panjang.',
            'foto' => 'assets_admin/img/hewan/Kudanil.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Anoa',
            'nama_ilmiah_hewan' => 'Bubalus depressicornis (Anoa pegunungan), Bubalus quarlesi (Anoa dataran)',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => ' Anoa adalah sejenis kerbau kecil yang hidup di hutan hujan di Pulau Sulawesi, Indonesia. Mereka memiliki tubuh yang kompak dan tanduk yang kecil.',
            'foto' => 'assets_admin/img/hewan/Anoa.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Kanguru',
            'nama_ilmiah_hewan' => 'Macropodidae',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Kangguru adalah mamalia marsupial yang memiliki kaki belakang yang besar dan ekor panjang, serta kemampuan melompat yang luar biasa.',
            'foto' => 'assets_admin/img/hewan/Kanguru.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,     
            'nama_hewan' => 'Rusa',
            'nama_ilmiah_hewan' => 'Cervidae',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => '
            - Deskripsi: Rusa adalah mamalia herbivora dengan tanduk pada hewan jantan. Mereka tersebar luas di berbagai habitat di seluruh dunia.',
            'foto' => 'assets_admin/img/hewan/Rusa.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Gajah',
            'nama_ilmiah_hewan' => 'Elephas maximus',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Gajah adalah mamalia raksasa dengan tubuh besar, gading panjang, dan telinga lebar. Mereka dikenal karena kecerdasan dan ingatan jangka panjang.',
            'foto' => 'assets_admin/img/hewan/Gajah.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Bison',
            'nama_ilmiah_hewan' => 'Bison bison',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Bison adalah mamalia besar dari keluarga banteng yang dikenal dengan tanduk yang besar dan badan yang kokoh.',
            'foto' => 'assets_admin/img/hewan/Bison.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Kuda',
            'nama_ilmiah_hewan' => 'Equus ferus caballus',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Kuda adalah mamalia herbivora besar yang telah dijinakkan oleh manusia untuk digunakan dalam berbagai kegiatan, seperti transportasi dan olahraga.',
            'foto' => 'assets_admin/img/hewan/Kuda.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Llama',
            'nama_ilmiah_hewan' => 'Lama glama',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => ' Llama adalah mamalia herbivora dari Amerika Selatan yang sering digunakan sebagai hewan pengangkut atau untuk bulu dan dagingnya.',
            'foto' => 'assets_admin/img/hewan/Llama.jpg',
        ]);

        Hewan::create([
            'zona_id' => 4,
            'nama_hewan' => 'Jerapah',
            'nama_ilmiah_hewan' => 'Giraffa camelopardalis',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Jerapah adalah mamalia herbivora yang memiliki leher panjang dan kaki yang tinggi. Mereka adalah hewan darat terbesar di dunia.',
            'foto' => 'assets_admin/img/hewan/Jerapah.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Simpanse',
            'nama_ilmiah_hewan' => 'Pan troglodytes',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Simpanse adalah primata besar yang hidup di hutan Afrika tengah dan barat. Mereka memiliki kemiripan genetik yang tinggi dengan manusia.',
            'foto' => 'assets_admin/img/hewan/Simpanse.jpg',
        ]);
        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Elang',
            'nama_ilmiah_hewan' => 'Aquila',
            'jenis_hewan' => 'Aves',
            'deskripsi' => ' Elang adalah burung pemangsa yang memiliki sayap lebar dan cakar yang kuat. Mereka merupakan predator utama di ekosistem mereka.',
            'foto' => 'assets_admin/img/hewan/Elang.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Macan Tutul',
            'nama_ilmiah_hewan' => 'Panthera pardus',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Macan tutul adalah kucing besar dengan bulu berbintik-bintik dan ekor panjang. Mereka adalah pemburu yang tangkas dan sering tinggal di hutan.',
            'foto' => 'assets_admin/img/hewan/Macan Tutul.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Buaya',
            'nama_ilmiah_hewan' => 'Crocodylia ',
            'jenis_hewan' => 'Reptilia',
            'deskripsi' => 'Buaya adalah reptil besar yang hidup di air tawar. Mereka memiliki tubuh yang panjang, moncong yang runcing, dan gigi yang tajam.',
            'foto' => 'assets_admin/img/hewan/Buaya.jpg',
        ]);

        Hewan::create([
            'zona_id' => 2,
            'nama_hewan' => 'Komodo',
            'nama_ilmiah_hewan' => 'Varanus komodoensis',
            'jenis_hewan' => 'Reptilia',
            'deskripsi' => ' Komodo adalah kadal raksasa yang hanya ditemukan di beberapa pulau di Indonesia. Mereka adalah pemangsa yang tangguh dengan ukuran tubuh yang besar.',
            'foto' => 'assets_admin/img/hewan/Komodo.jpg',
        ]);

        Hewan::create([
            'zona_id' => 2,
            'nama_hewan' => 'Unta',
            'nama_ilmiah_hewan' => 'Camelus dromedarius',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Unta adalah mamalia herbivora yang biasa dijumpai di daerah gurun. Mereka memiliki leher panjang, kaki panjang, dan gumpalan lemak di punggung.',
            'foto' => 'assets_admin/img/hewan/Unta.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Zebra',
            'nama_ilmiah_hewan' => 'Equus zebra',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => ' Zebra adalah mamalia herbivora yang dikenal karena belang hitam dan putih yang mencolok pada tubuh mereka.',
            'foto' => 'assets_admin/img/hewan/Zebra.jpg',
        ]);

        Hewan::create([
            'zona_id' => 2,
            'nama_hewan' => 'Orangutan',
            'nama_ilmiah_hewan' => 'Pongo',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Orangutan adalah primata besar yang hidup di hutan tropis Asia Tenggara. Mereka memiliki bulu berwarna cokelat dan lengan yang panjang.',
            'foto' => 'assets_admin/img/hewan/Orangutan.jpg',
        ]);

        Hewan::create([
            'zona_id' => 1,
            'nama_hewan' => 'Julang',
            'nama_ilmiah_hewan' => 'Bucerotidae',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Julang adalah burung besar dengan paruh yang panjang dan sayap yang lebar. Mereka sering tinggal di hutan dan hutan mangrove.',
            'foto' => 'assets_admin/img/hewan/Julang.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Landak',
            'nama_ilmiah_hewan' => 'Hystricidae',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => ' Landak adalah mamalia yang dilindungi oleh duri-duri keras di tubuhnya. Mereka dapat menggulung diri untuk melindungi diri dari predator.',
            'foto' => 'assets_admin/img/hewan/Landak.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Kapibara',
            'nama_ilmiah_hewan' => 'Hydrochoerus hydrochaeris',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Kapibara adalah mamalia terbesar di dunia yang hidup di air. Mereka memiliki tubuh besar dan bulu berwarna cokelat.',
            'foto' => 'assets_admin/img/hewan/Kapibara.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Nilgai',
            'nama_ilmiah_hewan' => 'Boselaphus tragocamelus',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => 'Nilgai adalah antelop besar yang hidup di padang rumput dan semak belukar di India. Mereka memiliki tubuh besar dengan warna abu-abu kebiruan.',
            'foto' => 'assets_admin/img/hewan/Nilgai.jpg',
        ]);

        Hewan::create([
            'zona_id' => 6,
            'nama_hewan' => 'Beruang',
            'nama_ilmiah_hewan' => 'Ursidae',
            'jenis_hewan' => 'Mammalia',
            'deskripsi' => ' Beruang adalah mamalia besar yang dikenal karena tubuh berbulu tebal dan cakar yang kuat. Mereka adalah omnivora yang terdapat di berbagai habitat di seluruh dunia.',
            'foto' => 'assets_admin/img/hewan/Beruang.jpg',
        ]);

        Hewan::create([
            'zona_id' => 1,
            'nama_hewan' => 'Merak',
            'nama_ilmiah_hewan' => 'Pavo cristatus',
            'jenis_hewan' => 'Aves',
            'deskripsi' => 'Merak adalah burung berwarna-warni dengan ekor yang panjang dan indah. Mereka sering dianggap sebagai simbol keindahan.',
            'foto' => 'assets_admin/img/hewan/Merak.jpg',
        ]);

        Hewan::create([
            'zona_id' => 6,
            'nama_hewan' => 'Kasuari',
            'nama_ilmiah_hewan' => 'Casuariidae',
            'jenis_hewan' => 'Aves',
            'deskripsi' => 'Kasuari adalah burung besar yang tidak bisa terbang, mereka memiliki duri keras di kepala dan tubuh.',
            'foto' => 'assets_admin/img/hewan/Kasuari.jpg',
        ]);

        Hewan::create([
            'zona_id' => 5,
            'nama_hewan' => 'Iguana',
            'nama_ilmiah_hewan' => 'Iguanidae',
            'jenis_hewan' => 'Reptilia',
            'deskripsi' => 'Iguana adalah kadal besar yang biasa ditemukan di Amerika Tengah dan Amerika Selatan. Mereka memiliki tubuh panjang dan ekor yang kuat.',
            'foto' => 'assets_admin/img/hewan/Iguana.jpg',
        ]);

        Hewan::create([
            'zona_id' => 6,
            'nama_hewan' => 'Ikan',
            'nama_ilmiah_hewan' => 'Pisces',
            'jenis_hewan' => 'Pisces',
            'deskripsi' => 'Ikan adalah hewan akuatik dengan tubuh yang dilapisi sisik dan memiliki sirip untuk berenang',
            'foto' => 'assets_admin/img/hewan/Ikan.jpg',
        ]);

        Hewan::create([
            'zona_id' => 6,
            'nama_hewan' => 'Penyu',
            'nama_ilmiah_hewan' => 'Testudines',
            'jenis_hewan' => 'Reptilia',
            'deskripsi' => 'Penyu adalah burung besar dengan paruh yang panjang dan sayap yang lebar. Mereka sering tinggal di hutan dan hutan mangrove.',
            'foto' => 'assets_admin/img/hewan/Penyu.jpg',
        ]);
    }
}
