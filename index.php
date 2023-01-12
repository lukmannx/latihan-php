<!-- 
    php project instalation :

    user mac : 
    folder application -> XAMPP -> htdocs
    buat folder project di dalamhtdocs.

    user windows : 
    folder localdisk:c -> XAMPP -> htdocs
    buat folder project di dalam di dalam htdocs.

    *) folder project wajib disimpan di htdocs.

 -->

 <?php
    // disini kode.
   //  echo "dhimz \n";
   //  echo 'alex';
   //  echo 1;
   //  var_dump(5);

   //  $nama = "kangjeng";
   //  $umur = 17;

   //  echo "check nama disini : " .$nama ."\n";
   //  var_dump($nama);
   //  echo "umurnya : .$umur";

   //array numerik
    $deret = array(1,2,3,4);
    echo implode("", $deret)."\n";

    $name = ['test', 'loo', 'mek'];
    echo implode(",", $name);

    var_dump($deret);

    //array asosiatif (mapping)
    $mobil = array(
      "warna" => "merah",
      "merk" => "Honda Jazz"
    );
    var_dump($mobil["warna"]);

    $boidata = array(
      "nik" => 3201234565,
      "nama" => "Paok Alpaok",
      "sekolah" => "IDN Boarding School",
      "alamat" => array(
         "kota" => "karawang"
      )
      );

    //penulisan variable dilambangkan menggunakan dollar ($)
    $name = 'dimas';

 ?>



 