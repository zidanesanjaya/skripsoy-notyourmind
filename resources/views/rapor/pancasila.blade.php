<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pancasila</title>

  <style>
    .bgCover {
      width: height;
      height: 700px;
      /* height: 700px; */
      position: absolute;
      background-size: cover;
      /* background-blend-mode: overlay; */
      opacity: 0.1;
      margin-top: 24%;
      margin-left: 2%;
      background-repeat: repeat;
    }
  </style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
  <div style="width: 514.5pt;">
    <img class="bgCover" src="/images/logohead.png" alt="">
    <table style="border-collapse: collapse; margin-left: 80pt;" cellspacing="0">
      <tr style="height: 50pt; width: 200pt;">
        <td style="width: 70pt;">
          <img src="/images/logohead.png" alt="" style="width: height; height: 65px;">
        </td>
        <td style="width: 100%; font-weight: bold; font-family: Arial, Helvetica, sans-serif; text-align: center;">
          RAPOR PROJEK<br> PENGUATAN PROFIL PELAJAR PANCASILA
        </td>
        <td style="width: 60pt; text-align: end;">
          <img src="/images/stiker.png" alt="" style="width: height; height: 50px;">
        </td>
      </tr>
    </table>

    <br><br>

    <table style="border-collapse: collapse; margin-left: 55pt;" cellspacing="0">
      <tr>
        <td style="width: 100pt;">
          Nama Sekolah
        </td>
        <td style="width: 6pt;">
          :
        </td>
        <td style="width: 200pt;">
          {{$data_diri->nama_sekolah}}
        </td>
        <td style="width: 40pt;">
          Kelas
        </td>
        <td style="width: 6pt;">
          :
        </td>
        <td style="width: 80pt;">
          {{$data_diri->tingkat}}
        </td>
      </tr>
      <tr>
        <td style="width: 100pt;">
          Alamat Sekolah
        </td>
        <td style="width: 6pt;">
          :
        </td>
        <td style="width: 200pt;">
          {{$data_diri->alamat_sekolah}}
        </td>
        <td style="width: 40pt;">
          Fase
        </td>
        <td style="width: 6pt;">
          :
        </td>
        <td style="width: 80pt;">
          {{$data_diri->fase}}
        </td>
      </tr>
      <tr>
        <td style="width: 100pt;">
          Nama Siswa
        </td>
        <td style="width: 6pt;">
          :
        </td>
        <td style="width: 200pt;">
          {{$data_diri->nama_lengkap}}
        </td>
        <td style="width: 40pt;">
          TA
        </td>
        <td style="width: 6pt;">
          :
        </td>
        <td style="width: 80pt;">
          {{$data_diri->tahun_pelajaran}}
        </td>
      </tr>
      <tr>
        <td style="width: 100pt;">
          NISN
        </td>
        <td style="width: 6pt;">
          :
        </td>
        <td style="width: 200pt;">
          {{$data_diri->nisn}}
        </td>
        <td style="width: 40pt;">
        </td>
        <td style="width: 6pt;">
        </td>
        <td style="width: 80pt;">
        </td>
      </tr>
    </table>

    <br>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller;" cellspacing="0">
      <tr>
        <td style="height: 25pt; width: 375pt; padding-left: 30pt; font-weight: bold;">
          PROYEK 1: {{$pancasila[0]->nama_project ?? null}}
        </td>
      </tr>
      <tr>
        <td style="height: 110pt; width: 50pt; text-align: justify; border-style: solid; vertical-align: text-top;">
          {{$pancasila[0]->deskripsi ?? null}}
        </td>
      </tr>
    </table>

    <br>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller;" cellspacing="0">
      <tr>
        <td style="height: 25pt; width: 375pt; padding-left: 30pt; font-weight: bold;">
          PROYEK 2: {{$pancasila[1]->nama_project ?? null}}
        </td>
      </tr>
      <tr>
        <td style="height: 110pt; width: 50pt; text-align: justify; border-style: solid; vertical-align: text-top;">
        {{$pancasila[1]->deskripsi ?? null}}
        </td>
      </tr>
    </table>

    <br>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller;" cellspacing="0">
      <tr>
        <td style="height: 25pt; width: 375pt; padding-left: 30pt; font-weight: bold;">
          PROYEK 3: {{$pancasila[2]->nama_project ?? null}}
        </td>
      </tr>
      <tr>
        <td style="height: 110pt; width: 50pt; text-align: justify; border-style: solid; vertical-align: text-top;">
        {{$pancasila[2]->deskripsi ?? null}}
        </td>
      </tr>
    </table>

    <br><br><br><br><br><br><br><br><br><br><br><br>

    <img class="bgCover" src="/images/logohead.png" alt="">
    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller;" cellspacing="0">
      <tr style="height: 30pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top; font-weight: bold;">
        {{$pancasila[0]->nama_project ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          BB
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          MB
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          BSH
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          SB
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[0]->sub_proyek1 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[0]->desc_pancasila1 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila1, 'BB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila1, 'MB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila1, 'BSH') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila1, 'SB') === 0)
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[0]->desc_pancasila1 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
        @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila1, 'BB') === 0)
            V
        @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila1, 'MB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila1, 'BSH') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila1, 'SB') === 0)
          V
          @endif
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[0]->sub_proyek2 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[0]->desc_pancasila2 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila2, 'BB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila2, 'MB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila2, 'BSH') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila2, 'SB') === 0)
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[0]->desc_pancasila2 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila2, 'BB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila2, 'MB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila2, 'BSH') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila2, 'SB') === 0)
          V
          @endif
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[0]->sub_proyek3 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[0]->desc_pancasila3 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila3, 'BB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila3, 'MB')===0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila3, 'BSH')===0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila1[0]->nilai_pancasila3, 'SB')===0)
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[0]->desc_pancasila3 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila3, 'BB')===0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila3, 'MB') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila3, 'BSH') === 0)
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(strcasecmp($nilaiPancasila2[0]->nilai_pancasila3, 'SB') === 0)
          V
          @endif
        </td>
      </tr>
    </table>

    <br>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller; width: 409pt;" cellspacing="0">
      <tr>
        <td style="height: 20pt; font-weight: bold; vertical-align: text-top;">
          Catatan Proses
        </td>
      </tr>
      <tr>
        <td style="height: 50pt; vertical-align: text-top; border-style: solid;">
          {{$nilaiPancasila1[0]->catatan ?? null}}
        </td>
      </tr>
    </table>

    <br><br><br><br><br><br><br><br>

    <img class="bgCover" src="/images/logohead.png" alt="">
    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller;" cellspacing="0">
      <tr style="height: 30pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top; font-weight: bold;">
        {{$pancasila[1]->nama_project ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
         BB
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          MB
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          BSH
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          SB
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[1]->sub_proyek1 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[1]->desc_pancasila1 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila1 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila1 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila1 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila1 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[1]->desc_pancasila1 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila1 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila1 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila1 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila1 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[1]->sub_proyek2 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[1]->desc_pancasila2 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila2 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila2 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila2 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila2 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[1]->desc_pancasila2 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila2 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila2 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila2 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila2 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[1]->sub_proyek3 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[1]->desc_pancasila3 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila3 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila3 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila3 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[1]->nilai_pancasila3 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[1]->desc_pancasila3 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila3 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila3 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila3 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[1]->nilai_pancasila3 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
    </table>

    <br>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller; width: 409pt;" cellspacing="0">
      <tr>
        <td style="height: 20pt; font-weight: bold; vertical-align: text-top;">
          Catatan Proses
        </td>
      </tr>
      <tr>
        <td style="height: 50pt; vertical-align: text-top; border-style: solid;">
        {{$nilaiPancasila1[1]->catatan ?? null}}
        </td>
      </tr>
    </table>

    <br><br><br><br><br><br><br><br><br>

    <img class="bgCover" src="/images/logohead.png" alt="">
    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller;" cellspacing="0">
      <tr style="height: 30pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top; font-weight: bold;">
        {{$pancasila[2]->nama_project ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          BB
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          MB
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          BSH
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          SB
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[2]->sub_proyek1 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[2]->desc_pancasila1 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila1 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila1 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila1 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila1 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[2]->desc_pancasila1 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila1 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila1 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila1 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila1 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[2]->sub_proyek2 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[2]->desc_pancasila2 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila2 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila2 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila2 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila2 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[2]->desc_pancasila2 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila2 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila2 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila2 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila2 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr>
        <td style="border-right: solid; border-left: solid; width: 230pt; vertical-align: text-top; background-color: #D0D0D0;" colspan="5">
        {{$pancasila[2]->sub_proyek3 ?? null}}
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila1[2]->desc_pancasila3 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila3 ?? null ) === 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila3 ?? null ) === 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila3 ?? null ) === 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila1[2]->nilai_pancasila3 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
      <tr style="height: 76pt;">
        <td style="border-style: solid; width: 230pt; vertical-align: text-top;">
        {{$nilaiPancasila2[2]->desc_pancasila3 ?? null}}
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila3 ?? null ) == 'BB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila3 ?? null ) == 'MB')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila3 ?? null ) == 'BSH')
          V
          @endif
        </td>
        <td style="border-style: solid; width: 40pt; text-align: center;">
          @if(($nilaiPancasila2[2]->nilai_pancasila3 ?? null ) == 'SB')
          V
          @endif
        </td>
      </tr>
    </table>

    <br>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller; width: 409pt;" cellspacing="0">
      <tr>
        <td style="height: 20pt; font-weight: bold; vertical-align: text-top;">
          Catatan Proses
        </td>
      </tr>
      <tr>
        <td style="height: 50pt; vertical-align: text-top; border-style: solid;">
        {{$nilaiPancasila1[2]->catatan ?? null}}
        </td>
      </tr>
    </table>

    <br><br><br><br><br><br><br><br>

    <img class="bgCover" src="/images/logohead.png" alt="">
    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller; width: 409pt;" cellspacing="0">
      <tr style="height: 40pt;">
        <td style="font-size: larger; text-align: center; font-weight: bold;">
          KETERANGAN TINGKAT PENCAPAIAN SISWA
        </td>
      </tr>
    </table>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller; width: 409pt;" cellspacing="0">
      <tr>
        <td style="border-style: solid; font-weight: bold; text-align: center;">
          BB
        </td>
        <td style="border-style: solid; font-weight: bold; text-align: center;">
          MB
        </td>
        <td style="border-style: solid; font-weight: bold; text-align: center;">
          BSH
        </td>
        <td style="border-style: solid; font-weight: bold; text-align: center;">
          SB
        </td>
      </tr>
      <tr>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 40pt;">
          Belum Berkembang
        </td>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 40pt;">
          Mulai Berkembang
        </td>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 40pt;">
          Berkembang Sesuai Harapan
        </td>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 40pt;">
          Sangat Berkembang
        </td>
      </tr>
      <tr>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 138pt; vertical-align: text-top;">
          Siswa masih membutuhkan bimbingan dalam mengembangkan kemampuan
        </td>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 138pt; vertical-align: text-top;">
          Siswa mulai mengembangkan kemampuan namun masih belum konsisten
        </td>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 138pt; vertical-align: text-top;">
          Siswa telah mengembangkan kemampuan hingga berada dalam tahap konsisten
        </td>
        <td style="border-style: solid; text-align: center; width: 165.75pt; height: 138pt; vertical-align: text-top;">
          Siswa mengembangkan kemampuannya melampaui harapan
        </td>
      </tr>
    </table>

    <br>

    <table style="border-collapse: collapse; margin-left: 55pt; font-size: smaller; width: 409pt;" cellspacing="0">
      <tr>
        <td style="text-align: center; width: 100pt;">
          Mengetahui,
        </td>
        <td style="text-align: center; width: 120pt;">
          
        </td>
        <td style="text-align: center; width: 100pt;">
          {{$data_diri->tanggal}}

        </td>
      </tr>
      <tr>
        <td style="text-align: center; width: 100pt;">
          Orang Tua
        </td>
        <td style="text-align: center; width: 120pt;">
          
        </td>
        <td style="text-align: center; width: 100pt;">
          Wali Kelas
        </td>
      </tr>
      <tr style="height: 80pt;">
        <td style="text-align: center; width: 100pt;">
          
        </td>
        <td style="text-align: center; width: 120pt;">
          
        </td>
        <td style="text-align: center; width: 100pt;">
          
        </td>
      </tr>
      <tr>
        <td style="text-align: center; width: 100pt;">
          _________________
        </td>
        <td style="text-align: center; width: 120pt;">
          
        </td>
        <td style="text-align: center; width: 100pt; text-decoration: underline;">
          {{$data_diri->nama_wali_kelas}}
        </td>
      </tr>
      <tr style="height: 20pt;">
        <td style="text-align: center; width: 100pt;">
          
        </td>
        <td style="text-align: center; width: 120pt;">
          
        </td>
        <td style="text-align: center; width: 100pt;">
          NBM. {{$data_diri->nbm_wali_kelas}}
        </td>
      </tr>
      <tr>
        <td style="text-align: center; width: 100pt;">
          
        </td>
        <td style="text-align: center; width: 120pt;">
          Mengetahui,
        </td>
        <td style="text-align: center; width: 100pt;">
          
        </td>
      </tr>
      <tr>
        <td style="text-align: center; width: 100pt;">
          
        </td>
        <td style="text-align: center; width: 120pt;">
          Kepala Sekolah
        </td>
        <td style="text-align: center; width: 100pt;">
          
        </td>
      </tr>
      <tr style="height: 80pt;">
        <td style="text-align: center; width: 100pt;">
          
        </td>
        <td style="text-align: center; width: 120pt;">
          
        </td>
        <td style="text-align: center; width: 100pt;">
          
        </td>
      </tr>
      <tr>
        <td style="text-align: center; width: 100pt;">
          
        </td>
        <td style="text-align: center; width: 120pt; text-decoration: underline;">
          {{$data_diri->nama_kepala}}
        </td>
        <td style="text-align: center; width: 100pt;">
          
        </td>
      </tr>
      <tr>
        <td style="text-align: center; width: 100pt;">
          
        </td>
        <td style="text-align: center; width: 120pt;">
          NBM. {{$data_diri->nbm_kepala}}
        </td>
        <td style="text-align: center; width: 100pt;">
          
        </td>
      </tr>
    </table>
  </div>
</body>

</html>