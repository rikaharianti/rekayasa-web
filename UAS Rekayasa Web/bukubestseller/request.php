<?php
    header("Content-Type: application/json");

    $result = array();

    function status($kode, $deskripsi, $pesan){
      $result['status']['code'] = $kode;
      $result['status']['description'] = $deskripsi;
      $result['status']['message'] = $pesan;

      return $result;
    }
   
    //tangkap method
    $method = $_SERVER["REQUEST_METHOD"];

     //filter method
     if($method=='POST'){
      $result = status(200, 'Request OK', 'Valid');

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bukubestseller";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if(isset($_POST['apikey']) && isset($_POST['nama_buku']) && isset($_POST['jenis_buku'])&& isset($_POST['tahun_penerbit'])){
        $apikey = $_POST['apikey'];
        $nama_buku = $_POST['nama_buku'];
        $jenis_buku = $_POST['jenis_buku'];
        $tahun_penerbit = $_POST['tahun_penerbit'];

        $status = $conn->query("select count(api_key) as hasil from user where api_key='".$apikey."'");

        $uservalid = $status->fetch_all(MYSQLI_ASSOC);

        if($uservalid[0]['hasil']){
          $sql = 'insert into daftar_request (nama_buku, jenis_buku, tahun_penerbit) values ("'.$nama_buku.'", "'.$jenis_buku.'", "'.$tahun_penerbit.'")';

          $statusrequest = $conn->query($sql);

          if($statusrequest){
            $result['results']['status'] = "Buku berhasil dimasukkan kedalam daftar request database kami.";
          } else {
            $result['results']['status'] = "Proses request gagal, silahkan coba lagi";
          }
        } else {
          $result = status(200, 'Request OK', 'API key tidak valid. Silahkan coba lagi');
        }
      } else {
        $result = status(404, 'Bad Request', 'Parameter yang dibutuhkan tidak diatur. Silahkan atur parameter apikey, nama_buku, jenis_buku, tahun_penerbit dan coba lagi.');
      }

     } else {
       $result = status(404, 'Bad Request', 'Silahkan melakukan request dengan metode POST');
     }

    echo json_encode($result);

?>