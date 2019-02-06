<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pembelian Buku Duniailkom</title>
</head>

<body>
    <h1> Formuliar Pembelian Buku Duniailkom</h1>
    <form action="proses.php" method="get">
    <fieldset name="Form Order">
    <legend>Isilah form dibawah ini untuk melakukan pemesanan</legend>
    <p>Nama         : <input type="text" name="nama" id="nama" /> </p>
    <p>Email        : <input type="email" name="email" id="email" /> </p>
    <p>Jenis Buku   : <select name="buku">
        <option name="buku" value="HTML Uncover">HTML Uncover</option>
        <option name="buku" value="CSS Uncover">CSS Uncover</option>
        <option name="buku" value="PHP Uncover">PHP Uncover</option>
        <option name="buku" value="JavaScript Uncover">JavaScript Uncover</option>
        <option name="buku" value="MySQL Uncover">MySQL Uncover</option> 
        </select></p>
    <p>Jumlah buku   : <select name="jumlah">
        <?php
        for($i=1; $i<=10; $i++) {
            echo"<option name='jumlah' value='$i'>";
            echo"$i";
            echo"</option>";

        }
        ?>
        </select></p>
    <p>Alamat Pengiriman    : <textarea name=alamat cols="20"></textarea></p>
    <p>Kurir Pengiriman     : <label><input type="radio" name="kurir" value="JNE"/>JNE</label> <label><input type="radio" name="kurir" value="TIKI"/>TIKI</label> <label><input type="radio" name="kurir" value="POS"/>POS</label> </p>
    <p>Ongkos Kirim         : <input type="text" name="ongkir"/></p>
    <p>Tanggal Dikirim      : <select name="tgl"> <?php
    for($i=1;$i<=31;$i++) {
        echo "<option name='tgl' value='$i'>";
        echo "$i";
        echo "</option>";
    }
    ?>
    </select>
    <select name="bln"> 
        <option name="bln" value="Januari">Januari</option>
        <option name="bln" value="Februari">Februari</option>
        <option name="bln" value="Maret">Maret</option>
        <option name="bln" value="April">April</option>
        <option name="bln" value="Mei">Mei</option>
        <option name="bln" value="Juni">Juni</option>
        <option name="bln" value="Juli">Juli</option>
        <option name="bln" value="Agustus">Agustus</option>
        <option name="bln" value="September">September</option>
        <option name="bln" value="Oktober">Oktober</option>
        <option name="bln" value="November">November</option>
        <option name="bln" value="Desember">Desember</option>
    </select>
    <select name="thn">
    <option name="thn" value="2016">2016</option>
    <option name="thn" value="2017">2017</option>
    <option name="thn" value="2018">2018</option>
    <option name="thn" value="2019">2019</option>
    <option name="thn" value="2020">2020</option>
    </select></p>
    
    <p>Tambahan         : <label><input type="checkbox" name="dvd" />DVD eBook</label>
    <label><input type="checkbox" name="kado" />Bungkus Kado</label> </p>
    </fieldset>
    <br>
    <input type="submit" name="submit" value="Pesan Buku" />
    </form>
    
</body>
</html>