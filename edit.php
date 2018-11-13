<?php
    require 'functions.php';
    // cek apakah button sudah ditekan atau belum
    if(isset($_POST['submit']))
    {

        // cek sukses data dirubh menggunakan function edit pada functions.php
        if(edit($_POST) > 0)
        {
            echo "
                <script>
                    alert('data berhasil diperbarui');
                    document.location.href='index.php';
                </script>

                ";
        } else {
            echo "
            <script>
                alert('data gagal diperbarui');
                document.location.href='edit.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
    // menggunakan method get untuk mengambil id yang telah terseleksi oleh user dan dimasukkan
    // ke dalam variabel baru yaitu $id
    $id = $_GET[id];
    var_dump($id);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update data</title>
    </head>
    <body>
        <h1>Update Data Mahasiswa</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <!-- for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga -->
                    <label for="Nama">Nama:</label>
                    <!-- untuk mengisian name besar kecilnya harus sesuai dengan fieldnya -->
                    <input type="text" name="Nama" id="Nama" >
                </li>
                <li>
                    <label for="Nim">NIM :</label>
                    <input type="text" name="Nim" id="Nim" required>
                </li>
                <li>
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="Email" required>
                </li>
                <li>
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" id="Jurusan" required>
                </li>
                <li>
                    <label for="Gambar">Gambar</label>
                    <input type="text" name="Gambar" id="Gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit"> Update </button>
                </li>
            </ul>

        </form>
    </body>
</html>