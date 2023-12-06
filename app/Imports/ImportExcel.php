<?php

namespace App\Imports;

use App\Models\NilaiSiswa;
use App\Models\NilaiAkhir;
use App\Models\Sumatif;
use App\Models\MataPelajaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportExcel implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $id_mapel;
    private $tingkat;
    private $kelas;
    private $sumatif;

    public function __construct($id_mapel, $tingkat, $kelas, $sumatif)
    {
        $this->id_mapel = $id_mapel;
        $this->tingkat = $tingkat;
        $this->kelas = $kelas;
        $this->sumatif = $sumatif;
    }
    public function model(array $row)
    {
        $sumatif = Sumatif::where('id_mapel', (int)$this->id_mapel)->orderBy('sumatif', 'ASC')->get();

        if ($row['nisn']) {
            for ($i = 0; $i < sizeof($sumatif); $i++) {
                NilaiSiswa::updateOrInsert(
                    [
                        'nisn' => $row['nisn'],
                        'id_mapel_kelas' => $this->id_mapel,
                        'id_sumatif' => $sumatif[$i]->id
                    ],
                    [
                        'nilai' => $row['sumatif_' . $sumatif[$i]->sumatif]
                    ]
                );
            }
        }
    }
}
