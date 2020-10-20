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
            'name' => 'Teknik Tendangan',
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
            'name' => 'Teknik Tendangan Lurus',
            'parent_id' => 3,
            'images' => json_encode([
                'sikap_tendangan_lurus_01',
                'sikap_tendangan_lurus_02',
                'sikap_tendangan_lurus_03',
                'sikap_tendangan_lurus_04'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=zQSJYdt_UqU',
            'view' => 'single',
            'description' => "Tendangan lurus adalah sebuah serangan salah satu kaki yang digunakan untuk menyerang lawan dengan mendorong kaki ke depan mengenai lawan. Tendangan lurus ini sering sekali digunakan oleh pesilat dalam pertandingan karena dinilai efektif dalam menyerang. Instrumen gerak dapat dilihat di gambar.",
        ]);

        Form::create([
            'name' => 'Teknik Tendangan Sabit',
            'parent_id' => 3,
            'images' => json_encode([
                'sikap_tendangan_sabit_01',
                'sikap_tendangan_sabit_02',
                'sikap_tendangan_sabit_03',
                'sikap_tendangan_sabit_04'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=GslQkd-Z--Q',
            'view' => 'single',
            'description' => "Tendangan sabit adalah serangan yang menggunakan salah satu kaki dengan bentuk akhir dari tendangan menyerupai sabit. Tendangan sabit sama seperti tendangan lurus yang menjadi salah satu teknik serangan yang banyak digunakan pesilat dalam sebuah pertandingan karena dinilai efektif dan mudah untuk dilakukan pesilat dalam pertandingan. Instrumen gerak dapat dilihat pada gambar.",
        ]);

        Form::create([
            'name' => 'Teknik Tendangan Samping',
            'parent_id' => 3,
            'images' => json_encode([
                'sikap_tendangan_samping_01',
                'sikap_tendangan_samping_02',
                'sikap_tendangan_samping_03',
                'sikap_tendangan_samping_04'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=XQ7G61ddvhQ',
            'view' => 'single',
            'description' => "Tendangan samping (T) adalah serangan yang dilakukan menggunakan salah satu kaki dengan mendorongkan kaki yang menendang dengan keras menyamping, sehingga bentuk akhir gerakan menyerupai huruf (T). Seperti tendangan lurus dan tendangan sabit, tendangan samping (T) sering diguakan pesilat dalam pertandingan karena dinilai sangat efektif karena hasil tendangannya begitu keras sehingga dapat menghasilkan efek yang signifikan jika terkena sasaran atau pesilat lain dalam pertandingan. Instrumen gerak tendangan samping (T) dapat dilihat pada gambar.",
        ]);


        Form::create([
            'name' => 'Teknik Pukulan',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_pukulan']),
            'view' => 'form_no_desc',
            'description' => NULL,
        ]);

        Form::create([
            'name' => 'Teknik Pukulan Lurus',
            'parent_id' => 16,
            'images' => json_encode([
                'sikap_pukulan_lurus_01',
                'sikap_pukulan_lurus_02',
                'sikap_pukulan_lurus_03'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=p5FRobwVApY',
            'view' => 'multiple',
            'description' => "Satu kaki dibuka ke depan, buka kedua telapak tangan dan hadapkan ke depan dengan tangan yang sama dengan kaki belakang berada sejajar dengan dada dan tangan yang sama dengan kaki depan berada di bawahnya.|Tangan kanan ditarik ke arah belakang. Tangan kiri berada di atas kepalan tangan kanan|Tangan kanan didorong keras lurus ke depan dengan ketinggian sama dengan ketinggian bahu. ",
        ]);

        Form::create([
            'name' => 'Teknik Pukulan Buku Jari',
            'parent_id' => 16,
            'images' => json_encode([
                'sikap_pukulan_buku_jari_01',
                'sikap_pukulan_buku_jari_02',
                'sikap_pukulan_buku_jari_03'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=z8Jq_3wDW3w',
            'view' => 'multiple',
            'description' => "Satu kaki dibuka ke depan, buka kedua telapak tangan dan hadapkan ke depan dengan tangan yang sama dengan kaki belakang berada sejajar dengan dada dan tangan yang sama dengan kaki depan berada di bawahnya.|Tangan kanan ditarik ke arah belakang. Tangan kiri berada di atas kepalan tangan kanan|Tangan kanan didorong keras lurus ke depan, kepalan dirubah menjadi buku jari",
        ]);

        Form::create([
            'name' => 'Teknik Pukulan Tusuk',
            'parent_id' => 16,
            'images' => json_encode([
                'sikap_pukulan_tusuk_01',
                'sikap_pukulan_tusuk_02',
                'sikap_pukulan_tusuk_03'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=2SdT1qIao-I',
            'view' => 'multiple',
            'description' => "Satu kaki dibuka ke depan, buka kedua telapak tangan dan hadapkan ke depan dengan tangan yang sama dengan kaki belakang berada sejajar dengan dada dan tangan yang sama dengan kaki depan berada di bawahnya.|Tangan kanan ditarik ke arah belakang. Tangan kiri berada di atas kepalan tangan kanan|Tangan kanan didorong keras lurus ke depan, kepalan dibuka menjadi tangan terbuka dengan ketinggian sama dengan ketinggian bahu.",
        ]);

        Form::create([
            'name' => 'Teknik Bukaan',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_bukaan']),
            'view' => 'form_no_desc',
            'description' => NULL,
        ]);

        Form::create([
            'name' => 'Teknik Bukaan 1 Tangan',
            'parent_id' => 20,
            'images' => json_encode([
                'sikap_bukaan_1_tangan_01',
                'sikap_bukaan_1_tangan_02',
                'sikap_bukaan_1_tangan_03'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=6zHIhi179QE',
            'view' => 'multiple',
            'description' => "Tangan kanan dipegang oleh lawan|Dekatkan tangan kanan yang dipegang oleh lawan ke arah dada sambil merubah arah ke arah luar/ kanan|Dorong tangan kanan yang dipegang oleh lawan dengan keras sehingga membuka kepalan/ pegangan lawan.",
        ]);

        Form::create([
            'name' => 'Teknik Bukaan 2 Tangan',
            'parent_id' => 20,
            'images' => json_encode([
                'sikap_bukaan_2_tangan_01',
                'sikap_bukaan_2_tangan_02',
                'sikap_bukaan_2_tangan_03'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=uG9zJYZxgJk',
            'view' => 'multiple',
            'description' => "Tangan kanan dipegang oleh lawan dengan 2 tangan|Dekatkan tangan kanan yang dipegang oleh lawan ke arah dada sambil merubah arah ke arah luar/ kanan dan memegang tangan lawan diikuti dengan tangan kiri yang mengambil tangan kiri lawan|Tarik kedua tangan lawan menyilang sehingga mengunci gerakan lawan.",
        ]);

        Form::create([
            'name' => 'Teknik Bantingan',
            'parent_id' => NULL,
            'images' => json_encode(['sikap_bantingan']),
            'view' => 'form_no_desc',
            'description' => NULL,
        ]);

        Form::create([
            'name' => 'Teknik Bantingan Depan Tendangan Lurus',
            'parent_id' => 23,
            'images' => json_encode([
                'sikap_bantingan_depan_tendangan_lurus_01',
                'sikap_bantingan_depan_tendangan_lurus_02',
                'sikap_bantingan_depan_tendangan_lurus_03',
                'sikap_bantingan_depan_tendangan_lurus_04'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=ZYavu0-H-1k',
            'view' => 'multiple',
            'description' => "Kedua pesilat berhadapan.|Pesilat 1 menendang dengan tendangan lurus. Pesilat 2 menangkap dengan tangan kanan bersamaan dengan tangan kiri yang mendorong tubuh pesilat 1.|Pesilat 2 mengangkat tangkapan tangan kanan dengan tinggi. Tangan kiri eterus mendorong dengan keras tubuh pesilat 1 sambil melangkahkan kaki kiri ke depan kaki tumpu pesilat 1.|Pesilat 2 menjatuhkan pesilat 1.",
        ]);

        Form::create([
            'name' => 'Teknik Bantingan Depan Tendangan Sabit',
            'parent_id' => 23,
            'images' => json_encode([
                'sikap_bantingan_depan_tendangan_lurus_01',
                'sikap_bantingan_depan_tendangan_lurus_02',
                'sikap_bantingan_depan_tendangan_sabit_03',
                'sikap_bantingan_depan_tendangan_sabit_04'
            ]),
            'youtube_url' => 'https://www.youtube.com/watch?v=0dIJmYruU0Q',
            'view' => 'multiple',
            'description' => "Kedua pesilat berhadapan.|Pesilat 1 menendang dengan tendangan sabit. Pesilat 2 menangkap dengan tangan kiri bersamaan dengan tangan kanan yang mendorong tubuh pesilat 1.|Pesilat 2 mengangkat tangkapan tangan kiri dengan tinggi. Tangan kanan terus mendorong dengan keras tubuh pesilat 1 sambil melangkahkan kaki kanan ke depan kaki tumpu pesilat 1.|Pesilat 2 menjatuhkan pesilat 1.",
        ]);

        // JURUS

        Form::create([
            'name' => 'Jurus Tunggal IPSI',
            'parent_id' => null,
            'images' => json_encode(["jurus/salam_pembuka_02"]),
            'youtube_url' => null,
            'view' => 'form_no_desc',
            'description' => null,
        ]);

        Form::create([
            'name' => 'Salam Pembukaan',
            'parent_id' => 26,
            'images' => json_encode(["jurus/salam_pembuka_01", "jurus/salam_pembuka_02", "jurus/salam_pembuka_03"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=6GSNRyaTUFc',
            'view' => 'multiple',
            'description' => '||||||||',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (1)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus1_01","jurus/jurus1_02","jurus/jurus1_03","jurus/jurus1_04","jurus/jurus1_05","jurus/jurus1_06","jurus/jurus1_07","jurus/jurus1_08"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=fu-9_nhKznE',
            'view' => 'multiple',
            'description' => 'Sikap pasang selup kanan||Tepuk - sisir - dobrak|Tangkap kanan tarik ke rusuk|Angkat lutut kiri - patahkan dengan dua tangan|Tendangan loncat kanan lurus/depan|Pukul kanan depan robah arah kiri|Pasang rendah kaki kiri depan|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (2)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus2_01","jurus/jurus2_02","jurus/jurus2_03","jurus/jurus2_04","jurus/jurus2_05","jurus/jurus2_06","jurus/jurus2_07","jurus/jurus2_08","jurus/jurus2_09","jurus/jurus2_10","jurus/jurus2_11"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=x7gCV-J1mco',
            'view' => 'multiple',
            'description' => '|||Interval balik arah kiri sikap pasang kuda-kuda belakang||Tangkapan kanan - sikut kiri samping||Pukulan depan kanan selewa, kaki kiri depan||tangkap - sikuan atas kiri|Gedig bawah duduk, lutut kanan di bawah|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (3)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus3_01","jurus/jurus3_02","jurus/jurus3_03","jurus/jurus3_04","jurus/jurus3_05","jurus/jurus3_06","jurus/jurus3_07","jurus/jurus3_08","jurus/jurus3_09","jurus/jurus3_10","jurus/jurus3_11","jurus/jurus3_12"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=Z_2Grknk3Xw',
            'view' => 'multiple',
            'description' => 'Interval langkah silang depan (kaki kanan)||Kaki mundur balik arah|Sikap pasang angkat kaki kanan||Gedig samping kanan|Pukulan samping kanan||Tendangan sabit kiri|||Sapuan rebah belakang|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (4)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus4_01","jurus/jurus4_02","jurus/jurus4_03","jurus/jurus4_04","jurus/jurus4_05","jurus/jurus4_06","jurus/jurus4_07","jurus/jurus4_08"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=01g8YPv0YH4',
            'view' => 'multiple',
            'description' => 'Interval sikap pasang melutut kiri(tangan) kiri atas,kaki kiri depan|Sikap pasang samping (tangan) kanan atas|Tangkis lenggang – langkah lipat|Pukulan samping kiri|Siku tangkis kanan selewah, kaki kiri depan|Tendangan T kanan|Colok kanan|Tangkis galang atas,posisi jari tangan terbuka|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (5)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus5_01","jurus/jurus5_02","jurus/jurus5_03","jurus/jurus5_04","jurus/jurus5_05","jurus/jurus5_06","jurus/jurus5_07"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=aYxkhitkdM0',
            'view' => 'multiple',
            'description' => 'Interval – arah samping kiri, sikap pasang serong kiri selewa||Pukulan totok kanan|Pukulan bandul kiri|Tangkis galang|Kaki rapat pukulan kanan|Elakan mundur|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (6)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus6_01","jurus/jurus6_02","jurus/jurus6_03","jurus/jurus6_04","jurus/jurus6_05","jurus/jurus6_06","jurus/jurus6_07","jurus/jurus6_08","jurus/jurus6_09"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=tzv4pXHZau4',
            'view' => 'multiple',
            'description' => 'Interval balik arah kanan ke belakang||Sikap pasang - kuda kuda depan kiri|Balik belah bumi angkat kaki kanan||Lompatan cengkeraman kanan|Sapuan tegak kanan - Gejig kanan|Sikap garuda samping kanan|Tangkisan dua tangan arah kiri|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (7)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus7_01","jurus/jurus7_02","jurus/jurus7_03","jurus/jurus7_04","jurus/jurus7_05","jurus/jurus7_06","jurus/jurus7_07","jurus/jurus7_08","jurus/jurus7_09","jurus/jurus7_10","jurus/jurus7_11","jurus/jurus7_12","jurus/jurus7_13"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=OQSCZFF-Zew',
            'view' => 'multiple',
            'description' => 'Sikap pasang menyamping|Kibas kanan|Sikuan kanan|Pukulan punggung tangan kanan|Tendangan T belakang kiri|Ales ke kanan|Sapuan rebah depan|Balik gejos|Sikap duduk|||Tendangan kuda gunting|Pasang sikap bawah|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (8)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus8_01","jurus/jurus8_02","jurus/jurus8_03","jurus/jurus8_04","jurus/jurus8_05","jurus/jurus8_06","jurus/jurus8_07","jurus/jurus8_08","jurus/jurus8_09","jurus/jurus8_10","jurus/jurus8_11","jurus/jurus8_12","jurus/jurus8_13","jurus/jurus8_14"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=ax_vjAlgeYE',
            'view' => 'multiple',
            'description' => 'Interval dua langkah maju ke depan (jongkok) untuk mengambil golok||Pasang mundur langkah silang (3 langkah)|||Pasang satu kaki (angkat kanan) |Tebang keluar - kedalam|Langkah serong (2 langkah) kaki satu depan||Tebang (bacok) keluar berbalik||Tusuk kanan|Melangkah berputar balik tebang - kuda kuda tengah,tangan terbuka|Tebas – gantung kaki kanan|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (9)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus9_01","jurus/jurus9_02","jurus/jurus9_03","jurus/jurus9_04","jurus/jurus9_05","jurus/jurus9_06","jurus/jurus9_07","jurus/jurus9_08","jurus/jurus9_09"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=8oIxBz2VLfg',
            'view' => 'multiple',
            'description' => 'Pasang kuda-kuda tengah (hadap depan) ||Balik pasang belakang|Kanan maju sabet bawah putar ke atas arah kanan||Posisi duduk||Tangkis kiri ganti pegangan sabet serong|Tangkis gagang golok kaki kanan diangkat|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (10)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus10_01","jurus/jurus10_02","jurus/jurus10_03","jurus/jurus10_04","jurus/jurus10_05","jurus/jurus10_06","jurus/jurus10_07","jurus/jurus10_08","jurus/jurus10_09","jurus/jurus10_12","jurus/jurus10_11","jurus/jurus10_10","jurus/jurus10_13"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=8oIxBz2VLfg',
            'view' => 'multiple',
            'description' => 'Pasang bawah melutut|Bacok samping arah depan|Tangkis lenggang kanan||Putar bacok bawah|Mundur bacok bawah|Beset leher - vkanan|Ganti pegangan sabet leher – tegak rapat|Balik belah bumi|Tangkisan golok dalam|Lompat sabet kiri|Lompat belah bumi|Pasang bawah|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (11)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus11_01","jurus/jurus11_03","jurus/jurus11_04","jurus/jurus11_05","jurus/jurus11_06","jurus/jurus11_07","jurus/jurus11_08","jurus/jurus11_09","jurus/jurus11_10","jurus/jurus11_11","jurus/jurus11_12","jurus/jurus11_13","jurus/jurus11_14","jurus/jurus11_15","jurus/jurus11_16","jurus/jurus11_17"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=-5cM_TcHoGk',
            'view' => 'multiple',
            'description' => 'Pasang mundur – 3 langkah silang ke belakang||||Sikap pasang kuda kuda tengah|Gebuk kanan|Sangga kaki kanan mundur|Tusuk kanan||Sabetan kaki bawah arah balik kiri|Putar punggung||Lompat putar|||Kemplang lantai',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (12)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus12_01","jurus/jurus12_02","jurus/jurus12_03","jurus/jurus12_04","jurus/jurus12_05"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=Bk8JJMlelZ4',
            'view' => 'multiple',
            'description' => 'Pasang tegak kiri depan|Lompat gebuk kanan|Kowet kanan|Sodok tusuk|Dayung mundur|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (13)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus13_01","jurus/jurus13_02","jurus/jurus13_03","jurus/jurus13_04","jurus/jurus13_05","jurus/jurus13_06"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=zcgh7cl6WDc',
            'view' => 'multiple',
            'description' => 'Pasang – samping kiri, tongkat samping belakang kanan|Tongkat putar – putar|Congkel|Kemplang samping kiri|Kemplang kower kanan|Elak garis|',
        ]);

        Form::create([
            'name' => 'Jurus Tunggal IPSI (14)',
            'parent_id' => 26,
            'images' => json_encode(["jurus/jurus14_01","jurus/jurus14_02","jurus/jurus14_03","jurus/jurus14_04","jurus/jurus14_05","jurus/jurus14_06","jurus/jurus14_07","jurus/jurus14_08","jurus/jurus14_09","jurus/jurus14_10","jurus/jurus14_11"]),
            'youtube_url' => 'https://www.youtube.com/watch?v=owsJSuRo9sw',
            'view' => 'multiple',
            'description' => 'Pasang kuda – kuda kanan||Berputar gebuk kanan|Kower egos|Tangkis sangga|Tendangan T|Balik kemplang||Putar baling bawah|Tangkis sisi kiri|Kower posisi sempok|',
        ]);
    }
}
