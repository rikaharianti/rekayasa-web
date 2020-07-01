<?php
    header("Content-Type: application/json");

    //inisialisasi variable aray untuk hasil
    $result = array();

    //fungsi inisialisasi status respon
    function status($kode, $deskripsi, $pesan){
      $result['status']['code'] = $kode;
      $result['status']['description'] = $deskripsi;
      $result['status']['message'] = $pesan;

      return $result;
    }
   
    //tangkap method
    $method = $_SERVER["REQUEST_METHOD"];

     //filter method
     if($method=='GET'){
      $result = status(200, 'Request OK', 'Valid');

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "bukubestseller";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if(isset($_GET['apikey'])){
        $apikey = $_GET['apikey'];

        $status = $conn->query("select count(api_key) as hasil from user where api_key='".$apikey."'");

        $uservalid = $status->fetch_all(MYSQLI_ASSOC);

        if($uservalid[0]['hasil']){
          $sql = "SELECT * FROM daftar_buku";

          $hasil = $conn->query($sql);

          $result['results'] = $hasil->fetch_all(MYSQLI_ASSOC);
        } else {
          $result = status(200, 'Request OK', 'API key tidak valid. Silahkan coba lagi');
        }
      } else {
        $result = status(404, 'Bad Request', 'Parameter yang dibutuhkan tidak diatur. Silahkan atur parameter apikey dan coba lagi.');
      }

     } else {
       $result = status(404, 'Bad Request', 'Silahkan melakukan request dengan metode POST');
     }

    echo json_encode($result);

?>