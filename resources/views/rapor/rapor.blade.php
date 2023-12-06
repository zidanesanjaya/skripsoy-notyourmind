<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="id" lang="id">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Rapor Siswa</title>
  <meta name="author" content="ACER4750" />
  <link href="/css/rapor.css" rel="stylesheet" type="text/css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>
  <div>
    <table style="border-collapse: collapse; margin-left: 227.67pt;" cellspacing="0">
      <tr style="height: 9pt">
        <td style="width: 102pt">
          <p class="s1" style="text-indent: 0pt; line-height: 8pt; text-align: center">
            LAPORAN HASIL BELAJAR
          </p>
        </td>
      </tr>
      <tr style="height: 9pt">
        <td style="width: 102pt">
          <p class="s1" style="text-indent: 0pt; line-height: 8pt; text-align: center">
            (RAPOR)
          </p>
        </td>
      </tr>
    </table>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>

    <table style="border-collapse: collapse; margin-left: 80pt" cellspacing="0">
      <tr style="height: 12pt">
        <td style="width: 100pt; border-top-style: solid; border-top-width: 1pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Nama Peserta Didik
          </p>
        </td>
        <td style="width: 19pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 156pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->nama_lengkap}}
          </p>
        </td>
        <td style="width: 58pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Kelas
          </p>
        </td>
        <td style="width: 9pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 58pt; border-top-style: solid; border-top-width: 1pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->tingkat}}
          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="width: 100pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            NISN
          </p>
        </td>
        <td style="width: 19pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 156pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->nisn}}
          </p>
        </td>
        <td style="width: 58pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Fase
          </p>
        </td>
        <td style="width: 9pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 58pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->fase}}

          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="width: 100pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Sekolah
          </p>
        </td>
        <td style="width: 19pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 156pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->nama_sekolah}}
          </p>
        </td>
        <td style="width: 58pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Semester
          </p>
        </td>
        <td style="width: 9pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 58pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->semester}}
          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="width: 100pt; border-bottom-style: solid; border-bottom-width: 1pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            Alamat
          </p>
        </td>
        <td style="width: 19pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            :
          </p>
        </td>
        <td style="width: 156pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            {{$data_diri->alamat_sekolah}}

          </p>
        </td>
        <td style="width: 62pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            Tahun Pelajaran
          </p>
        </td>
        <td style="width: 9pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            :
          </p>
        </td>
        <td style="width: 58pt; border-bottom-style: solid; border-bottom-width: 1pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->tahun_pelajaran}}

          </p>
        </td>
      </tr>
    </table>

    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <table style="border-collapse: collapse; margin-left: 80pt" cellspacing="0">
      <tr style="height: 10pt;">
        <td style="
              width: 20pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s1" style="
                text-indent: 0pt;
                line-height: 10pt;
                text-align: center;
              ">
            No
          </p>
        </td>
        <td style="
              width: 97pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s1" style="
                text-indent: 0pt;
                line-height: 10pt;
                text-align: center;
              ">
            Mata Pelajaran
          </p>
        </td>
        <td style="
              width: 61pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s1" style="
                text-indent: 0pt;
                line-height: 10pt;
                text-align: center;
              ">
            Nilai Akhir
          </p>
        </td>
        <td style="
              width: 224pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s1" style="
                text-indent: 0pt;
                line-height: 10pt;
                text-align: center;
              ">
            Capaian Kompetensi
          </p>
        </td>
      </tr>
      @foreach($nilai AS $key => $data)
      <tr style="height: 40pt">
        <td style="
              width: 20pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            " rowspan="2">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="
                text-indent: 0pt;
                line-height: 80px;
                text-align: center;"
                >
            {{$key+1}}
          </p>
        </td>
        <td style="
              width: 97pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            " rowspan="2">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="
                text-indent: 0pt;
                line-height: 80px;
                text-align: center;
              ">
            {{$data->nama_mapel}}
          </p>
        </td>
        <td style="
              width: 61pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            " rowspan="2">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="
                padding-left: 25pt;
                padding-right: 24pt;
                text-indent: 0pt;
                text-align: center; display: inline-block; vertical-align: middle; line-height: 8;
              ">
            {{$data->nilai_akhir ?? 0}}
          </p>
        </td>
        <td style="
              width: 224pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="
                padding-left: 1pt;
                padding-right: 8pt;
                text-indent: 0pt;
                line-height: 106%;
                text-align: left;
              ">
            {{$data->high_deskripsi ?? '-'}}
          </p>
        </td>
      </tr>
      <tr style="height: 40pt">
        <td style="
              width: 224pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="
                padding-left: 1pt;
                text-indent: 0pt;
                line-height: 106%;
                text-align: left;
              ">
            {{$data->low_deskripsi ?? '-'}}

          </p>
        </td>
      </tr>
      @if(($key+1) == 7)
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>
      <p style="text-indent: 0pt; text-align: left"><br /></p>

      <table style="border-collapse: collapse; margin-left: 7.519pt" cellspacing="0">
        <tr style="height: 12pt">
          <td style="width: 100pt; border-top-style: solid; border-top-width: 1pt; border-left-style: solid; border-left-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              Nama Peserta Didik
            </p>
          </td>
          <td style="width: 19pt; border-top-style: solid; border-top-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              :
            </p>
          </td>
          <td style="width: 156pt; border-top-style: solid; border-top-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              {{$data_diri->nama_lengkap}}
            </p>
          </td>
          <td style="width: 58pt; border-top-style: solid; border-top-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              Kelas
            </p>
          </td>
          <td style="width: 9pt; border-top-style: solid; border-top-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              :
            </p>
          </td>
          <td style="width: 58pt; border-top-style: solid; border-top-width: 1pt; border-right-style: solid; border-right-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              {{$data_diri->tingkat}}
            </p>
          </td>
        </tr>
        <tr style="height: 12pt">
          <td style="width: 100pt; border-left-style: solid; border-left-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              NISN
            </p>
          </td>
          <td style="width: 19pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              :
            </p>
          </td>
          <td style="width: 156pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              {{$data_diri->nisn}}
            </p>
          </td>
          <td style="width: 58pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              Fase
            </p>
          </td>
          <td style="width: 9pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              :
            </p>
          </td>
          <td style="width: 58pt; border-right-style: solid; border-right-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              D

            </p>
          </td>
        </tr>
        <tr style="height: 12pt">
          <td style="width: 100pt; border-left-style: solid; border-left-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              Sekolah
            </p>
          </td>
          <td style="width: 19pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              :
            </p>
          </td>
          <td style="width: 156pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              {{$data_diri->nama_sekolah}}
            </p>
          </td>
          <td style="width: 58pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              Semester
            </p>
          </td>
          <td style="width: 9pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              :
            </p>
          </td>
          <td style="width: 58pt; border-right-style: solid; border-right-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              {{$data_diri->semester}}
            </p>
          </td>
        </tr>
        <tr style="height: 12pt">
          <td style="width: 100pt; border-bottom-style: solid; border-bottom-width: 1pt; border-left-style: solid; border-left-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
              Alamat
            </p>
          </td>
          <td style="width: 19pt; border-bottom-style: solid; border-bottom-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
              :
            </p>
          </td>
          <td style="width: 156pt; border-bottom-style: solid; border-bottom-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
              {{$data_diri->alamat_sekolah}}

            </p>
          </td>
          <td style="width: 62pt; border-bottom-style: solid; border-bottom-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
              Tahun Pelajaran
            </p>
          </td>
          <td style="width: 9pt; border-bottom-style: solid; border-bottom-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
              :
            </p>
          </td>
          <td style="width: 58pt; border-bottom-style: solid; border-bottom-width: 1pt; border-right-style: solid; border-right-width: 1pt;">
            <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
              {{$data_diri->tahun_pelajaran}}

            </p>
          </td>
        </tr>
      </table>
      @endif
      @endforeach


    </table>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>

    <table style="border-collapse: collapse; margin-left: 80pt" cellspacing="0">
      <tr style="height: 12pt">
        <td style="width: 100pt; border-top-style: solid; border-top-width: 1pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Nama Peserta Didik
          </p>
        </td>
        <td style="width: 19pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 156pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->nama_lengkap}}
          </p>
        </td>
        <td style="width: 58pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Kelas
          </p>
        </td>
        <td style="width: 9pt; border-top-style: solid; border-top-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 58pt; border-top-style: solid; border-top-width: 1pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->tingkat}}
          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="width: 100pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            NISN
          </p>
        </td>
        <td style="width: 19pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 156pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->nisn}}
          </p>
        </td>
        <td style="width: 58pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Fase
          </p>
        </td>
        <td style="width: 9pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 58pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            D

          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="width: 100pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Sekolah
          </p>
        </td>
        <td style="width: 19pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 156pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->nama_sekolah}}
          </p>
        </td>
        <td style="width: 58pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            Semester
          </p>
        </td>
        <td style="width: 9pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            :
          </p>
        </td>
        <td style="width: 58pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->semester}}
          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="width: 100pt; border-bottom-style: solid; border-bottom-width: 1pt; border-left-style: solid; border-left-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            Alamat
          </p>
        </td>
        <td style="width: 19pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            :
          </p>
        </td>
        <td style="width: 156pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            {{$data_diri->alamat_sekolah}}

          </p>
        </td>
        <td style="width: 62pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            Tahun Pelajaran
          </p>
        </td>
        <td style="width: 9pt; border-bottom-style: solid; border-bottom-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt; padding-bottom: 1pt">
            :
          </p>
        </td>
        <td style="width: 58pt; border-bottom-style: solid; border-bottom-width: 1pt; border-right-style: solid; border-right-width: 1pt;">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; padding-top: 3pt;">
            {{$data_diri->tahun_pelajaran}}
          </p>
        </td>
      </tr>
    </table>

    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>

    <table style="border-collapse: collapse; margin-left: 80pt" cellspacing="0">
      <tr style="height: 12pt">
        <td style="
              width: 20pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s1" style="
                padding-top: 1pt;
                padding-left: 5pt;
                text-indent: 0pt;
                text-align: left; padding-top: 1pt;
              ">
            No
          </p>
        </td>
        <td style="
              width: 97pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s1" style="
                padding-top: 1pt;
                padding-left: 21pt;
                text-indent: 0pt;
                text-align: left; padding-top: 1pt;
              ">
            Ekstrakurikuler
          </p>
        </td>
        <td style="
              width: 285pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s1" style="
                padding-left: 142pt;
                padding-right: 100pt;
                text-indent: 0pt;
                text-align: center; padding-top: 1pt;
              ">
            Keterangan
          </p>
        </td>
      </tr>
      @foreach(range(0, 4) as $key)

      <tr style="height: 31pt">
        <td style="
              width: 20pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="padding-left: 8pt; text-indent: 0pt; text-align: left">
            {{$key+1}}
          </p>
        </td>
        <td style="
              width: 97pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; text-align: left">
            @php
            $ekstra = "ekstrakulikuler".($key+1);
            $nilai = "nilai_ekstra".($key+1);
            @endphp
            {{$nilai_ekstra[0]->$ekstra ?? '-'}}
          </p>
        </td>
        <td style="
              width: 285pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; text-align: left">
            {{$nilai_ekstra[0]->$nilai ?? 0}}
          </p>
        </td>
      </tr>
      @endforeach
    </table>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <table style="border-collapse: collapse; margin-left: 80pt" cellspacing="0">
      <tr style="height: 12pt">
        <td style="
              width: 209pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            " colspan="3">
          <p class="s1" style="
                padding-left: 77pt;
                padding-right: 76pt;
                text-indent: 0pt;
                text-align: center; padding-top: 1pt;
              ">
            Ketidakhadiran
          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="
              width: 114pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
            ">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; text-align: left">
            Sakit
          </p>
        </td>
        <td style="
              width: 60pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
            ">
          <p class="s2" style="
                padding-top: 1pt;
                padding-right: 4pt;
                text-indent: 0pt;
                text-align: right;
              ">
            {{$result[0]->sakit ?? 0}}
          </p>
        </td>
        <td style="
              width: 35pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s2" style="
                padding-top: 1pt;
                padding-left: 4pt;
                text-indent: 0pt;
                text-align: left;
              ">
            hari
          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="
              width: 114pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
            ">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; text-align: left">
            Izin
          </p>
        </td>
        <td style="
              width: 60pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
            ">
          <p class="s2" style="
                padding-top: 1pt;
                padding-right: 4pt;
                text-indent: 0pt;
                text-align: right;
              ">
            {{$result[0]->ijin ?? 0}}
          </p>
        </td>
        <td style="
              width: 35pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s2" style="
                padding-top: 1pt;
                padding-left: 4pt;
                text-indent: 0pt;
                text-align: left;
              ">
            hari
          </p>
        </td>
      </tr>
      <tr style="height: 12pt">
        <td style="
              width: 114pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-left-style: solid;
              border-left-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
            ">
          <p class="s2" style="padding-left: 1pt; text-indent: 0pt; text-align: left">
            Tanpa Keterangan
          </p>
        </td>
        <td style="
              width: 60pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
            ">
          <p class="s2" style="
                padding-top: 1pt;
                padding-right: 4pt;
                text-indent: 0pt;
                text-align: right;
              ">
            {{$result[0]->alpha ?? 0}}
          </p>
        </td>
        <td style="
              width: 35pt;
              border-top-style: solid;
              border-top-width: 1pt;
              border-bottom-style: solid;
              border-bottom-width: 1pt;
              border-right-style: solid;
              border-right-width: 1pt;
            ">
          <p class="s2" style="
                padding-top: 1pt;
                padding-left: 4pt;
                text-indent: 0pt;
                text-align: left;
              ">
            hari
          </p>
        </td>
      </tr>
    </table>

    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <p style="text-indent: 0pt; text-align: left"><br /></p>

    <div style="padding-left: 100pt;">
      <table style="border-collapse: collapse" cellspacing="0">
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 140pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">
              {{$data_diri->tanggal}}
            </p>
          </td>
        </tr>
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">
              Orang Tua/Wali
            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center;">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">
              Wali Kelas
            </p>
          </td>
        </tr>
        <tr style="height: 40pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
        </tr>
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">
              ...........................................
            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center; text-decoration: underline;">
              {{$data_diri->nama_wali_kelas ?? null}}
            </p>
          </td>
        </tr>
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; padding-left: 10pt;">
              NBM. {{$data_diri->nbm_wali_kelas}}
            </p>
          </td>
        </tr>
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">
              Mengetahui,
            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
        </tr>
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">
              Kepala Sekolah
            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
        </tr>
        <tr style="height: 40pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
        </tr>
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center; text-decoration: underline;">
              {{$data_diri->nama_kepala ?? null}}
            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
        </tr>
        <tr style="height: 9pt">
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; padding-left: 39pt;">
              NBM. {{$data_diri->nbm_kepala}}
            </p>
          </td>
          <td style="width: 96pt">
            <p class="s2" style="text-indent: 0pt; line-height: 8pt; text-align: center">

            </p>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
</body>

</html>