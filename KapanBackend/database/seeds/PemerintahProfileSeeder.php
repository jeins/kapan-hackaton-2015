<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PemerintahProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'email'         => 'jokowi@ri.co.id',
                'password'      => Hash::make('jokowi'),
                'fullname'      => 'Joko Widodo',
                'jabatan'       => 'Presiden Republik Indonesia',
                'jenis_pejabat' => 'negara',
                'tanggal_lahir' => '1961-06-21',
                'image'         => 'asset/pemerintah/jokowi.jpg',
                'deskripsi_profile' => 'Joko Widodo terlahir 53 tahun silam atau tepatnya pada tanggal 21 Juni 1961 di Surakarta Jawa Tengah. Setelah menyelesaikan kuliah di Fakultas Kehutanan Univesitas Gajah Mada Jokowi menekuni dunia bisnis Furniture. Sebagai kader PDIP pada tahun 2005 beliau berhasil menjabat sebagai Wali Kota Solo, berkat keberhasilannya dalam memimpin dan merubah wajah kota Solo maka Joko Widodo kembali berhasil memenangkan pemilihan Wali Kota untuk yang kedua kalinya pada 2010 dengan pencapaian suara melebihi 90% maka ia kembali menjabat sebagai Wali Kota Solo dengan di dampingi oleh F.X Hadi Rudyatmo.',
                'is_active'     => true
            ],
            [
                'email'         => 'jusufkalla@ri.co.id',
                'password'      => Hash::make('jusuf'),
                'fullname'      => 'Jusuf Kalla',
                'jabatan'       => 'Wakil Presiden Republik Indonesia',
                'jenis_pejabat' => 'negara',
                'tanggal_lahir' => '1942-05-15',
                'image'         => 'asset/pemerintah/jk.jpg',
                'deskripsi_profile' => 'Drs. H. Muhammad Jusuf Kalla atau sering ditulis Jusuf Kalla saja atau JK (lahir di Watampone, Kabupaten Bone, Sulawesi Selatan, 15 Mei 1942; umur 73 tahun) adalah Wakil Presiden Indonesia yang menjabat sejak 20 Oktober 2014. JK pernah menjabat sebagai Wakil Presiden pada periode 2004–2009 dan Ketua Umum Partai Golongan Karya pada periode yang sama. JK menjadi capres bersama Wiranto dalam Pilpres 2009 yang diusung Golkar dan Hanura.',
                'is_active'     => true
            ],
            [
                'email'         => 'susi_pudjiastuti@ri.co.id',
                'password'      => Hash::make('susi'),
                'fullname'      => 'Susi Pudjiastuti',
                'jabatan'       => 'Mentri Kelautan dan Perikanan',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1965-01-15',
                'image'         => 'asset/pemerintah/pudji.jpg',
                'deskripsi_profile' => 'Susi Pudjiastuti (lahir di Pangandaran, 15 Januari 1965; umur 50 tahun)adalah seorang Menteri Kelautan dan Perikanan dari Kabinet Kerja 2014-2019 yang juga pengusaha pemilik dan Presdir PT ASI Pudjiastuti Marine Product, eksportir hasil-hasil perikanan dan PT ASI Pudjiastuti Aviation atau penerbangan Susi Air dari Jawa Barat. Hingga awal tahun 2012, Susi Air mengoperasikan 50 pesawat dengan berbagai tipe seperti 32 Cessna Grand Caravan, 9 Pilatus PC-6 Porter dan 3 Piaggio P180 Avanti. Susi Air mempekerjakan 180 pilot, dengan 175 di antaranya merupakan pilot asing. Tahun 2012 Susi Air menerima pendapatan Rp300 miliar dan melayani 200 penerbangan perinti',
                'is_active'     => true
            ],
            [
                'email'         => 'lukman@ri.co.id',
                'password'      => Hash::make('lukman'),
                'fullname'      => 'Lukman Hakim Saifuddin',
                'jabatan'       => 'Mentri Agama',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1962-11-25',
                'image'         => 'asset/pemerintah/lukman.jpg',
                'deskripsi_profile' => 'Nama Lukman Hakim Saifuddin sempat disebut-sebut sebagai tokoh PPP yang layak menduduki jabatan menteri dalam kabinet 2009-2014. Namun dia lebih memilih berkiprah sebagai Wakil Ketua MPR. Dia sering dianggap sebagai kalangan muda Nahdlatul Ulama (NU) yang mewakili zamannya. Cerdas, modern, memiliki pemikiran yang terbuka, tapi juga berintegritas. Keterlibatannya di NU dimulai saat ditunjuk sebagai Wakil Sekretaris Pimpinan Pusat Lembaga Kemaslahatan Keluarga NU (LKKNU) 1985-1988. Selanjutnya pada tahun 1988-1999 Lukman berkecimpung di Lajnah Kajian dan Pengembangan Sumberdaya Manusia (Lakpesdam) NU sebagai Wakil Sekretaris, Kepala Bidang Administrasi Umum, Koordinator Program Kajian dan Penelitian, Koordinator Program Pendidikan dan Pelatihan, hingga menjadi Ketua Badan Pengurus periode 1996-1999.',
                'is_active'     => true
            ],
            [
                'email'         => 'ahmad_heryawan@ri.co.id',
                'password'      => Hash::make('aher'),
                'fullname'      => 'Ahmad Heryawan',
                'jabatan'       => 'Gubernur Jawa Barat',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1966-06-19',
                'image'         => 'asset/pemerintah/aher.jpg',
                'deskripsi_profile' => 'H. Ahmad Heryawan, Lc. (lahir di Sukabumi, Jawa Barat, 19 Juni 1966; umur 48 tahun) adalah seorang politikus Indonesia. Ia adalah Gubernur Jawa Barat terpilih untuk periode 2008-2013 bersama wakilnya Dede Yusuf. Pada Pilgub Jabar 2013, Ahmad Heryawan kembali dipercaya rakyat Jabar untuk memimpin selama lima tahun kedepan. Kali ini Heryawan didampingi aktor senior Deddy Mizwar sebagai wakilnya. Kehidupan awal: Ahmad Heryawan (Aher) lahir dari keluarga kecil di pinggiran kota Sukabumi. Sejak Aher kecil dia rutin membawa gorengan buatan tetangganya untuk dijual di sepanjang perjalanannya ke sekolah. Hal tersebut ia lakukan sejak bangku sekolah dasar hingga SMA.',
                'is_active'     => true
            ],
            [
                'email'         => 'danny@ri.co.id',
                'password'      => Hash::make('danny'),
                'fullname'      => 'Moh. Ramdhan Pomanto',
                'jabatan'       => 'Walikota Makassar',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1964-01-30',
                'image'         => 'asset/pemerintah/danny.jpg',
                'deskripsi_profile' => 'Ir. H. Mohammad Ramdhan Pomanto atau biasa dikenal sebagai Danny Pomanto (lahir di Makassar, Sulawesi Selatan, 30 Januari 1964; umur 51 tahun) adalah Wali Kota Makassar yang menjabat sejak 8 Mei 2014. Danny Pomanto yang berpasangan dengan Syamsu Rizal dan diusung oleh Partai Demokrat dan PBB ini keluar sebagai pemenang Pilkada Kota Makassar 2013 dengan perolehan suara 182.484 atau 31,18 persen mengungguli 9 pasangan lainnya',
                'is_active'     => true
            ],
            [
                'email'         => 'nur_hayanti@ri.co.id',
                'password'      => Hash::make('nurhayanti'),
                'fullname'      => 'Nurhayanti',
                'jabatan'       => 'Bupati Bogor',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1955-10-26',
                'image'         => 'asset/pemerintah/nurhayanti.jpg',
                'deskripsi_profile' => 'Hj. Nurhayanti, S.H., M.M., M.Si. (Lahir di Bogor, Jawa Barat, 26 Oktober 1955) adalah Bupati Bogor yang menggantikan Rahmat Yasin karena tersandung kasus korupsi. Pada tanggal 8 Desember 2014, Nurhayanti ditunjuk menjadi pelaksana tugas (Plt.) bupati Bogor. Nurhayanti resmi dilantik menjadi Bupati Bogor defenitif oleh Gubernur Jawa Barat Ahmad Heryawan di Gedung Sate Bandung, Jawa Barat, tanggal 16 Maret 2015',
                'is_active'     => true
            ],
            [
                'email'         => 'burhanuddin@ri.co.id',
                'password'      => Hash::make('burhanuddin'),
                'fullname'      => 'A. Burhanuddin Unru',
                'jabatan'       => 'Bupati Wajo',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1949-12-21',
                'image'         => 'asset/pemerintah/burhanuddin.jpg',
                'deskripsi_profile' => 'TIGA tahun sudah Andi Burhanuddin Unru memimpin Wajo. Anak mantan Bupati Wajo Kolonel Purnawirawan Andi Unru Memimpin ini memimpin wilayah dengan penduduk 386.694 jiwa. Kerja keras yang ditunjukkan Andi Bur, panggilan akrab-nya telah membuahkan hasil. “Saya sudah terbiasa dengan kerja keras, apalagi dari kecil kami digembleng dengan didikan dan disiplin militer. Orang tua saya Andi Unru adalah pekerja keras dan seorang militer sejati, ajarannya kuat melekat dalam diri seorang Andi Burhanuddin Unru,” begitu kata Andu Burhanuddin Unru.',
                'is_active'     => true
            ],
            [
                'email'         => 'widodo_pagelaran@ri.co.id',
                'password'      => Hash::make('widodo'),
                'fullname'      => 'Moh. Widodo',
                'jabatan'       => 'Kepala Desa Pagelaran',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1979-01-07',
                'image'         => 'asset/pemerintah/widodowid.jpg',
                'deskripsi_profile' => 'Moh. Widodo, SE, dilahirkan di Pagelaran, Malang pada 7 Januari 1979 dan merupakan kepala desa termudakadespagelaran copy kedua di Kecamatan Pagelaran. Moh. Widodo menamatkan pendidikannya di SD Negeri Pagelaran 2 (lulus tahun 1991), SMP Sunan Ampel Pagelaran (lulus 1994), SMA Taman Harapan Malang (lulus 1997). Program S-1 nya ditamatkan di STIE Malangkucecwara Malang (lulus tahun 2002). Putra dari H. Moch. Soeprapto dan Hj. Siti Azizah ini mengawali pengabdiannya sebagai pendidik di SMP Sunan Ampel Pagelaran,sekaligus sebagai Wakil Kepala SMP Sunan Ampel sejak tahun 2004 sampai dengan sekarang). Ketika dilaksanakan pemilihan kepala desa tahun 2007, ia terpilih sebagai Kepala Desa Pagelaran masa jabatan 2007 sampai 2013 dan kembali terpilih untuk masa jabatan 2013 sampai 2019 setelah terpilih dalam pilkades tanggal 6 April 2013 yang lalu.Suami dari Intan Firdausi ini saat ini dikaruniai dua orang putra/putri yaitu Moh. Lutfi Hutomo, 5 tahun, yang saat ini baru saja masuk taman kanak-kanak dan Maulidia Fillahi Sazkia, 2 tahun.',
                'is_active'     => true
            ],
            [
                'email'         => 'moelyani@ri.co.id',
                'password'      => Hash::make('moelyani'),
                'fullname'      => 'Moelyani',
                'jabatan'       => 'Kepada Desa Kademangan',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1960-04-13',
                'image'         => 'asset/pemerintah/moelyani.jpg',
                'deskripsi_profile' => 'Moeliyani dilahirkan di Kademangan, Malang pada 13 April 1960 dan merupakan muka lama di Desa Kademangan, karena pada tahun 1990 sampai tahun 2007 yang lalu merupakan Ketua Tim Penggerak PKK Desa Kademangan mendampingi suaminya, Marsono yang menjabat Kepala Desa Kademangan dua periode kala itu. Moeliyani menamatkan pendidikannya di SD Negeri Kademangan 1 dan SMP Sunan Ampel Pagelaran. Putri dari Loso dan Losini (Alm) yang sehari-hari berprofesi sebagai ibu rumah tangga ini dikenal dekat masyarakat ketika suaminya menjabat Kepala Desa Kademangan, sebab kala itu selama 16 tahun ia menjadi Ketua Tim Penggerak PKK di desanya. Moeliyani terpilih sebagai Kepala Desa Kademangan pada pilkades tanggal 6 April 2013 dan telah dilantikan oleh Bupati Malang pada tanggal 29 Mei 2013 yang lalu. Istri dari Marsono ini telah dikaruniai dua orang putri yaitu Ulfa Nur’aini, 18 tahun yang saat ini telah duduk di kelas dua SMA Al Rifai’e Gondanglegi dan Alfi Nur Azizah, 10 tahun, saat ini duduk di kelas tiga SD Negeri Kademangan 1.',
                'is_active'     => true
            ],
            [
                'email'         => 'gatot_pujo@ri.co.id',
                'password'      => Hash::make('gatot'),
                'fullname'      => 'Gatot Pujo Nugroho',
                'jabatan'       => 'Gubernur Sumatera Utara',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1962-06-11',
                'image'         => 'asset/pemerintah/gatot.jpg',
                'deskripsi_profile' => 'H. Gatot Pujo Nugroho, A.Md., S.T., M.Si. (lahir di Magelang, Jawa Tengah, 11 Juni 1962; umur 53 tahun)[1] adalah Gubernur Sumatera Utara sejak 14 Maret 2013.[2] Sebelumnya, Gatot merupakan Plt. Gubernur Sumatera Utara sejak 2011 hingga 2013 menggantikan Syamsul Arifin yang terjerat kasus korupsi. Gatot yang adalah politikus PKS ini, berduet dengan Syamsul Arifin pada Pemilukada Sumatera Utara 2008 dengan tagline Syampurno. Dalam Pilkada Sumut 2013, ia maju dan menggandeng Bupati Serdang Bedagai, H.T. Erry Nuradi sebagai wakilnya. Sesuai hasil hitung cepat sejumlah lembaga survei, pasangan nomor urut 5 yang membawa tagline Ganteng ini memenangkan pilkada satu putaran di angka 32,05%',
                'is_active'     => true
            ],
            [
                'email'         => 'mathius_awoitauw@ri.co.id',
                'password'      => Hash::make('mathius'),
                'fullname'      => 'Mathius Awoitauw',
                'jabatan'       => 'Bupati Jayapura',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1960-05-20',
                'image'         => 'asset/pemerintah/mathiusmath.jpg',
                'deskripsi_profile' => 'Mathius Awoitauw (lahir di Jayapura, Papua, 20 Mei 1960; umur 55 tahun)adalah Bupati Jayapura periode 2012-2017.',
                'is_active'     => true
            ],
            [
                'email'         => 'said_assagaff@ri.co.id',
                'password'      => Hash::make('said'),
                'fullname'      => 'Said Assagaff',
                'jabatan'       => 'Gubernur Sumatera Utara',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1953-11-29',
                'image'         => 'asset/pemerintah/said_assagaff.jpg',
                'deskripsi_profile' => 'Ir. H. Said Assagaff (lahir di Maluku, 29 November 1953; umur 62 tahun) adalah Gubernur Maluku yang menjabat sejak 10 Maret 2014. Said pernah menjabat sebagai Wakil Gubernur Maluku sejak 15 September 2008 hingga 15 September 2013, dan Sekretaris Daerah Provinsi Maluku hingga 2008.',
                'is_active'     => true
            ],
            [
                'email'         => 'rizal_effendi@ri.co.id',
                'password'      => Hash::make('rizal'),
                'fullname'      => 'Rizal Effendi',
                'jabatan'       => 'Walikota Balikpapam',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1958-08-27',
                'image'         => 'asset/pemerintah/rizal.jpg',
                'deskripsi_profile' => 'H.M. Rizal Effendi, SE (lahir di Balikpapan, 27 Agustus 1958; umur 57 tahun) adalah walikota Balikpapan ke-10 untuk masa jabatan 2011-2016. Sebelumnya, ia menjabat sebagai wakil walikota Balikpapan (2006-2011) yang berpasangan dengan walikota Imdaad Hamid.[1] Kemudian pada 29 Mei 2011 ia dilantik sebagai wali kota Balikpapan bersama wakil wali kota Balikpapan Heru Bambang setelah memenangkan Pilkada Kota Balikpapan yang digelar pada 24 Februari 2011',
                'is_active'     => true
            ],
            [
                'email'         => 'sutarmidji@ri.co.id',
                'password'      => Hash::make('sutarmidji'),
                'fullname'      => 'Sutarmidji',
                'jabatan'       => 'Walikota Pontianak',
                'jenis_pejabat' => 'daerah',
                'tanggal_lahir' => '1953-11-29',
                'image'         => 'asset/pemerintah/sutarmidji.jpg',
                'deskripsi_profile' => 'Sutarmidji (lahir di Pontianak, Kalimantan Barat, 29 November 1963; umur 52 tahun) adalah walikota Pontianak asal Kalimantan Barat. Dibawah kepemimpinannya, dia berhasil membuat beberapa kemajuan. Pada masa terakhir kepemimpinannya ini (2013), ia mengandeng Edy Rusdi Kamtono, Kepala Dinas PU Kota Pontianak kelak sebagai calon walikota Pontianak.',
                'is_active'     => true
            ]
        ];

        DB::table('profile_pemerintah')->insert($profiles);
    }
}
