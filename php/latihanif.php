<style>
    .judul {
        height: auto;
        width: fit-content;
        color: mediumseagreen;
        border-bottom: 1px solid;
    }

    label {
        display: block;
    }
</style>

<h3 class="judul">Latihan if</h3>

<form action="" method="POST">
    <label for="pinjaman">Pinjaman :</label>
    <input type="text" name="pinjaman" id="pinjaman">
    <label for="jaminan">Jaminan :</label>
    <select name="jaminan" id="jaminan">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <!-- <input type="text" name="jaminan" id="jaminan"> -->
    <br><br>
    <button type="submit" name="submit">Cek Penawaran!</button>
</form>

<?php
    //menangkap data form di atas
    if (isset($_POST['submit'])) {
        if(empty($_POST['pinjaman']) || empty($_POST['jaminan']))
        {
            header('location:latihanif.php');
        } else {
            //kondisi penawaran dengan jaminan
            $lebih = 0;
            $lima = $_POST['pinjaman']*5/100;
            $sepuluh = $_POST['pinjaman']*10/100;

            if ($_POST['pinjaman'] <= "5000000" && $_POST['jaminan'] =='1'||$_POST['jaminan'] =='0') {
                $lebih=$lima;
            } else if ($_POST['pinjaman'] <= "5000000" && $_POST['jaminan'] =='2') {
                $lebih=$sepuluh;
            } else if ($_POST['pinjaman'] <= "5000000" && $_POST['jaminan'] =='3') {
                $lebih=$sepuluh;
            } else {
                $lebih=5000000;
            }

            echo "Penawaran = " . $lebih;
        }
    }
?>