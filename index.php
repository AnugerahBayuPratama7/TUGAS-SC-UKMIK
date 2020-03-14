<!DOCTYPE html>
<html>

<head>
    <link rel="styleshett" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="main">
            <form method="get" action="proses.php" id="form">
                <h2>DATA IDENTITAS</h2>
                <hr>
                <label>Nama :</label>
                <input type="text" name="fnama" id="fnama" />

                <label>Alamat :</label>
                <input type="text" name="lalamat" id="lalamat" />

                <!-- kode program modul 6 -->
                <p>
                    <label> Jenis Kelamin : </label>
                    <input type="radio" name="jkel" value="laki-laki">Laki-laki
                    <input type="radio" name="jkel" value="Perempuan">Perempuan
                </p>

                <p>
                    <label> Program Studi </label>
                    <select name="prodi">
                        <option value="SI">SI</option>
                        <option value="TI">TI</option>
                        <option value="TK">TK</option>
                        <option value="KA">KA</option>
                        <option value="MI">MI</option>
                    </select>
                </p>

                <P>
                    <label>Hobi</label>
                    <input type="checkbox" name="cekhobi[]" value="menyanyi" />
                    <label for="chkSing">Menyanyi</label>
                    <input type="checkbox" name="cekhobi[]" value="olahraga" />
                    <label for="cekhobi">Olah Raga</label>
                </P>

                <!-- baris akhir modul 6 -->

                <input type="submit" name="submit" id="submit" value="submit">
            </form>

        </div>
    </div>

</body>

</html>