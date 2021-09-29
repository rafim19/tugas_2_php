<?php
  // Nomor 1
  // Untuk mengerjakan 1 unit rumah dibutuhkan waktu 36 hari dengan 12 tenaga kerja. Berapa waktu akan dihabiskan bila menggunakan 24 orang tenaga kerja?

  $time_1 = 36; // Waktu 36 hari
  $sdm_1 = 12; // 12 tenaga kerja
  $sdm_2 = 24; // 24 tenaga kerja

  $time_2 = (36/12) * $sdm_2; // Waktu dengan 24 tenaga kerja

  echo "$time_1 Hari = $sdm_1 Pekerja<br>";
  echo "X hari = $sdm_2 Pekerja<br>";
  echo "X = ...?<br>";
  echo "Jawaban : $time_2<br>";

  // Nomor 2
  // Putri membeli boneka seharga Rp. 50.000. Kemudian, boneka dijual lagi dengan harga Rp. 80.000. Berapa persen keuntungan Putri?
  $harga_awal = 50000;
  $harga_jual = 80000;
  $persen_keuntungan = (($harga_jual - $harga_awal)/$harga_awal) * 100;

  echo "<br>Jual = $harga_jual<br>";
  echo "Beli = $harga_awal<br>";
  echo "Keuntungan = ?<br>";
  echo "Jawaban : $persen_keuntungan%<br>";
?>