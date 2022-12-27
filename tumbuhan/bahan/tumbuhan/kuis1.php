<!DOCTYPE html>
<html lang="en" dir="ltr">
  
<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:25:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Tumbuhan Lumut (Bryophyta)</title>
    <link rel="stylesheet" href="../navigasi.css">
    <link rel="stylesheet" href="../../border.css">
    <script src="../../../code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../../kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <!-- <body onload="drop();"> -->
  
  <!--header untuk judul sub bab-->
  <div class="header">
      <center>B. Tumbuhan Lumut (Bryophyta)</center>
  </div>
  <!-- navigasi sidebar (sebagai navigasi di sebelah kiri)-->
    <div class="btn">
      <span class="fas fa-bars"></span>
    </div>
      <nav class="sidebar">
        <div><img src="../gambar/LOGO.png"></div>
        <ul>
          <li class="beranda"><a href="../../index.php">Beranda</a></li>
          <li><a href="tumbuhan"  class="">Tumbuhan</a></li>
          <li>
            <a href="#"class="dropdown-btn active" style=" color: cyan; background: #389761;">Tumbuhan Lumut (Bryophyta)
              <span class="fas fa-caret-down"></span>
            </a>
            <ul class="lumut-tampil" style="display: block;">
              <li><a href="ciri_lumut" >Ciri-ciri Tumbuhan Lumut</a></li>
              <li><a href="reproduksi_lumut" >Reproduksi Lumut</a></li>
              <li><a href="klasifikasi_lumut" >Klasifikasi Lumut</a></li>
              <li><a href="peranan_lumut">Peranan Lumut Bagi Manusia</a></li>
              <li><a href="rangkuman1">Rangkuman</a></li>
              <li><a href="kuis1" style="color: cyan; background: #389761;" >Kuis 1</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-btn">Tumbuhan Paku (Pteridophyta)
              <span class="fas fa-caret-down"></span>
            </a>
            <ul class="pte-tampil">
              <li><a href="ciri_pteridophyta">Ciri-ciri Tubuh Pteridophyta</a></li>
              <li><a href="reproduksi_pteridophyta">Reproduksi Pteridophyta </a></li>
              <li><a href="klasifikasi_pteridophyta">Klasifikasi Pteridophyta</a></li>
              <li><a href="peranan_pteridophyta">Peranan Pteridophyta Bagi Manusia</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-btn">Tumbuhan Berbiji (Spermatophyta)
              <span class="fas fa-caret-down"></span>
            </a>
            <ul class="spe-tampil">
              <li><a href="ciri_spermatophyta">Ciri-ciri Spermatophyta</a></li>
              <li><a href="peranan_spermatophyta">Klasifikasi Spermatophyta</a></li>
            </ul>
          </li>

        </ul>
    </nav>
    <!-- javascript untuk navigasi-->
    <script>
      var dropdown = document.getElementsByClassName("dropdown-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }
    </script>
    <!--class untuk konten-->
    <div class="content">
      <br>
    
      <h3> <img src="../gambar/latihan.png"><p class="textjudul">KUIS 1</p></h3>
        <div class="canvas">
        <div class="">
            <p>Pilihlah satu jawaban yang paling benar !</p>
        <p>1. Tumbuhan lumut memiliki ciri-ciri sebagai berikut, kecuali …. </p>
          <div>
            <input type="radio" id="a1" name="drone" value="a1">
            <label for="a1">Habitat di tempat lembab</label>
          </div>

          <div>
            <input type="radio" id="b1" name="drone" value="b1">
            <label for="b1">mempunyai jaringan pembuluh</label>
          </div>

          <div>
            <input type="radio" id="c1" name="drone" value="c1">
            <label for="c1">tidak mempunyai jaringan pembuluh</label>
          </div>

          <div>
            <input type="radio" id="d1" name="drone" value="d1">
            <label for="d1">belum mempunyai akar, batang, dan daun sejati.</label>
            </div>
        <br>
        <p>2. Sporofit pada tumbuhan lumut adalah generasi yang menghasilkan ….</p>
          <div>
            <input type="radio" id="a2" name="drone" value="a2">
            <label for="a2">Protonema</label>
          </div>

          <div>
            <input type="radio" id="b2" name="drone" value="b2">
            <label for="b2">Anteridium</label>
          </div>

          <div>
            <input type="radio" id="c2" name="drone" value="c2">
            <label for="c2">Arkegonium</label>
          </div>

          <div>
            <input type="radio" id="d2" name="drone" value="d2">
            <label for="d2">Spora</label>
          </div>
        <br>
        <p>3. Anteridium pada tumbuhan lumut adalah generasi yang menghasilkan....</p>
          <div>
            <input type="radio" id="a3" name="drone" value="a3">
            <label for="a3">Protonema</label>
          </div>

          <div>
            <input type="radio" id="b3" name="drone" value="b3">
            <label for="b3">Spermatozoid</label>
          </div>

          <div>
            <input type="radio" id="c3" name="drone" value="c3">
            <label for="c3">Arkegonium</label>
          </div>

          <div>
            <input type="radio" id="d3" name="drone" value="d3">
            <label for="d3">Gamet</label>
          </div>
        <br>
        <p>4. Urutan yang benar bagian – bagian tumbuhan lumut daun dari ujung ke pangkal adalah …</p>
          <div>
            <input type="radio" id="a" name="drone" value="a">
            <label for="a">Operculum – kapsul – annulus – peristom</label>
          </div>

          <div>
            <input type="radio" id="b" name="drone" value="b">
            <label for="b">Peristom – operculum – kapsul – annulus</label>
          </div>

          <div>
            <input type="radio" id="c" name="drone" value="c">
            <label for="c">Operculum – peristom – annulus – kapsul</label>
          </div>

          <div>
            <input type="radio" id="d" name="drone" value="d">
            <label for="d">Peristom – kapsul – operculum – annulus</label>
          </div>
        <br>
        <p>5. Tumbuhan lumut ada yang berumah satu, artinya</p>
          <div>
            <input type="radio" id="a" name="drone" value="a">
            <label for="a">Anteridium dan arkegonium terdapat pada satu talus yang sama</label>
          </div>

          <div>
            <input type="radio" id="b" name="drone" value="b">
            <label for="b">Anteridium dan arkegonium terdapat pada talus yang berbeda</label>
          </div>

          <div>
            <input type="radio" id="c" name="drone" value="c">
            <label for="c">Pada talus lumut hanya terdapat satu anteridium</label>
          </div>

          <div>
            <input type="radio" id="d" name="drone" value="d">
            <label for="d">Pada talus lumut hanya terdapat satu arkegonium</label>
          </div>
        <br>
        <p>6. Berikut merupakan urutan ringkas dari daur hidup lumut adalah ….</p>
          <div>
            <input type="radio" id="a" name="drone" value="a">
            <label for="a">Talus – zigot – sel gamet – tumbuhan lumut</label>
          </div>

          <div>
            <input type="radio" id="b" name="drone" value="b">
            <label for="b">Talus – gemma – gamet – tumbuhan lumut</label>
          </div>

          <div>
            <input type="radio" id="c" name="drone" value="c">
            <label for="c">Tumbuhan lumut – zigot – gemma – talus</label>
          </div>

          <div>
            <input type="radio" id="d" name="drone" value="d">
            <label for="d">Tumbuhan lumut – gamet – zigot – talus</label>
          </div>
        <br>
        <p>7. Urutan siklus hidup tumbuhan Bryophyta pada fase ganetofitnya adalah ….</p>
          <div>
            <input type="radio" id="a" name="drone" value="a">
            <label for="a">Protonema – tumbuhan lumut – anteridium</label>
          </div>

          <div>
            <input type="radio" id="b" name="drone" value="b">
            <label for="b">Protonema – protalium – tumbuhan lumut</label>
          </div>

          <div>
            <input type="radio" id="c" name="drone" value="c">
            <label for="c">Protalium – protonema – anteridium</label>
          </div>

          <div>
            <input type="radio" id="d" name="drone" value="d">
            <label for="d">Protalium – spora – arkegonia</label>
          </div>
        <br>
        <p>8. Pada tumbuhan lumut yang berfungsi untuk menyerap air dan garam mineral adalah…</p>
          <div>
            <input type="radio" id="a" name="drone" value="a">
            <label for="a">Akar</label>
          </div>

          <div>
            <input type="radio" id="b" name="drone" value="b">
            <label for="b">Seta</label>
          </div>

          <div>
            <input type="radio" id="c" name="drone" value="c">
            <label for="c">Kapsul</label>
          </div>

          <div>
            <input type="radio" id="d" name="drone" value="d">
            <label for="d">Rhizoid</label>
          </div>
        <br>
        <p>9. Apa nama takson dari pada lumut hati?</p>
          <div>
            <input type="radio" id="a" name="drone" value="a">
            <label for="a">Hepaticopsida</label>
          </div>

          <div>
            <input type="radio" id="b" name="drone" value="b">
            <label for="b">Anthocerotopsida</label>
          </div>

          <div>
            <input type="radio" id="c" name="drone" value="c">
            <label for="c">marchantia polymorpha</label>
          </div>

          <div>
            <input type="radio" id="d" name="drone" value="d">
            <label for="d">Bryopsida</label>
          </div>
        <br>
        <p>10. Apa nama takson dari lumut daun?</p>
          <div>
            <input type="radio" id="a" name="drone" value="a">
            <label for="a">Sphagnum SP</label>
          </div>

          <div>
            <input type="radio" id="b" name="drone" value="b">
            <label for="b">Anthocerotopsida</label>
          </div>

          <div>
            <input type="radio" id="c" name="drone" value="c">
            <label for="c">marchantia polymorpha</label>
          </div>

          <div>
            <input type="radio" id="d" name="drone" value="d">
            <label for="d">Bryopsida</label>
          </div>
        <br>
        </div>
        </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
    <!--untuk mengakses file javascript-->
    <script src="script.js"></script>
    <script src="../navigasi.js"></script>

    <!--framework untuk MathJax/latex (untuk menulis rumus)-->
    <script type="text/javascript" async
      src="../../../cdn.mathjax.org/mathjax/latest/MathJaxb198.js?config=TeX-MML-AM_CHTML">
    </script>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
        tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
        });
    </script>
    <!--footer halaman yang berisi navigasi page halaman-->
    <div class="footer">
      <div class="navigasibawah">
        <center>
          <button >Sebelumnya</button>
          <a href="tumbuhan.php"><button class="btn1">1</button></a>
          <a href="ciri_lumut.php"><button >Selanjutnya</button></a>
        </center>
      </div>
      </div>
  </body>

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:26:04 GMT -->
</html>
