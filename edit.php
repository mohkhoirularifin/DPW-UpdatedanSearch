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
?>