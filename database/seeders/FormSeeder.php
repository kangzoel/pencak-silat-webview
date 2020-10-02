<?php

namespace Database\Seeders;

use App\Models\Form;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            'name' => 'Sikap Tubuh',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_tubuh']),
            'view' => 'form',
            'description' => "Sikap tubuh adalah sikap yang dilakukan pesilat untuk memulai gerakan atau mengakhiri gerakan. Pada sikap tubuh ini biasanya dibagi menjadi tiga sikap tubuh. Yaitu sikap berdiri tegak, sikap tubuh dalam keadaan terbuka dan sikap tubuh dalam keadaan tertutup.",
        ]);

        Form::create([
            'name' => 'Sikap Kuda Kuda',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_kuda_kuda']),
            'view' => 'form',
            'description' => "Sikap kuda-kuda adalah salah satu gerakan yang sangat penting dalam pencak silat karena menentukan dasar setiap pesilat dalam menyerang maupun bertahan. Sikap kuda-kuda adalah ketika salah satu kaki atu kedua kaki menjadi tumpuan tubuh untuk bertahan atau memulai serangan.",
        ]);

        Form::create([
            'name' => 'Sikap Tendangan',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_tendangan']),
            'view' => 'form',
            'description' => "Teknik tendangan dalam pencak silat merupakan salah satu teknik yang sering digunakan pesilat dalam bertahan maupun menyerang. Tendangan adalah gerakan yang dilakukan menggunakan kaki. Baik kaki sebelah kiri maupun kanan.",
        ]);

        Form::create([
            'name' => 'Sikap Berdiri Tegak',
            'parent_id' => 1,
            'images' => json_encode(['sikap_tubuh']),
            'view' => 'form',
            'description' => "Sikap berdiri tegak adalah sikap yang dilakukan seorang pesilat untuk memulai latihan pencak silat. Terdiri dari sikap perhatian, bersedia dan siap. Sikap perhatian adalah sikap yang dilakukan pesilat untuk mempersiapkan dirinya memulai latihan, yang biasanya digunakan untuk membenarkan sabuk, pakaian, atau perangkat sejenisnya yang digunakan dalam latihan sesuai dengan instruksi pelatih. Sikap bersedia adalah sikap di mana seorang pesilat dalam keadaan bersedia untuk memulai latihan dan sudah tidak lagi membenarkan sabuk, pakaian silat, atau sejenisnya yang digunakan dalam proses latihan. Sedangkan sikap siap berarti sikap di mana seorang pesilat sudah akan memulai latihan.",
        ]);

        Form::create([
            'name' => 'Sikap Perhatian',
            'parent_id' => 4,
            'images' => json_encode(['sikap_perhatian']),
            'view' => 'single',
            'description' => "Sikap perhatian adalah badan berdiri tegak, pandangan lurus ke depan, tangan disimpan di samping badan diluruskan agak terbuka dari badan sambil dikepalkan, sedangkan kaki dibuka selebar bahu.",
        ]);

        Form::create([
            'name' => 'Sikap Bersedia',
            'parent_id' => 4,
            'images' => json_encode(['sikap_bersedia']),
            'view' => 'single',
            'description' => "Sikap bersedia adalah posisi badan berdiri tegak, pandangan lurus ke depan, posisi tangan disimpan di depan pinggang sambil tangan kanan digenggam oleh tangan kiri, posisi kaki dibuka selebar bahu.",
        ]);

        Form::create([
            'name' => 'Sikap Siap',
            'parent_id' => 4,
            'images' => json_encode(['sikap_siap']),
            'view' => 'single',
            'description' => "Sikap siap adalah posisi badan berdiri tegak, pandangan lurus ke depan, posisi tangan disimpan di depan dada menghadapkan kepalan tangan kanan dan kiri, posisi kaki dirapatkan.",
        ]);

        Form::create([
            'name' => 'Sikap Tangan Terbuka',
            'parent_id' => 1,
            'images' => json_encode(['sikap_tangan_terbuka']),
            'view' => 'single',
            'description' => "Sikap tangan terbuka adalah sikap di mana seorang pesilat akan memulai gerkan atau mengakhiri gerakan tanpa menutupi posisi tubuh dengan tangan.\n\nDalam sikap tubuh terbuka kali ini, yaitu buka kedua kaki lebar, lalu tekuk bagian lutut sehingga tumpuan berada di kedua kaki, posisi badan tegak, pandangan lurus ke depan, tangan kiri dibuka mengarah ke atas, sedangkan posisi tangan kanan dibuka mengarah ke bawah.",
        ]);

        Form::create([
            'name' => 'Sikap Tangan Tertutup',
            'parent_id' => 1,
            'images' => json_encode(['sikap_tangan_tertutup']),
            'view' => 'single',
            'description' => "Sikap tangan tertutup adalah sikap di mana seorang pesilat akan memulai gerakan atau mengakhiri gerakan menutupi posisi tubuh dengan tangan.\n\nDalam sikap tubuh tertutup kali ini, yaitu buka kedua kaki lebar, lalu tekuk bagian lutut kanan ke arah samping sedangkan kaki menekukkan lutut ke arah bawah sehingga tumpuan berada di kaki bagian kiri. Posisi badan diarahkan ke samping kiri sedikit condong ke depan, pandangan lurus ke depan, tangan kiri ditekuk dan disimpan di depan dada sambil membuka kepalan tangan, sedangkan posisi tangan kanan di tekuk di bagian siku di simpan di bawah yangan sebelah kiri, sambil mengepalkan tangan kanan.",
        ]);

        Form::create([
            'name' => 'Sikap Kuda Kuda Kangkang',
            'parent_id' => 2,
            'images' => json_encode(['sikap_kuda_kuda_kangkang']),
            'view' => 'single',
            'description' => "Sikap kuda-kuda kangkang adalah ketika pesilat membuka kedua kakinya dan menekuk bagian lutut sehingga tumpuan kaki berada di kedua kaki, posisi tubuh tegap dan pandangan ke depan, serta posisi kedua tangan diletakkan di samping pinggang serta ditekuk sambil menggenggam.\n\nBiasanya sikap kuda-kuda kangkang digunakan untuk awal latihan meningkatkan kekuatan otot kaki serta melakukan pukulan secara beruntun.",
        ]);

        Form::create([
            'name' => 'Sikap Kuda Kuda Depan',
            'parent_id' => 2,
            'images' => json_encode(['sikap_kuda_kuda_depan_01', 'sikap_kuda_kuda_depan_02']),
            'view' => 'single',
            'description' => "Sikap kuda-kuda depan adalah sikap di mana seorang pesilat menjadikan salah satu kaki menjadi tumpuan. Baik kaki kiri maupun kaki kanan.\n\nSalah satu kaki dimajukan ke depan lalu ditekuk di bagian lutut sehingga tumpuan berada di kaki depan dan menjadi sikap kuda-kuda depan. Posisi badan tegak serta pandangan ke depan. Kedua tangan diletakkan di samping pinggang, bagian siku ditekuk serta kedua tangan dikepalkan.\n\nSikap kuda-kuda depan sering sekali digunakan seorang pesilat ketika bertanding untuk mempersiapkan gerakan bertahan atau menyerang.",
        ]);

        Form::create([
            'name' => 'Sikap Kuda Kuda Belakang',
            'parent_id' => 2,
            'images' => json_encode(['sikap_kuda_kuda_belakang_01', 'sikap_kuda_kuda_belakang_02']),
            'view' => 'single',
            'description' => "Sikap kuda-kuda belakang adalah sikap di mana seorang pesilat menjadikan salah satu kaki menjadi tumpuan. Baik kaki kiri maupun kaki kanan.\n\nSalah satu kaki dimundurkan ke depan lalu ditekuk di bagian lutut sehingga tumpuan berada di kaki belakang dan menjadi sikap kuda-kuda belakang. Posisi badan tegak serta pandangan ke depan. Kedua tangan diletakkan di samping pinggang, bagian siku ditekuk serta kedua tangan dikepalkan.\n\nSikap kuda-kuda belakang sering sekali digunakan seorang pesilat ketika bertanding untuk mempersiapkan gerakan bertahan atau menyerang.",
        ]);

        Form::create([
            'name' => 'Sikap Tendangan Lurus',
            'parent_id' => 3,
            'images' => json_encode([
                'sikap_tendangan_lurus_01',
                'sikap_tendangan_lurus_02', 'sikap_tendangan_lurus_03', 'sikap_tendangan_lurus_04'
            ]),
            'view' => 'single',
            'description' => "Tendangan lurus adalah sebuah serangan salah satu kaki yang digunakan untuk menyerang lawan dengan mendorong kaki ke depan mengenai lawan. Tendangan lurus ini sering sekali digunakan oleh pesilat dalam pertandingan karena dinilai efektif dalam menyerang. Instrumen gerak dapat dilihat di gambar.",
        ]);

        Form::create([
            'name' => 'Sikap Tendangan Sabit',
            'parent_id' => 3,
            'images' => json_encode(['sikap_tendangan_sabit_01', 'sikap_tendangan_sabit_02', 'sikap_tendangan_sabit_03', 'sikap_tendangan_sabit_04']),
            'view' => 'single',
            'description' => "Tendangan sabit adalah serangan yang menggunakan salah satu kaki dengan bentuk akhir dari tendangan menyerupai sabit. Tendangan sabit sama seperti tendangan lurus yang menjadi salah satu teknik serangan yang banyak digunakan pesilat dalam sebuah pertandingan karena dinilai efektif dan mudah untuk dilakukan pesilat dalam pertandingan. Instrumen gerak dapat dilihat pada gambar.",
        ]);

        Form::create([
            'name' => 'Sikap Tendangan Samping',
            'parent_id' => 3,
            'images' => json_encode([
                'sikap_tendangan_samping_01',
                'sikap_tendangan_samping_02',
                'sikap_tendangan_samping_03',
                'sikap_tendangan_samping_04'
            ]),
            'view' => 'single',
            'description' => "Tendangan samping (T) adalah serangan yang dilakukan menggunakan salah satu kaki dengan mendorongkan kaki yang menendang dengan keras menyamping, sehingga bentuk akhir gerakan menyerupai huruf (T). Seperti tendangan lurus dan tendangan sabit, tendangan samping (T) sering diguakan pesilat dalam pertandingan karena dinilai sangat efektif karena hasil tendangannya begitu keras sehingga dapat menghasilkan efek yang signifikan jika terkena sasaran atau pesilat lain dalam pertandingan. Instrumen gerak tendangan samping (T) dapat dilihat pada gambar.",
        ]);


        Form::create([
            'name' => 'Sikap Pukulan',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_pukulan']),
            'view' => 'form_no_desc',
            'description' => NULL,
        ]);

        Form::create([
            'name' => 'Sikap Pukulan Lurus',
            'parent_id' => 16,
            'images' => json_encode(['sikap_pukulan_lurus_01', 'sikap_pukulan_lurus_02', 'sikap_pukulan_lurus_03']),
            'view' => 'multiple',
            'description' => "Satu kaki dibuka ke depan, buka kedua telapak tangan dan hadapkan ke depan dengan tangan yang sama dengan kaki belakang berada sejajar dengan dada dan tangan yang sama dengan kaki depan berada di bawahnya.|Tangan kanan ditarik ke arah belakang. Tangan kiri berada di atas kepalan tangan kanan|Tangan kanan didorong keras lurus ke depan dengan ketinggian sama dengan ketinggian bahu. ",
        ]);

        Form::create([
            'name' => 'Sikap Pukulan Buku Jari',
            'parent_id' => 16,
            'images' => json_encode([
                'sikap_pukulan_buku_jari_01',
                'sikap_pukulan_buku_jari_02',
                'sikap_pukulan_buku_jari_03'
            ]),
            'view' => 'multiple',
            'description' => "Satu kaki dibuka ke depan, buka kedua telapak tangan dan hadapkan ke depan dengan tangan yang sama dengan kaki belakang berada sejajar dengan dada dan tangan yang sama dengan kaki depan berada di bawahnya.|Tangan kanan ditarik ke arah belakang. Tangan kiri berada di atas kepalan tangan kanan|Tangan kanan didorong keras lurus ke depan, kepalan dirubah menjadi buku jari",
        ]);

        Form::create([
            'name' => 'Sikap Pukulan Tusuk',
            'parent_id' => 16,
            'images' => json_encode(['sikap_pukulan_tusuk_01', 'sikap_pukulan_tusuk_02', 'sikap_pukulan_tusuk_03']),
            'view' => 'multiple',
            'description' => "Satu kaki dibuka ke depan, buka kedua telapak tangan dan hadapkan ke depan dengan tangan yang sama dengan kaki belakang berada sejajar dengan dada dan tangan yang sama dengan kaki depan berada di bawahnya.|Tangan kanan ditarik ke arah belakang. Tangan kiri berada di atas kepalan tangan kanan|Tangan kanan didorong keras lurus ke depan, kepalan dibuka menjadi tangan terbuka dengan ketinggian sama dengan ketinggian bahu.",
        ]);

        Form::create([
            'name' => 'Sikap Bukaan',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_bukaan']),
            'view' => 'form_no_desc',
            'description' => NULL,
        ]);

        Form::create([
            'name' => 'Sikap Bukaan 1 Tangan',
            'parent_id' => 20,
            'images' => json_encode([
                'sikap_bukaan_1_tangan_01',
                'sikap_bukaan_1_tangan_02',
                'sikap_bukaan_1_tangan_03'
            ]),
            'view' => 'multiple',
            'description' => "Tangan kanan dipegang oleh lawan|Dekatkan tangan kanan yang dipegang oleh lawan ke arah dada sambil merubah arah ke arah luar/ kanan|Dorong tangan kanan yang dipegang oleh lawan dengan keras sehingga membuka kepalan/ pegangan lawan.",
        ]);

        Form::create([
            'name' => 'Sikap Bukaan 2 Tangan',
            'parent_id' => 20,
            'images' => json_encode(['sikap_bukaan_2_tangan_01', 'sikap_bukaan_2_tangan_02', 'sikap_bukaan_2_tangan_03']),
            'view' => 'multiple',
            'description' => "Tangan kanan dipegang oleh lawan dengan 2 tangan|Dekatkan tangan kanan yang dipegang oleh lawan ke arah dada sambil merubah arah ke arah luar/ kanan dan memegang tangan lawan diikuti dengan tangan kiri yang mengambil tangan kiri lawan|Tarik kedua tangan lawan menyilang sehingga mengunci gerakan lawan.",
        ]);

        Form::create([
            'name' => 'Sikap Bantingan',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_bantingan']),
            'view' => 'form_no_desc',
            'description' => NULL,
        ]);

        Form::create([
            'name' => 'Sikap Bantingan Depan Tendangan Lurus',
            'parent_id' => 23,
            'images' => json_encode([
                'sikap_bantingan_depan_tendangan_lurus_01',
                'sikap_bantingan_depan_tendangan_lurus_02',
                'sikap_bantingan_depan_tendangan_lurus_03',
                'sikap_bantingan_depan_tendangan_lurus_04'
            ]),
            'view' => 'multiple',
            'description' => "Kedua pesilat berhadapan.|Pesilat 1 menendang dengan tendangan lurus. Pesilat 2 menangkap dengan tangan kanan bersamaan dengan tangan kiri yang mendorong tubuh pesilat 1.|Pesilat 2 mengangkat tangkapan tangan kanan dengan tinggi. Tangan kiri eterus mendorong dengan keras tubuh pesilat 1 sambil melangkahkan kaki kiri ke depan kaki tumpu pesilat 1.|Pesilat 2 menjatuhkan pesilat 1.",
        ]);

        Form::create([
            'name' => 'Sikap Bantingan Depan Tendangan Sabit',
            'parent_id' => 23,
            'images' => json_encode([
                'sikap_bantingan_depan_tendangan_lurus_01',
                'sikap_bantingan_depan_tendangan_lurus_02',
                'sikap_bantingan_depan_tendangan_sabit_03',
                'sikap_bantingan_depan_tendangan_sabit_04'
            ]),
            'view' => 'multiple',
            'description' => "Kedua pesilat berhadapan.|Pesilat 1 menendang dengan tendangan sabit. Pesilat 2 menangkap dengan tangan kiri bersamaan dengan tangan kanan yang mendorong tubuh pesilat 1.|Pesilat 2 mengangkat tangkapan tangan kiri dengan tinggi. Tangan kanan terus mendorong dengan keras tubuh pesilat 1 sambil melangkahkan kaki kanan ke depan kaki tumpu pesilat 1.|Pesilat 2 menjatuhkan pesilat 1.",
        ]);
    }
}
