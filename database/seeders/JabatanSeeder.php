<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [['unit_kerja' => 'Sekretariat Daerah'],
        ['unit_kerja' => 'Dinas Pendidikan, Kebudayaan, Kepemudaan dan Olah Raga'],
        ['unit_kerja' => 'Dinas Kesehatan'],
        ['unit_kerja' => 'Dinas Lingkungan Hidup, Perumahan dan Kawasan Permukiman'],
        ['unit_kerja' => 'Dinas Pekerjaan Umum dan Penataan Ruang'],
        ['unit_kerja' => 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran'],
        ['unit_kerja' => 'Badan Penanggulangan Bencana Daerah'],
        ['unit_kerja' => 'Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak'],
        ['unit_kerja' => 'Dinas Penanaman Modal, Pelayanan Terpadu Satu Pintu dan Tenaga Kerja'],
        ['unit_kerja' => 'Dinas Ketahanan Pangan, Pertanian dan Perikanan'],
        ['unit_kerja' => 'Inspektorat'],
        ['unit_kerja' => 'Dinas Kependudukan dan Pencatatan Sipil'],
        ['unit_kerja' => 'Dinas Pengendalian Penduduk dan Keluarga Berencana, Pemberdayaan Masyarakat dan Desa'],
        ['unit_kerja' => 'Dinas Perhubungan'],
        ['unit_kerja' => 'Dinas Komunikasi dan Informatika'],
        ['unit_kerja' => 'Dinas Koperasi, Usaha Kecil Menengah, Perindustrian dan Perdagangan'],
        ['unit_kerja' => 'Dinas Perpustakaan dan Kearsipan'],
        ['unit_kerja' => 'Dinas Pariwisata'],
        ['unit_kerja' => 'Rumah Sakit Umum Daerah'],
        ['unit_kerja' => 'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia'],
        ['unit_kerja' => 'Badan Pengelolaan Keuangan dan Aset Daerah'],
        ['unit_kerja' => 'Sekretariat Dewan Perwakilan Rakyat Daerah'],
        ['unit_kerja' => 'Badan Pendapatan Daerah'],
        ['unit_kerja' => 'Badan Perencanaan Pembangunan Daerah'],
        ['unit_kerja' => 'Kecamatan Pemenang'],
        ['unit_kerja' => 'Kecamatan Tanjung'],
        ['unit_kerja' => 'Kecamatan Gangga'],
        ['unit_kerja' => 'Kecamatan Kayangan'],
        ['unit_kerja' => 'Kecamatan Bayan'],
        ['unit_kerja' => 'Badan Kesatuan Bangsa dan Politik']];
        foreach ($arr as $loop) {
        DB::table('unit_kerja')->insert(
            $loop
        );
    }
}
}
