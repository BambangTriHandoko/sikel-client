<?= $this->extend('Layout/template'); ?>
<?= $this->section('title'); ?>
Data Pekerjaan
<?= $this->endSection(); ?>
<?= $this->section('head'); ?>
<style>
	#tpen {
		border: 1px solid #1C6EA4;
		background-color: #EEEEEE;
		width: 100%;
		text-align: left;
		border-collapse: collapse;
	}

	.thead {
		background: #20BC42;
		background: -moz-linear-gradient(top, #58cd71 0%, #36c255 66%, #20BC42 100%);
		background: -webkit-linear-gradient(top, #58cd71 0%, #36c255 66%, #20BC42 100%);
		background: linear-gradient(to bottom, #58cd71 0%, #36c255 66%, #20BC42 100%);
		border-bottom: 2px solid #444444;
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}

	.dtd {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}

	.dth {
		border: 3px solid #AAAAAA;
		padding: 3px 2px;
	}
</style>
<?= $this->endSection(); ?>
<?= $this->section('latnews'); ?>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
				<div class="single_post_content">
		<div class="col-lg-2 col-md-2 col-sm-2">
		    </div>
		<div class="col-lg-10 col-md-10 col-sm-10">
			<div id="piechart" style="width: 430px; height: 500px;"></div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<table id="tpen" class="display">
				<thead class="thead">
					<tr>
						<th class="dth" scope="col">No.</th>
						<th class="dth" scope="col">Pekerjaan</th>
						<th class="dth" scope="col">Laki laki</th>
						<th class="dth" scope="col">Perempuan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($warga as $b) { ?>
						<tr>
							<td class="dtd"> 1 </td>
							<td class="dtd">AKUNTAN </td>
							<td class="dtd"><?= $b['lakilaki_AKUNTAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_AKUNTAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 2 </td>
							<td class="dtd">ANGGOTA DPRD KABUPATEN/KOTA </td>
							<td class="dtd"><?= $b['lakilaki_ANGGOTA_DPRD_KABUPATEN/KOTA']; ?></td>
							<td class="dtd"><?= $b['perempuan_ANGGOTA_DPRD_KABUPATEN/KOTA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 3 </td>
							<td class="dtd">ANGGOTA DPR-RI </td>
							<td class="dtd"><?= $b['lakilaki_ANGGOTA_DPR-RI']; ?></td>
							<td class="dtd"><?= $b['perempuan_ANGGOTA_DPR-RI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 4 </td>
							<td class="dtd">APOTEKER </td>
							<td class="dtd"><?= $b['lakilaki_APOTEKER']; ?></td>
							<td class="dtd"><?= $b['perempuan_APOTEKER']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 5 </td>
							<td class="dtd">ARSITEK </td>
							<td class="dtd"><?= $b['lakilaki_ARSITEK']; ?></td>
							<td class="dtd"><?= $b['perempuan_ARSITEK']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 6 </td>
							<td class="dtd">BELUM/TIDAK BEKERJA </td>
							<td class="dtd"><?= $b['lakilaki_BELUM/TIDAK_BEKERJA']; ?></td>
							<td class="dtd"><?= $b['perempuan_BELUM/TIDAK_BEKERJA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 7 </td>
							<td class="dtd">BIARAWATI </td>
							<td class="dtd"><?= $b['lakilaki_BIARAWATI']; ?></td>
							<td class="dtd"><?= $b['perempuan_BIARAWATI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 8 </td>
							<td class="dtd">BIDAN </td>
							<td class="dtd"><?= $b['lakilaki_BIDAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_BIDAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 9 </td>
							<td class="dtd">BURUH HARIAN LEPAS </td>
							<td class="dtd"><?= $b['lakilaki_BURUH_HARIAN_LEPAS']; ?></td>
							<td class="dtd"><?= $b['perempuan_BURUH_HARIAN_LEPAS']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 10 </td>
							<td class="dtd">BURUH NELAYAN/PERIKANAN </td>
							<td class="dtd"><?= $b['lakilaki_BURUH_NELAYAN/PERIKANAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_BURUH_NELAYAN/PERIKANAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 11 </td>
							<td class="dtd">BURUH PETERNAKAN </td>
							<td class="dtd"><?= $b['lakilaki_BURUH_PETERNAKAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_BURUH_PETERNAKAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 12 </td>
							<td class="dtd">BURUH TANI/PERKEBUNAN </td>
							<td class="dtd"><?= $b['lakilaki_BURUH_TANI/PERKEBUNAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_BURUH_TANI/PERKEBUNAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 13 </td>
							<td class="dtd">DOKTER </td>
							<td class="dtd"><?= $b['lakilaki_DOKTER']; ?></td>
							<td class="dtd"><?= $b['perempuan_DOKTER']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 14 </td>
							<td class="dtd">DOSEN </td>
							<td class="dtd"><?= $b['lakilaki_DOSEN']; ?></td>
							<td class="dtd"><?= $b['perempuan_DOSEN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 15 </td>
							<td class="dtd">GURU </td>
							<td class="dtd"><?= $b['lakilaki_GURU']; ?></td>
							<td class="dtd"><?= $b['perempuan_GURU']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 16 </td>
							<td class="dtd">IMAM MESJID </td>
							<td class="dtd"><?= $b['lakilaki_IMAM_MESJID']; ?></td>
							<td class="dtd"><?= $b['perempuan_IMAM_MESJID']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 17 </td>
							<td class="dtd">INDUSTRI </td>
							<td class="dtd"><?= $b['lakilaki_INDUSTRI']; ?></td>
							<td class="dtd"><?= $b['perempuan_INDUSTRI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 18 </td>
							<td class="dtd">JURU MASAK </td>
							<td class="dtd"><?= $b['lakilaki_JURU_MASAK']; ?></td>
							<td class="dtd"><?= $b['perempuan_JURU_MASAK']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 19 </td>
							<td class="dtd">KARYAWAN BUMD </td>
							<td class="dtd"><?= $b['lakilaki_KARYAWAN_BUMD']; ?></td>
							<td class="dtd"><?= $b['perempuan_KARYAWAN_BUMD']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 20 </td>
							<td class="dtd">KARYAWAN BUMN </td>
							<td class="dtd"><?= $b['lakilaki_KARYAWAN_BUMN']; ?></td>
							<td class="dtd"><?= $b['perempuan_KARYAWAN_BUMN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 21 </td>
							<td class="dtd">KARYAWAN HONORER </td>
							<td class="dtd"><?= $b['lakilaki_KARYAWAN_HONORER']; ?></td>
							<td class="dtd"><?= $b['perempuan_KARYAWAN_HONORER']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 22 </td>
							<td class="dtd">KARYAWAN SWASTA </td>
							<td class="dtd"><?= $b['lakilaki_KARYAWAN_SWASTA']; ?></td>
							<td class="dtd"><?= $b['perempuan_KARYAWAN_SWASTA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 23 </td>
							<td class="dtd">KEPOLISIAN RI </td>
							<td class="dtd"><?= $b['lakilaki_KEPOLISIAN_RI']; ?></td>
							<td class="dtd"><?= $b['perempuan_KEPOLISIAN_RI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 24 </td>
							<td class="dtd">KONSTRUKSI </td>
							<td class="dtd"><?= $b['lakilaki_KONSTRUKSI']; ?></td>
							<td class="dtd"><?= $b['perempuan_KONSTRUKSI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 25 </td>
							<td class="dtd">KONSULTAN </td>
							<td class="dtd"><?= $b['lakilaki_KONSULTAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_KONSULTAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 26 </td>
							<td class="dtd">LAINNYA </td>
							<td class="dtd"><?= $b['lakilaki_LAINNYA']; ?></td>
							<td class="dtd"><?= $b['perempuan_LAINNYA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 27 </td>
							<td class="dtd">MEKANIK </td>
							<td class="dtd"><?= $b['lakilaki_MEKANIK']; ?></td>
							<td class="dtd"><?= $b['perempuan_MEKANIK']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 28 </td>
							<td class="dtd">MENGURUS RUMAH TANGGA </td>
							<td class="dtd"><?= $b['lakilaki_MENGURUS_RUMAH_TANGGA']; ?></td>
							<td class="dtd"><?= $b['perempuan_MENGURUS_RUMAH_TANGGA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 29 </td>
							<td class="dtd">NELAYAN/PERIKANAN </td>
							<td class="dtd"><?= $b['lakilaki_NELAYAN/PERIKANAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_NELAYAN/PERIKANAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 30 </td>
							<td class="dtd">NOTARIS </td>
							<td class="dtd"><?= $b['lakilaki_NOTARIS']; ?></td>
							<td class="dtd"><?= $b['perempuan_NOTARIS']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 31 </td>
							<td class="dtd">PARAJI </td>
							<td class="dtd"><?= $b['lakilaki_PARAJI']; ?></td>
							<td class="dtd"><?= $b['perempuan_PARAJI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 32 </td>
							<td class="dtd">PASTOR </td>
							<td class="dtd"><?= $b['lakilaki_PASTOR']; ?></td>
							<td class="dtd"><?= $b['perempuan_PASTOR']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 33 </td>
							<td class="dtd">PEDAGANG </td>
							<td class="dtd"><?= $b['lakilaki_PEDAGANG']; ?></td>
							<td class="dtd"><?= $b['perempuan_PEDAGANG']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 34 </td>
							<td class="dtd">PEGAWAI NEGERI SIPIL </td>
							<td class="dtd"><?= $b['lakilaki_PEGAWAI_NEGERI_SIPIL']; ?></td>
							<td class="dtd"><?= $b['perempuan_PEGAWAI_NEGERI_SIPIL']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 35 </td>
							<td class="dtd">PELAJAR/MAHASISWA </td>
							<td class="dtd"><?= $b['lakilaki_PELAJAR/MAHASISWA']; ?></td>
							<td class="dtd"><?= $b['perempuan_PELAJAR/MAHASISWA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 36 </td>
							<td class="dtd">PELAUT </td>
							<td class="dtd"><?= $b['lakilaki_PELAUT']; ?></td>
							<td class="dtd"><?= $b['perempuan_PELAUT']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 37 </td>
							<td class="dtd">PEMBANTU RUMAH TANGGA </td>
							<td class="dtd"><?= $b['lakilaki_PEMBANTU_RUMAH_TANGGA']; ?></td>
							<td class="dtd"><?= $b['perempuan_PEMBANTU_RUMAH_TANGGA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 38 </td>
							<td class="dtd">PENATA BUSANA </td>
							<td class="dtd"><?= $b['lakilaki_PENATA_BUSANA']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENATA_BUSANA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 39 </td>
							<td class="dtd">PENATA RAMBUT </td>
							<td class="dtd"><?= $b['lakilaki_PENATA_RAMBUT']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENATA_RAMBUT']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 40 </td>
							<td class="dtd">PENATA RIAS </td>
							<td class="dtd"><?= $b['lakilaki_PENATA_RIAS']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENATA_RIAS']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 41 </td>
							<td class="dtd">PENDETA </td>
							<td class="dtd"><?= $b['lakilaki_PENDETA']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENDETA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 42 </td>
							<td class="dtd">PENELITI </td>
							<td class="dtd"><?= $b['lakilaki_PENELITI']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENELITI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 43 </td>
							<td class="dtd">PENGACARA </td>
							<td class="dtd"><?= $b['lakilaki_PENGACARA']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENGACARA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 44 </td>
							<td class="dtd">PENSIUNAN </td>
							<td class="dtd"><?= $b['lakilaki_PENSIUNAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENSIUNAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 45 </td>
							<td class="dtd">PENTERJEMAH </td>
							<td class="dtd"><?= $b['lakilaki_PENTERJEMAH']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENTERJEMAH']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 46 </td>
							<td class="dtd">PENYIAR RADIO </td>
							<td class="dtd"><?= $b['lakilaki_PENYIAR_RADIO']; ?></td>
							<td class="dtd"><?= $b['perempuan_PENYIAR_RADIO']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 47 </td>
							<td class="dtd">PERANCANG BUSANA </td>
							<td class="dtd"><?= $b['lakilaki_PERANCANG_BUSANA']; ?></td>
							<td class="dtd"><?= $b['perempuan_PERANCANG_BUSANA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 48 </td>
							<td class="dtd">PERANGKAT DESA </td>
							<td class="dtd"><?= $b['lakilaki_PERANGKAT_DESA']; ?></td>
							<td class="dtd"><?= $b['perempuan_PERANGKAT_DESA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 49 </td>
							<td class="dtd">PERAWAT </td>
							<td class="dtd"><?= $b['lakilaki_PERAWAT']; ?></td>
							<td class="dtd"><?= $b['perempuan_PERAWAT']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 50 </td>
							<td class="dtd">PERDAGANGAN </td>
							<td class="dtd"><?= $b['lakilaki_PERDAGANGAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_PERDAGANGAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 51 </td>
							<td class="dtd">PETANI/PEKEBUN </td>
							<td class="dtd"><?= $b['lakilaki_PETANI/PEKEBUN']; ?></td>
							<td class="dtd"><?= $b['perempuan_PETANI/PEKEBUN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 52 </td>
							<td class="dtd">PETERNAK </td>
							<td class="dtd"><?= $b['lakilaki_PETERNAK']; ?></td>
							<td class="dtd"><?= $b['perempuan_PETERNAK']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 53 </td>
							<td class="dtd">PIALANG </td>
							<td class="dtd"><?= $b['lakilaki_PIALANG']; ?></td>
							<td class="dtd"><?= $b['perempuan_PIALANG']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 54 </td>
							<td class="dtd">PILOT </td>
							<td class="dtd"><?= $b['lakilaki_PILOT']; ?></td>
							<td class="dtd"><?= $b['perempuan_PILOT']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 55 </td>
							<td class="dtd">PSIKIATER/PSIKOLOG </td>
							<td class="dtd"><?= $b['lakilaki_PSIKIATER/PSIKOLOG']; ?></td>
							<td class="dtd"><?= $b['perempuan_PSIKIATER/PSIKOLOG']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 56 </td>
							<td class="dtd">SENIMAN </td>
							<td class="dtd"><?= $b['lakilaki_SENIMAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_SENIMAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 57 </td>
							<td class="dtd">SOPIR </td>
							<td class="dtd"><?= $b['lakilaki_SOPIR']; ?></td>
							<td class="dtd"><?= $b['perempuan_SOPIR']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 58 </td>
							<td class="dtd">TABIB </td>
							<td class="dtd"><?= $b['lakilaki_TABIB']; ?></td>
							<td class="dtd"><?= $b['perempuan_TABIB']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 59 </td>
							<td class="dtd">TENTARA NASIONAL INDONESIA </td>
							<td class="dtd"><?= $b['lakilaki_TENTARA_NASIONAL_INDONESIA']; ?></td>
							<td class="dtd"><?= $b['perempuan_TENTARA_NASIONAL_INDONESIA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 60 </td>
							<td class="dtd">TRANSPORTASI </td>
							<td class="dtd"><?= $b['lakilaki_TRANSPORTASI']; ?></td>
							<td class="dtd"><?= $b['perempuan_TRANSPORTASI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 61 </td>
							<td class="dtd">TUKANG BATU </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_BATU']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_BATU']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 62 </td>
							<td class="dtd">TUKANG CUKUR </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_CUKUR']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_CUKUR']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 63 </td>
							<td class="dtd">TUKANG GIGI </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_GIGI']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_GIGI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 64 </td>
							<td class="dtd">TUKANG JAHIT </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_JAHIT']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_JAHIT']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 65 </td>
							<td class="dtd">TUKANG KAYU </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_KAYU']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_KAYU']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 66 </td>
							<td class="dtd">TUKANG LAS/PANDAI BESI </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_LAS/PANDAI_BESI']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_LAS/PANDAI_BESI']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 67 </td>
							<td class="dtd">TUKANG LISTRIK </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_LISTRIK']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_LISTRIK']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 68 </td>
							<td class="dtd">TUKANG SOL SEPATU </td>
							<td class="dtd"><?= $b['lakilaki_TUKANG_SOL_SEPATU']; ?></td>
							<td class="dtd"><?= $b['perempuan_TUKANG_SOL_SEPATU']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 69 </td>
							<td class="dtd">USTADZ/MUBALIGH </td>
							<td class="dtd"><?= $b['lakilaki_USTADZ/MUBALIGH']; ?></td>
							<td class="dtd"><?= $b['perempuan_USTADZ/MUBALIGH']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 70 </td>
							<td class="dtd">WAKIL WALIKOTA </td>
							<td class="dtd"><?= $b['lakilaki_WAKIL_WALIKOTA']; ?></td>
							<td class="dtd"><?= $b['perempuan_WAKIL_WALIKOTA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 71 </td>
							<td class="dtd">WALIKOTA </td>
							<td class="dtd"><?= $b['lakilaki_WALIKOTA']; ?></td>
							<td class="dtd"><?= $b['perempuan_WALIKOTA']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 72 </td>
							<td class="dtd">WARTAWAN </td>
							<td class="dtd"><?= $b['lakilaki_WARTAWAN']; ?></td>
							<td class="dtd"><?= $b['perempuan_WARTAWAN']; ?></td>
						</tr>
						<tr>
							<td class="dtd"> 73 </td>
							<td class="dtd">WIRASWASTA </td>
							<td class="dtd"><?= $b['lakilaki_WIRASWASTA']; ?></td>
							<td class="dtd"><?= $b['perempuan_WIRASWASTA']; ?></td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	</div>
	
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {
		packages: ["corechart"]
	});
	google.charts.setOnLoadCallback(drawChart);
	<?php
	$sum1 = 0;
	$sum2	 = 0;
	$sum3	 = 0;
	$sum4	 = 0;
	$sum5	 = 0;
	$sum6	 = 0;
	$sum7	 = 0;
	$sum8	 = 0;
	$sum9	 = 0;
	$sum10	 = 0;
	$sum11	 = 0;
	$sum12	 = 0;
	$sum13	 = 0;
	$sum14	 = 0;
	$sum15	 = 0;
	$sum16	 = 0;
	$sum17	 = 0;
	$sum18	 = 0;
	$sum19	 = 0;
	$sum20	 = 0;
	$sum21	 = 0;
	$sum22	 = 0;
	$sum23	 = 0;
	$sum24	 = 0;
	$sum25	 = 0;
	$sum26	 = 0;
	$sum27	 = 0;
	$sum28	 = 0;
	$sum29	 = 0;
	$sum30	 = 0;
	$sum31	 = 0;
	$sum32	 = 0;
	$sum33	 = 0;
	$sum34	 = 0;
	$sum35	 = 0;
	$sum36	 = 0;
	$sum37	 = 0;
	$sum38	 = 0;
	$sum39	 = 0;
	$sum40	 = 0;
	$sum41	 = 0;
	$sum42	 = 0;
	$sum43	 = 0;
	$sum44	 = 0;
	$sum45	 = 0;
	$sum46	 = 0;
	$sum47	 = 0;
	$sum48	 = 0;
	$sum49	 = 0;
	$sum50	 = 0;
	$sum51	 = 0;
	$sum52	 = 0;
	$sum53	 = 0;
	$sum54	 = 0;
	$sum55	 = 0;
	$sum56	 = 0;
	$sum57	 = 0;
	$sum58	 = 0;
	$sum59	 = 0;
	$sum60	 = 0;
	$sum61	 = 0;
	$sum62	 = 0;
	$sum63	 = 0;
	$sum64	 = 0;
	$sum65	 = 0;
	$sum66	 = 0;
	$sum67	 = 0;
	$sum68	 = 0;
	$sum69	 = 0;
	$sum70	 = 0;
	$sum71	 = 0;
	$sum72	 = 0;
	$sum73	 = 0;
	$sum74	 = 0;
	$sum75	 = 0;
	$sum76	 = 0;
	$sum77	 = 0;
	$sum78	 = 0;
	$sum79	 = 0;
	$sum80	 = 0;
	$sum81	 = 0;
	$sum82	 = 0;
	$sum83	 = 0;
	$sum84	 = 0;
	$sum85	 = 0;
	$sum86	 = 0;
	$sum87	 = 0;
	$sum88	 = 0;
	$sum89	 = 0;
	$sum90	 = 0;
	$sum91	 = 0;
	$sum92	 = 0;
	$sum93	 = 0;
	$sum94	 = 0;
	$sum95	 = 0;
	$sum96	 = 0;
	$sum97	 = 0;
	$sum98	 = 0;
	$sum99	 = 0;
	$sum100	 = 0;
	$sum101	 = 0;
	$sum102	 = 0;
	$sum103	 = 0;
	$sum104	 = 0;
	$sum105	 = 0;
	$sum106	 = 0;
	$sum107	 = 0;
	$sum108	 = 0;
	$sum109	 = 0;
	$sum110	 = 0;
	$sum111	 = 0;
	$sum112	 = 0;
	$sum113	 = 0;
	$sum114	 = 0;
	$sum115	 = 0;
	$sum116	 = 0;
	$sum117	 = 0;
	$sum118	 = 0;
	$sum119	 = 0;
	$sum120	 = 0;
	$sum121	 = 0;
	$sum122	 = 0;
	$sum123	 = 0;
	$sum124	 = 0;
	$sum125	 = 0;
	$sum126	 = 0;
	$sum127	 = 0;
	$sum128	 = 0;
	$sum129	 = 0;
	$sum130	 = 0;
	$sum131	 = 0;
	$sum132	 = 0;
	$sum133	 = 0;
	$sum134	 = 0;
	$sum135	 = 0;
	$sum136	 = 0;
	$sum137	 = 0;
	$sum138	 = 0;
	$sum139	 = 0;
	$sum140	 = 0;
	$sum141	 = 0;
	$sum142	 = 0;
	$sum143	 = 0;
	$sum144	 = 0;
	$sum145	 = 0;
	$sum146	 = 0;
	foreach ($warga as $key => $value) {
		$sum1 	 +=  $value['lakilaki_AKUNTAN'];
		$sum2 	 +=  $value['lakilaki_ANGGOTA_DPRD_KABUPATEN/KOTA'];
		$sum3 	 +=  $value['lakilaki_ANGGOTA_DPR-RI'];
		$sum4 	 +=  $value['lakilaki_APOTEKER'];
		$sum5 	 +=  $value['lakilaki_ARSITEK'];
		$sum6 	 +=  $value['lakilaki_BELUM/TIDAK_BEKERJA'];
		$sum7 	 +=  $value['lakilaki_BIARAWATI'];
		$sum8 	 +=  $value['lakilaki_BIDAN'];
		$sum9 	 +=  $value['lakilaki_BURUH_HARIAN_LEPAS'];
		$sum10	 +=  $value['lakilaki_BURUH_NELAYAN/PERIKANAN'];
		$sum11	 +=  $value['lakilaki_BURUH_PETERNAKAN'];
		$sum12	 +=  $value['lakilaki_BURUH_TANI/PERKEBUNAN'];
		$sum13	 +=  $value['lakilaki_DOKTER'];
		$sum14	 +=  $value['lakilaki_DOSEN'];
		$sum15	 +=  $value['lakilaki_GURU'];
		$sum16	 +=  $value['lakilaki_IMAM_MESJID'];
		$sum17	 +=  $value['lakilaki_INDUSTRI'];
		$sum18	 +=  $value['lakilaki_JURU_MASAK'];
		$sum19	 +=  $value['lakilaki_KARYAWAN_BUMD'];
		$sum20	 +=  $value['lakilaki_KARYAWAN_BUMN'];
		$sum21	 +=  $value['lakilaki_KARYAWAN_HONORER'];
		$sum22	 +=  $value['lakilaki_KARYAWAN_SWASTA'];
		$sum23	 +=  $value['lakilaki_KEPOLISIAN_RI'];
		$sum24	 +=  $value['lakilaki_KONSTRUKSI'];
		$sum25	 +=  $value['lakilaki_KONSULTAN'];
		$sum26	 +=  $value['lakilaki_LAINNYA'];
		$sum27	 +=  $value['lakilaki_MEKANIK'];
		$sum28	 +=  $value['lakilaki_MENGURUS_RUMAH_TANGGA'];
		$sum29	 +=  $value['lakilaki_NELAYAN/PERIKANAN'];
		$sum30	 +=  $value['lakilaki_NOTARIS'];
		$sum31	 +=  $value['lakilaki_PARAJI'];
		$sum32	 +=  $value['lakilaki_PASTOR'];
		$sum33	 +=  $value['lakilaki_PEDAGANG'];
		$sum34	 +=  $value['lakilaki_PEGAWAI_NEGERI_SIPIL'];
		$sum35	 +=  $value['lakilaki_PELAJAR/MAHASISWA'];
		$sum36	 +=  $value['lakilaki_PELAUT'];
		$sum37	 +=  $value['lakilaki_PEMBANTU_RUMAH_TANGGA'];
		$sum38	 +=  $value['lakilaki_PENATA_BUSANA'];
		$sum39	 +=  $value['lakilaki_PENATA_RAMBUT'];
		$sum40	 +=  $value['lakilaki_PENATA_RIAS'];
		$sum41	 +=  $value['lakilaki_PENDETA'];
		$sum42	 +=  $value['lakilaki_PENELITI'];
		$sum43	 +=  $value['lakilaki_PENGACARA'];
		$sum44	 +=  $value['lakilaki_PENSIUNAN'];
		$sum45	 +=  $value['lakilaki_PENTERJEMAH'];
		$sum46	 +=  $value['lakilaki_PENYIAR_RADIO'];
		$sum47	 +=  $value['lakilaki_PERANCANG_BUSANA'];
		$sum48	 +=  $value['lakilaki_PERANGKAT_DESA'];
		$sum49	 +=  $value['lakilaki_PERAWAT'];
		$sum50	 +=  $value['lakilaki_PERDAGANGAN'];
		$sum51	 +=  $value['lakilaki_PETANI/PEKEBUN'];
		$sum52	 +=  $value['lakilaki_PETERNAK'];
		$sum53	 +=  $value['lakilaki_PIALANG'];
		$sum54	 +=  $value['lakilaki_PILOT'];
		$sum55	 +=  $value['lakilaki_PSIKIATER/PSIKOLOG'];
		$sum56	 +=  $value['lakilaki_SENIMAN'];
		$sum57	 +=  $value['lakilaki_SOPIR'];
		$sum58	 +=  $value['lakilaki_TABIB'];
		$sum59	 +=  $value['lakilaki_TENTARA_NASIONAL_INDONESIA'];
		$sum60	 +=  $value['lakilaki_TRANSPORTASI'];
		$sum61	 +=  $value['lakilaki_TUKANG_BATU'];
		$sum62	 +=  $value['lakilaki_TUKANG_CUKUR'];
		$sum63	 +=  $value['lakilaki_TUKANG_GIGI'];
		$sum64	 +=  $value['lakilaki_TUKANG_JAHIT'];
		$sum65	 +=  $value['lakilaki_TUKANG_KAYU'];
		$sum66	 +=  $value['lakilaki_TUKANG_LAS/PANDAI_BESI'];
		$sum67	 +=  $value['lakilaki_TUKANG_LISTRIK'];
		$sum68	 +=  $value['lakilaki_TUKANG_SOL_SEPATU'];
		$sum69	 +=  $value['lakilaki_USTADZ/MUBALIGH'];
		$sum70	 +=  $value['lakilaki_WAKIL_WALIKOTA'];
		$sum71	 +=  $value['lakilaki_WALIKOTA'];
		$sum72	 +=  $value['lakilaki_WARTAWAN'];
		$sum73	 +=  $value['lakilaki_WIRASWASTA'];
		$sum74 	 +=  $value['perempuan_AKUNTAN'];
		$sum75 	 +=  $value['perempuan_ANGGOTA_DPRD_KABUPATEN/KOTA'];
		$sum76 	 +=  $value['perempuan_ANGGOTA_DPR-RI'];
		$sum77 	 +=  $value['perempuan_APOTEKER'];
		$sum78 	 +=  $value['perempuan_ARSITEK'];
		$sum79 	 +=  $value['perempuan_BELUM/TIDAK_BEKERJA'];
		$sum80 	 +=  $value['perempuan_BIARAWATI'];
		$sum81 	 +=  $value['perempuan_BIDAN'];
		$sum82 	 +=  $value['perempuan_BURUH_HARIAN_LEPAS'];
		$sum83 	 +=  $value['perempuan_BURUH_NELAYAN/PERIKANAN'];
		$sum84 	 +=  $value['perempuan_BURUH_PETERNAKAN'];
		$sum85 	 +=  $value['perempuan_BURUH_TANI/PERKEBUNAN'];
		$sum86 	 +=  $value['perempuan_DOKTER'];
		$sum87 	 +=  $value['perempuan_DOSEN'];
		$sum88 	 +=  $value['perempuan_GURU'];
		$sum89 	 +=  $value['perempuan_IMAM_MESJID'];
		$sum90 	 +=  $value['perempuan_INDUSTRI'];
		$sum91 	 +=  $value['perempuan_JURU_MASAK'];
		$sum92 	 +=  $value['perempuan_KARYAWAN_BUMD'];
		$sum93 	 +=  $value['perempuan_KARYAWAN_BUMN'];
		$sum94 	 +=  $value['perempuan_KARYAWAN_HONORER'];
		$sum95 	 +=  $value['perempuan_KARYAWAN_SWASTA'];
		$sum96 	 +=  $value['perempuan_KEPOLISIAN_RI'];
		$sum97 	 +=  $value['perempuan_KONSTRUKSI'];
		$sum98 	 +=  $value['perempuan_KONSULTAN'];
		$sum99 	 +=  $value['perempuan_LAINNYA'];
		$sum100	 +=  $value['perempuan_MEKANIK'];
		$sum101	 +=  $value['perempuan_MENGURUS_RUMAH_TANGGA'];
		$sum102	 +=  $value['perempuan_NELAYAN/PERIKANAN'];
		$sum103	 +=  $value['perempuan_NOTARIS'];
		$sum104	 +=  $value['perempuan_PARAJI'];
		$sum105	 +=  $value['perempuan_PASTOR'];
		$sum106	 +=  $value['perempuan_PEDAGANG'];
		$sum107	 +=  $value['perempuan_PEGAWAI_NEGERI_SIPIL'];
		$sum108	 +=  $value['perempuan_PELAJAR/MAHASISWA'];
		$sum109	 +=  $value['perempuan_PELAUT'];
		$sum110	 +=  $value['perempuan_PEMBANTU_RUMAH_TANGGA'];
		$sum111	 +=  $value['perempuan_PENATA_BUSANA'];
		$sum112	 +=  $value['perempuan_PENATA_RAMBUT'];
		$sum113	 +=  $value['perempuan_PENATA_RIAS'];
		$sum114	 +=  $value['perempuan_PENDETA'];
		$sum115	 +=  $value['perempuan_PENELITI'];
		$sum116	 +=  $value['perempuan_PENGACARA'];
		$sum117	 +=  $value['perempuan_PENSIUNAN'];
		$sum118	 +=  $value['perempuan_PENTERJEMAH'];
		$sum119	 +=  $value['perempuan_PENYIAR_RADIO'];
		$sum120	 +=  $value['perempuan_PERANCANG_BUSANA'];
		$sum121	 +=  $value['perempuan_PERANGKAT_DESA'];
		$sum122	 +=  $value['perempuan_PERAWAT'];
		$sum123	 +=  $value['perempuan_PERDAGANGAN'];
		$sum124	 +=  $value['perempuan_PETANI/PEKEBUN'];
		$sum125	 +=  $value['perempuan_PETERNAK'];
		$sum126	 +=  $value['perempuan_PIALANG'];
		$sum127	 +=  $value['perempuan_PILOT'];
		$sum128	 +=  $value['perempuan_PSIKIATER/PSIKOLOG'];
		$sum129	 +=  $value['perempuan_SENIMAN'];
		$sum130	 +=  $value['perempuan_SOPIR'];
		$sum131	 +=  $value['perempuan_TABIB'];
		$sum132	 +=  $value['perempuan_TENTARA_NASIONAL_INDONESIA'];
		$sum133	 +=  $value['perempuan_TRANSPORTASI'];
		$sum134	 +=  $value['perempuan_TUKANG_BATU'];
		$sum135	 +=  $value['perempuan_TUKANG_CUKUR'];
		$sum136	 +=  $value['perempuan_TUKANG_GIGI'];
		$sum137	 +=  $value['perempuan_TUKANG_JAHIT'];
		$sum138	 +=  $value['perempuan_TUKANG_KAYU'];
		$sum139	 +=  $value['perempuan_TUKANG_LAS/PANDAI_BESI'];
		$sum140	 +=  $value['perempuan_TUKANG_LISTRIK'];
		$sum141	 +=  $value['perempuan_TUKANG_SOL_SEPATU'];
		$sum142	 +=  $value['perempuan_USTADZ/MUBALIGH'];
		$sum143	 +=  $value['perempuan_WAKIL_WALIKOTA'];
		$sum144	 +=  $value['perempuan_WALIKOTA'];
		$sum145	 +=  $value['perempuan_WARTAWAN'];
		$sum146	 +=  $value['perempuan_WIRASWASTA'];
	}
	?>

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['name', 'value'],
			['AKUNTAN', <?= $sum1 	+	$sum74; ?>],
			['ANGGOTA DPRD KABUPATEN/KOTA', <?= $sum2 	+	$sum75; ?>],
			['ANGGOTA DPR-RI', <?= $sum3 	+	$sum76; ?>],
			['APOTEKER', <?= $sum4 	+	$sum77; ?>],
			['ARSITEK', <?= $sum5 	+	$sum78; ?>],
			['BELUM/TIDAK BEKERJA', <?= $sum6 	+	$sum79; ?>],
			['BIARAWATI', <?= $sum7 	+	$sum80; ?>],
			['BIDAN', <?= $sum8 	+	$sum81; ?>],
			['BURUH HARIAN LEPAS', <?= $sum9 	+	$sum82; ?>],
			['BURUH NELAYAN/PERIKANAN', <?= $sum10	+	$sum83; ?>],
			['BURUH PETERNAKAN', <?= $sum11	+	$sum84; ?>],
			['BURUH TANI/PERKEBUNAN', <?= $sum12	+	$sum85; ?>],
			['DOKTER', <?= $sum13	+	$sum86; ?>],
			['DOSEN', <?= $sum14	+	$sum87; ?>],
			['GURU', <?= $sum15	+	$sum88; ?>],
			['IMAM MESJID', <?= $sum16	+	$sum89; ?>],
			['INDUSTRI', <?= $sum17	+	$sum90; ?>],
			['JURU MASAK', <?= $sum18	+	$sum91; ?>],
			['KARYAWAN BUMD', <?= $sum19	+	$sum92; ?>],
			['KARYAWAN BUMN', <?= $sum20	+	$sum93; ?>],
			['KARYAWAN HONORER', <?= $sum21	+	$sum94; ?>],
			['KARYAWAN SWASTA', <?= $sum22	+	$sum95; ?>],
			['KEPOLISIAN RI', <?= $sum23	+	$sum96; ?>],
			['KONSTRUKSI', <?= $sum24	+	$sum97; ?>],
			['KONSULTAN', <?= $sum25	+	$sum98; ?>],
			['LAINNYA', <?= $sum26	+	$sum99; ?>],
			['MEKANIK', <?= $sum27	+	$sum100; ?>],
			['MENGURUS RUMAH TANGGA', <?= $sum28	+	$sum101; ?>],
			['NELAYAN/PERIKANAN', <?= $sum29	+	$sum102; ?>],
			['NOTARIS', <?= $sum30	+	$sum103; ?>],
			['PARAJI', <?= $sum31	+	$sum104; ?>],
			['PASTOR', <?= $sum32	+	$sum105; ?>],
			['PEDAGANG', <?= $sum33	+	$sum106; ?>],
			['PEGAWAI NEGERI SIPIL', <?= $sum34	+	$sum107; ?>],
			['PELAJAR/MAHASISWA', <?= $sum35	+	$sum108; ?>],
			['PELAUT', <?= $sum36	+	$sum109; ?>],
			['PEMBANTU RUMAH TANGGA', <?= $sum37	+	$sum110; ?>],
			['PENATA BUSANA', <?= $sum38	+	$sum111; ?>],
			['PENATA RAMBUT', <?= $sum39	+	$sum112; ?>],
			['PENATA RIAS', <?= $sum40	+	$sum113; ?>],
			['PENDETA', <?= $sum41	+	$sum114; ?>],
			['PENELITI', <?= $sum42	+	$sum115; ?>],
			['PENGACARA', <?= $sum43	+	$sum116; ?>],
			['PENSIUNAN', <?= $sum44	+	$sum117; ?>],
			['PENTERJEMAH', <?= $sum45	+	$sum118; ?>],
			['PENYIAR RADIO', <?= $sum46	+	$sum119; ?>],
			['PERANCANG BUSANA', <?= $sum47	+	$sum120; ?>],
			['PERANGKAT DESA', <?= $sum48	+	$sum121; ?>],
			['PERAWAT', <?= $sum49	+	$sum122; ?>],
			['PERDAGANGAN', <?= $sum50	+	$sum123; ?>],
			['PETANI/PEKEBUN', <?= $sum51	+	$sum124; ?>],
			['PETERNAK', <?= $sum52	+	$sum125; ?>],
			['PIALANG', <?= $sum53	+	$sum126; ?>],
			['PILOT', <?= $sum54	+	$sum127; ?>],
			['PSIKIATER/PSIKOLOG', <?= $sum55	+	$sum128; ?>],
			['SENIMAN', <?= $sum56	+	$sum129; ?>],
			['SOPIR', <?= $sum57	+	$sum130; ?>],
			['TABIB', <?= $sum58	+	$sum131; ?>],
			['TENTARA NASIONAL INDONESIA', <?= $sum59	+	$sum132; ?>],
			['TRANSPORTASI', <?= $sum60	+	$sum133; ?>],
			['TUKANG BATU', <?= $sum61	+	$sum134; ?>],
			['TUKANG CUKUR', <?= $sum62	+	$sum135; ?>],
			['TUKANG GIGI', <?= $sum63	+	$sum136; ?>],
			['TUKANG JAHIT', <?= $sum64	+	$sum137; ?>],
			['TUKANG KAYU', <?= $sum65	+	$sum138; ?>],
			['TUKANG LAS/PANDAI BESI', <?= $sum66	+	$sum139; ?>],
			['TUKANG LISTRIK', <?= $sum67	+	$sum140; ?>],
			['TUKANG SOL SEPATU', <?= $sum68	+	$sum141; ?>],
			['USTADZ/MUBALIGH', <?= $sum69	+	$sum142; ?>],
			['WAKIL WALIKOTA', <?= $sum70	+	$sum143; ?>],
			['WALIKOTA', <?= $sum71	+	$sum144; ?>],
			['WARTAWAN', <?= $sum72	+	$sum145; ?>],
			['WIRASWASTA', <?= $sum73	+	$sum146; ?>]

		]);

		var options = {
			title: 'Data Pendidikan',
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	}
</script>
<?= $this->endSection(); ?>
