<?php

use Illuminate\Database\Seeder;

class InfoProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'profile_pemerintah_id' => '1',
                'nama'              => 'Pengadaan Tol Laut',
                'jenis'             => 'negara',
                'deskripsi'         => 'Tol laut adalah menyiapkan kapal-kapal besar sebagai alat distribusi barang, mulai dari Pulau Sumatera hingga Papua dan juga  juga menyediakan pelabuhan-pelabuhan dalam sebagai tempat kapal-kapal besar itu. Berarti, ide membuat “tol laut” turut mengupayakan revitalisasi pelabuhan di Indonesia',
                'outcome'           => 'terobosan untuk masalah perbedaan harga barang satu wilayah dengan wilayah lain. Selama ini, perbedaan harga barang jadi penyebab pembangunan tidak merata.',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '500000000000',
                'waktu_pelaksanaan' => '2015-15-10 00:00:00',
                'jadwal_realisasi'  => '2015-10-10  00:00:00',
                'images'            => 'asset/project/tollaut.jpg'
            ],
            [
                'profile_pemerintah_id' => '5',
                'nama'              => 'Pembangunan Bandara Internasional Jawa barat',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Bandara Internasional Jawa Barat terletak di Kertajati, sekitar 97 km dari Bandung, ibu kota Provinsi Jawa Barat Indonesia. Ditempatkan strategis di sekitar daerah pembangunan Jawa Barat, aksesibilitas PT. BIJB dijamin dengan memiliki dua jalan raya dan kereta api yang menghubungkan Bandung, Kertajati, dan Cirebon; Cisumdawu Jalan Tol untuk menghubungkan Bandung dan Kertajati; Jalan tol Cikapali yang menghubungkan Kertajati dan Karawang Industrial Zone; dan juga memiliki hubungan langsung dengan Pelabuhan Cirebon.',
                'outcome'           => 'Bandara ini akan memberikan dampak positif bagi perekonomian Jabar, termasuk kemajuan wilayah Jabar Bagian timur',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '213124.123.1512',
                'waktu_pelaksanaan' => '2014-06-01 00:00:00',
                'jadwal_realisasi'  => '2018-03-10 00:00:00',
                'images'            => 'asset/project/bandara_bijb.jpg',
            ],
            [
                'profile_pemerintah_id' => '6',
                'nama'              => 'Jalan layang bebas hambatan',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Badan kerja sama internasional pemerintah Jepang, Japan Internasional Cooperation Agency (JICA) dan Nusantara Infrastructure, pengelola Jalan Tol Sesi Empat (JTSE) mengagendakan pembangunan jalan layang bebas hambatan (tol) dari Jalan Andi Pangerang Pettarani ke Jalan Metro Tanjung Bunga.',
                'outcome'           => 'Keputusan mengambil jalan AP Pettarani karena lokasi ini kawasan padat kendaraan apalagi pada jam pulang kerja, jalan layang akan mengikuti ruang kosong atau yang paling kurang risiko pembebasannya sehinga jaraknya masih fluktuatif total antara 10 - 12 km',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '360000000000000',
                'waktu_pelaksanaan' => '2015-15-10 00:00:00',
                'jadwal_realisasi'  => '2020-01-01  00:00:00',
                'images'            => 'asset/project/tol_makassar.jpg'
            ],
            [
                'profile_pemerintah_id' => '6',
                'nama'              => 'Makassar New Port ',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Jokowi menjelaskan, cost barang di Indonesia bisa tiga kali lebih mahal dari negara lain. Salah satu penyebabnya karena jalur untuk mendistibusikan barang cukup sulit. Maka dengan kelancaran jalur tol laut, dipastikan jalur pendistibusian barang dari satu tempat ke tempat lain, meskipun daerah tersebut cukup jauh akan menjadi mudah. Kemudahan ini sudah tentu akan menekan harga pokok berbagai barang. Selain itu, kemudahan distribusi ke berbagai daerah akan membuat indonesia bisa bersaing dalam Masyarakat Ekonomi Asean (MEA). Sehingga diharap keberadaan Indonesia dalam MEA bukan membuat negara ini tertekan, tapi membuat Indonesia bersaing dengan negara maju lainnya.',
                'outcome'           => 'Jokowi mengatakan, pembangunan Makassar New Port merupakan salah satu upaya pemerintah untuk menciptakan jalur tol laut semakin baik. Harapannya, dengan Makassar New Port jalur tol laut di kawasan Timur Indonesia semakin baik. Terlebih kawasan Makassar merupakan jalur penghubung dari Barat Indonesia ke Timur Indonesia.',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '213124.123.1512',
                'waktu_pelaksanaan' => '2014-06-01 00:00:00',
                'jadwal_realisasi'  => '2018-03-10 00:00:00',
                'images'            => 'asset/project/port_makassar.jpg',
            ],
            [
                'profile_pemerintah_id' => '7',
                'nama'              => 'Jalan layang bebas hambatan',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Badan kerja sama internasional pemerintah Jepang, Japan Internasional Cooperation Agency (JICA) dan Nusantara Infrastructure, pengelola Jalan Tol Sesi Empat (JTSE) mengagendakan pembangunan jalan layang bebas hambatan (tol) dari Jalan Andi Pangerang Pettarani ke Jalan Metro Tanjung Bunga.',
                'outcome'           => 'Keputusan mengambil jalan AP Pettarani karena lokasi ini kawasan padat kendaraan apalagi pada jam pulang kerja, jalan layang akan mengikuti ruang kosong atau yang paling kurang risiko pembebasannya sehinga jaraknya masih fluktuatif total antara 10 - 12 km',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '360000000000000',
                'waktu_pelaksanaan' => '2015-15-10 00:00:00',
                'jadwal_realisasi'  => '2020-01-01  00:00:00',
                'images'            => 'asset/project/tol_makassar.jpg'
            ],
            [
                'profile_pemerintah_id' => '8',
                'nama'              => 'Taman Bunga Wajo',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Taman Bunga Wajo cost barang di Indonesia bisa tiga kali lebih mahal dari negara lain. Salah satu penyebabnya karena jalur untuk mendistibusikan barang cukup sulit. Maka dengan kelancaran jalur tol laut, dipastikan jalur pendistibusian barang dari satu tempat ke tempat lain, meskipun daerah tersebut cukup jauh akan menjadi mudah. Kemudahan ini sudah tentu akan menekan harga pokok berbagai barang. Selain itu, kemudahan distribusi ke berbagai daerah akan membuat indonesia bisa bersaing dalam Masyarakat Ekonomi Asean (MEA). Sehingga diharap keberadaan Indonesia dalam MEA bukan membuat negara ini tertekan, tapi membuat Indonesia bersaing dengan negara maju lainnya.',
                'outcome'           => 'Taman Bunga Wajo pembangunan Makassar New Port merupakan salah satu upaya pemerintah untuk menciptakan jalur tol laut semakin baik. Harapannya, dengan Makassar New Port jalur tol laut di kawasan Timur Indonesia semakin baik. Terlebih kawasan Makassar merupakan jalur penghubung dari Barat Indonesia ke Timur Indonesia.',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '213124.123.1512',
                'waktu_pelaksanaan' => '2014-06-01 00:00:00',
                'jadwal_realisasi'  => '2018-03-10 00:00:00',
                'images'            => 'asset/project/taman_bunga.jpg',
            ],
            [
                'profile_pemerintah_id' => '9',
                'nama'              => 'Gedung Somay',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Gedung Somay Badan kerja sama internasional pemerintah Jepang, Japan Internasional Cooperation Agency (JICA) dan Nusantara Infrastructure, pengelola Jalan Tol Sesi Empat (JTSE) mengagendakan pembangunan jalan layang bebas hambatan (tol) dari Jalan Andi Pangerang Pettarani ke Jalan Metro Tanjung Bunga.',
                'outcome'           => 'Keputusan mengambil jalan AP Pettarani karena lokasi ini kawasan padat kendaraan apalagi pada jam pulang kerja, jalan layang akan mengikuti ruang kosong atau yang paling kurang risiko pembebasannya sehinga jaraknya masih fluktuatif total antara 10 - 12 km',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '360000000000000',
                'waktu_pelaksanaan' => '2015-15-10 00:00:00',
                'jadwal_realisasi'  => '2020-01-01  00:00:00',
                'images'            => 'asset/project/gedung1.jpg'
            ],
            [
                'profile_pemerintah_id' => '10',
                'nama'              => 'Gedung Besar Kademangan',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Gedung Besar Kademangan Wajo cost barang di Indonesia bisa tiga kali lebih mahal dari negara lain. Salah satu penyebabnya karena jalur untuk mendistibusikan barang cukup sulit. Maka dengan kelancaran jalur tol laut, dipastikan jalur pendistibusian barang dari satu tempat ke tempat lain, meskipun daerah tersebut cukup jauh akan menjadi mudah. Kemudahan ini sudah tentu akan menekan harga pokok berbagai barang. Selain itu, kemudahan distribusi ke berbagai daerah akan membuat indonesia bisa bersaing dalam Masyarakat Ekonomi Asean (MEA). Sehingga diharap keberadaan Indonesia dalam MEA bukan membuat negara ini tertekan, tapi membuat Indonesia bersaing dengan negara maju lainnya.',
                'outcome'           => 'Gedung Besar Kademangan pembangunan Makassar New Port merupakan salah satu upaya pemerintah untuk menciptakan jalur tol laut semakin baik. Harapannya, dengan Makassar New Port jalur tol laut di kawasan Timur Indonesia semakin baik. Terlebih kawasan Makassar merupakan jalur penghubung dari Barat Indonesia ke Timur Indonesia.',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '213124.123.1512',
                'waktu_pelaksanaan' => '2014-06-01 00:00:00',
                'jadwal_realisasi'  => '2018-03-10 00:00:00',
                'images'            => 'asset/project/gedung2.jpg',
            ],
            [
                'profile_pemerintah_id' => '11',
                'nama'              => 'Ruang Guru',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Gedung Somay Badan kerja sama internasional pemerintah Jepang, Japan Internasional Cooperation Agency (JICA) dan Nusantara Infrastructure, pengelola Jalan Tol Sesi Empat (JTSE) mengagendakan pembangunan jalan layang bebas hambatan (tol) dari Jalan Andi Pangerang Pettarani ke Jalan Metro Tanjung Bunga.',
                'outcome'           => 'Keputusan mengambil jalan AP Pettarani karena lokasi ini kawasan padat kendaraan apalagi pada jam pulang kerja, jalan layang akan mengikuti ruang kosong atau yang paling kurang risiko pembebasannya sehinga jaraknya masih fluktuatif total antara 10 - 12 km',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '360000000000000',
                'waktu_pelaksanaan' => '2015-15-10 00:00:00',
                'jadwal_realisasi'  => '2020-01-01  00:00:00',
                'images'            => 'asset/project/bendungan1.jpg'
            ],
            [
                'profile_pemerintah_id' => '12',
                'nama'              => 'Bendungan Kecil Melayu',
                'jenis'             => 'daerah',
                'deskripsi'         => 'Gedung Besar Kademangan Wajo cost barang di Indonesia bisa tiga kali lebih mahal dari negara lain. Salah satu penyebabnya karena jalur untuk mendistibusikan barang cukup sulit. Maka dengan kelancaran jalur tol laut, dipastikan jalur pendistibusian barang dari satu tempat ke tempat lain, meskipun daerah tersebut cukup jauh akan menjadi mudah. Kemudahan ini sudah tentu akan menekan harga pokok berbagai barang. Selain itu, kemudahan distribusi ke berbagai daerah akan membuat indonesia bisa bersaing dalam Masyarakat Ekonomi Asean (MEA). Sehingga diharap keberadaan Indonesia dalam MEA bukan membuat negara ini tertekan, tapi membuat Indonesia bersaing dengan negara maju lainnya.',
                'outcome'           => 'Gedung Besar Kademangan pembangunan Makassar New Port merupakan salah satu upaya pemerintah untuk menciptakan jalur tol laut semakin baik. Harapannya, dengan Makassar New Port jalur tol laut di kawasan Timur Indonesia semakin baik. Terlebih kawasan Makassar merupakan jalur penghubung dari Barat Indonesia ke Timur Indonesia.',
                'lokasi'            => '{long:123, lat:456}',
                'status_project'    => 0,
                'biaya'             => '213124.123.1512',
                'waktu_pelaksanaan' => '2014-06-01 00:00:00',
                'jadwal_realisasi'  => '2018-03-10 00:00:00',
                'images'            => 'asset/project/gedung2.jpg',
            ]
        ];

        DB::table('project_info')->insert($projects);
    }
}
