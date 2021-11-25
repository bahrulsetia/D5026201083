<!DOCTYPE html>
<!-- Jangan dibaca yo sing koyo ngene, iki gawe moco2 ae awkkaowokaw -->
  <head>
    <!-- Pertama saya akan memasukkan CSS dari Bootstrap-nya -->
    <!-- Bootstrap merupakan sebuah library framework CSS yang telah dibuat khusus uintuk mengembangkan front end sebuah website -->
    <link
      rel="stylesheet"
      href="./Javascript Form Validation_files/bootstrap.min.css"
    />
    <!-- Setelah itu saya akan memasukkan beberapa file JavaScript yang dibutuhkan agar Bootstrap dapat berjalan optimal
    yakni Popper, dan JavaScript Bootstrap lalu jQuery untuk melakukan validasi form -->
    <script src="./Javascript Form Validation_files/jquery.min.js.download"></script>
    <script src="./Javascript Form Validation_files/popper.min.js.download"></script>
    <script src="./Javascript Form Validation_files/bootstrap.min.js.download"></script>
    <!-- Di sini saya akan memberi title untuk halaman web ini -->
    <title>Javascript Form Validation</title>
    <!-- Di sini saya akan memasukkan CSS untuk halaman webnya, agar terlihat lebih rapi -->
    <style>
    /* Pertama, CSS untuk bagian body */
      body {
        padding-top: 50px;
        padding-bottom: 50px;
      }
    /* Lalu untuk border atas */
      #borderatas {
        border: 1px solid rgb(95, 155, 122);
        border-bottom: 0px;

        border-radius: 10px 10px 0px 0px;
        background-color: #72ac8f;
      }
    /* Sekarang border bawah */
      #borderbawah {
        border: 1px solid rgb(98, 172, 165);
        border-top: 0px;

        border-radius: 0px 0px 10px 10px;
        background-color: rgb(95, 173, 156);
      }
    /* Lalu ini adalah CSS untuk input-inputnya seperti fname untuk full name, username untuk username, dan seterusnya */
      #fname,
      #uname,
      #email,
      #state,
      #addr,
      #zcode {
        border-radius: 0;
      }
    </style>
    <!-- Di sini akan menggunakan jQuery untuk melakukan validasi -->
    <script>
    // Pertama adalah fungsi validate() yang akan melakukan validasi terhadap form saat disubmit
    // dan akan menghentikan submit form apabila form masih belum sesuai kriteria
    // Contoh, seperti saat ada input box yang belum diisi, maka akan muncul peringatan dan form tidak bisa disubmit
      (function validate() {
        window.addEventListener(
          "load",
          function () {
            var forms = document.getElementsByClassName("needs-validation");
            var validation = Array.prototype.filter.call(
              forms,
              function (form) {
                // Di sini saya akan menambahkan event listener ketika form disubmit
                form.addEventListener(
                  "submit",
                  function (event) {
                    // Di sini saya akan melakukan pengecekan
                    // Apabila masih belum sesuai kriteria, maka akan dihentukan submit formnya
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                  },
                  false
                );
              }
            );
          },
          false
        );
      })();

    // Di sini akan dilakukan fungsi untuk melakukan validasi pada input box fname atau full name
      $(document).ready(function () {
        $("#fname").on("input", function () {
        // Di sini saya menggunakan regex yang akan mengecek apakah isi dari fname
        // Input hanya akan menerima huruf besar dan huruf kecil, apabila input selain huruf (seperti angka, tanda baca) maka tidak akan muncul di input box
          var expression = /[^a-zA-z ]/g;
          if ($(this).val().match(expression)) {
            $(this).val($(this).val().replace(expression, ""));
          }
        });
      });

    // Di sini akan dilakukan fungsi untuk melakukan validasi pada input box zcode atau zip code
      $(document).ready(function () {
        $("#zcode").on("input", function () {
        // Di sini saya juga menggunakan regex yang akan mengecek apkaah isi dari zcode
        // Input hanya akan menerima angka, apabila input selain angka maka tidak akan muncul di input box
          var expression = /[^0-9]/g;
          if ($(this).val().match(expression)) {
            $(this).val($(this).val().replace(expression, ""));
          }
        });
      });
    </script>
  </head>

  <!-- Sekarang masuk ke HTML, saya akan menggunakan class-class dari Bootstrap beserta menambah input box untuk isian form -->
  <body>
      <!-- Pertama untuk border atas, nanti akan muncul tulisan di bagian atas halaman -->
    <div class="container p-sm-0">
      <div class="container-sm p-4" style="text-align: center" id="borderatas">
        <h5 style="font-weight: 600">JavaScript Form Validation</h5>
      </div>

      <!-- Lalu untuk border bawah, nanti di bawah tulisan sebelumnya akan muncul tulisan lagi -->
      <div class="container-sm pl-4 pr-4 pb-4 pt-3" id="borderbawah">
        <p style="color: rgb(255, 0, 0); font-size: small">
          All fields are mandatory
        </p>

        <!-- Di sini saya akan membuat HTML untuk formnya -->
        <form action="https://id.pinterest.com/" class="needs-validation">
            <!-- Pertama, untuk fname atau full name -->
          <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input
              type="text"
              class="form-control"
              name="fullname"
              id="fname"
              placeholder=""
              required=""
            />
            <!-- Lalu selanjutnya ini untuk case jika validasi berhasil -->
            <div class="valid-feedback">Done!</div>
            <!-- Lalu selanjutnya ini untuk case jika validasi gagal -->
            <div class="invalid-feedback">Please provide your full name.</div>
          </div>
          <!-- Kedua, untuk uname atau username -->
          <div class="form-group">
            <label for="username">Username(6-8 characters):</label>
            <input
              type="text"
              class="form-control"
              name="username"
              id="uname"
              placeholder=""
              maxlength="8"
              minlength="6"
              required=""
            />
            <!-- Lalu selanjutnya ini untuk case jika validasi berhasil -->
            <div class="valid-feedback">Done!</div>
            <!-- Lalu selanjutnya ini untuk case jika validasi gagal -->
            <div class="invalid-feedback" style="text-align: justify">
              Username must be min. 6 characters and max. 8 characters.
            </div>
          </div>
          <!-- Ketiga, untuk email -->
          <div class="form-group">
            <label for="email">Email:</label>
            <input
              type="email"
              class="form-control"
              name="email"
              id="email"
              placeholder=""
              required=""
            />
            <!-- Lalu selanjutnya ini untuk case jika validasi berhasil -->
            <div class="valid-feedback">Done!</div>
            <!-- Lalu selanjutnya ini untuk case jika validasi gagal -->
            <div class="invalid-feedback">
              Please provide your email address.
            </div>
          </div>
          <!-- Keempat, untuk state atau negara bagian -->
          <div class="form-group">
            <label for="state">State:</label>
            <select class="custom-select" name="state" id="state" required="">
              <option selected="" disabled="" value="">Please Choose</option>
              <option>Miami</option>
              <option>California</option>
              <option>Milwaukee</option>
            </select>
            <!-- Lalu selanjutnya ini untuk case jika validasi berhasil -->
            <div class="valid-feedback">Done!</div>
            <!-- Lalu selanjutnya ini untuk case jika validasi gagal -->
            <div class="invalid-feedback">Please choose your state.</div>
          </div>
          <!-- Kelima, untuk address atau alamat -->
          <div class="form-group">
            <label for="address">Address:</label>
            <input
              type="text"
              class="form-control"
              name="address"
              id="addr"
              placeholder=""
              required=""
            />
            <!-- Lalu selanjutnya ini untuk case jika validasi berhasil -->
            <div class="valid-feedback">Done!</div>
            <!-- Lalu selanjutnya ini untuk case jika validasi gagal -->
            <div class="invalid-feedback">Please provide your address.</div>
          </div>
          <!-- Keenam, untuk zipcode atau kode pos -->
          <div class="form-group">
            <label for="zipcode">Zip Code:</label>
            <input
              type="text"
              class="form-control"
              name="zipcode"
              id="zcode"
              minlength="6"
              maxlength="6"
              placeholder=""
              required=""
            />
            <!-- Lalu selanjutnya ini untuk case jika validasi berhasil -->
            <div class="valid-feedback">Done!</div>
            <!-- Lalu selanjutnya ini untuk case jika validasi gagal -->
            <div class="invalid-feedback">Zip code must be min. 6 numbers</div>
          </div>
          <!-- Lalu ini button untuk submit form -->
          <button class="btn btn-warning btn-l btn-block" style="color: white">
            Check Form
          </button>
          <br />
        </form>
      </div>
    </div>
  </body>
</html>
