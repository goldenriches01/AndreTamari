<?php
// Memeriksa apakah data telah disubmit
if ($_POST['nama_pelanggan']) {
    // Mengambil data dari formulir
    $nama = htmlspecialchars($_POST['nama_pelanggan']);
    $email = htmlspecialchars($_POST['email_pelanggan']);
    $password = htmlspecialchars($_POST['password']);
     
    $nama_barang1 = (empty($_POST['barang'][0])) ? 'Sabun' : NULL;
    $nama_barang2 = (empty($_POST['barang'][1])) ? 'Sampo' : NULL;
    $nama_barang3 = (empty($_POST['barang'][2])) ? 'Odol' : NULL;
    $nama_barang4 = (empty($_POST['barang'][3])) ? 'Sikat gigi' : NULL;

    $harga_barang1 = (!empty($_POST['barang'][0])) ? $_POST['barang'][0] : NULL;
    $harga_barang2 = (!empty($_POST['barang'][0])) ? $_POST['barang'][1] : NULL;
    $harga_barang3 = (!empty($_POST['barang'][0])) ? $_POST['barang'][2] : NULL;
    $harga_barang4 = (!empty($_POST['barang'][0])) ? $_POST['barang'][3] : NULL;
    
    $jumlah_barang1 = (!empty($_POST['jumlah'][0])) ? $_POST['jumlah'][0] : NULL;
    $jumlah_barang2 = (!empty($_POST['jumlah'][0])) ? $_POST['jumlah'][1] : NULL;
    $jumlah_barang3 = (!empty($_POST['jumlah'][0])) ? $_POST['jumlah'][2] : NULL;
    $jumlah_barang4 = (!empty($_POST['jumlah'][0])) ? $_POST['jumlah'][3] : NULL;

    $detail_produk = '';

    if ($nama_barang1) {
        $detail_produk .= "
        <tr>
            <td>$nama_barang1 ({$jumlah_barang1})</td>
            <td>Rp $harga_barang1</td>
        </tr>";
    }
    if ($nama_barang2) {
        $detail_produk .= "
        <tr>
            <td>$nama_barang2 ({$jumlah_barang2})</td>
            <td>Rp $harga_barang2</td>
        </tr>";
    }
    if ($nama_barang3) {
        $detail_produk .= "
        <tr>
            <td>$nama_barang3 ({$jumlah_barang3})</td>
            <td>Rp $harga_barang3</td>
        </tr>";
    }
    if ($nama_barang4) {
        $detail_produk .= "
        <tr>
            <td>$nama_barang4 ({$jumlah_barang4})</td>
            <td>Rp $harga_barang4</td>
        </tr>";
    }

    
    $tampil = 
    "<style>
        body { font-family: Arial, sans-serif; }
        .invoice { width: 300px; margin: 0 auto; }
        .header, .footer { text-align: center; }
        .content { margin: 20px 0; }
        table { width: 100%; }
        th, td { text-align: left; padding: 5px; border-bottom: 1px solid #000; }
    </style>
    <div class='invoice'>
        <div class='header'>
            <h2 style='color: blue;'>Invoice</h2>
            <p>Data Pengguna</p>
        </div>
        <div class='content'>
            <table>
                <tr>
                    <th>NIM</th>
                    <th>23050717</th>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>Andre Tamari</th>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>".$nama."</td>
                </tr>
                 <tr>
                    <td>email</td>
                    <td>".$email."</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>".$password."</td>
                    </tr>
                    <tr>
                    <td>Password</td>
                    <td>".$password."</td>
                    </tr>
                    <tr>
                    <td>Detai produk</td><tr></tr>
                    </tr>
                    ".$detail_produk."
                    </table>
                    </div>
                </div>";
} else{
    $tampil = "Data tidak disumbit.";
}
echo $tampil;
?>
