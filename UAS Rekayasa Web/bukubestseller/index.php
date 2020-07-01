<pre>
Dokumentasi api:

<strong>Endpoint 1:</strong>
<strong>"/buku.php"</strong>
metode: <strong>GET</strong>
penjelasan: Endpoint ini akan mengembalikan respon berupa daftar buku-buku yang ada pada database
parameter yang dibutuhkan: <em>apikey</em>
contoh respon:

"status": {
    "code": 200,
    "description": "Request OK",
    "message": "Valid"
  },
  "results": [
    {
      "id_buku": "1",
      "nama_buku": "Sebuah Seni Untuk bersikap Bodoh Amat",
      "jenis_buku": "Novel",
      "nama_penulis": "Mark manson",
      "tahun_penerbit": "2018"
    },
    {
      "id_buku": "2",
      "nama_buku": "Orang-orang Biasa ",
      "jenis_buku": "Novel",
      "nama_penulis": "Andera Hirata",
      "tahun_penerbit": "2019"
    }
  ]
}

<strong>Endpoint 2:</strong>
<strong>"/request.php"</strong>
metode: <strong>POST</strong>
penjelasan: Endpoint ini akan membutuhkan beberapa parameter yang nilainya akan dimasukkan kedalam daftar request buku untuk dimasukkan kedalam database.
parameter yang dibutuhkan: <em>apikey</em>, <em>nama_buku</em>, <em>jenis_buku</em>, <em>tahun_penerbit</em>
contoh respon:

{
    "status": {
        "code": 200,
        "description": "Request OK",
        "message": "Valid"
    },
    "results": {
        "status": "Buku berhasil dimasukkan kedalam daftar request database kami."
    }
}


<a href="register.php">Dapatkan api key</a>

</pre>