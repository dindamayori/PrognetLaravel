<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Biodata Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Google Font (Roboto) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <style>
        body {
            
            font-family: 'times new roman', sans-serif;
            background-color: lightblue; /* Change the background color here */
            color: black;
            
        }

        .card-header {
            background-color: lightgreen; /* Change the background color of the card header here */
        }

        .highlight-text {
            background-color: yellow; /* Change the background color for highlighted text */
        }
    </style>
</head>
<body style="background-color: lightblue; color: black;">
<div class="container mt-4">
      <h1 class="text-center mb-2">______________________</h1>
      <h1 class="text-center mb-2">Form Biodata Mahasiswa</h1>
      <h1 class="text-center mb-2">______________________</h1>
        <form name="formBiodata" action="/mahasiswaku/{{ $mahasiswaku->id }}" method="post" onsubmit="return validateForm()">
        @csrf
        @method('put')
        <div class="form-group mb-3">
            <label><strong>Nim :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="Nim" class="form-control" value="{{ $mahasiswaku->nim }}">
          </div>
          <div>
        <div class="form-group mb-3">
            <label><strong>Nama Lengkap:</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control" value="{{ $mahasiswaku->fullname }}">
          </div>
          <div>
            <label"><strong>Jenis Kelamin:</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki' @if ($mahasiswaku->jeniskelamin=='laki-laki'){{ "checked" }} @endif >LAKI - LAKI</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan' @if ($mahasiswaku->jeniskelamin=='perempuan'){{ "checked" }} @endif >PEREMPUAN</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak ingin Memberi Tahu' @if ($mahasiswaku->jeniskelamin=='Tidak ingin Memberi Tahu'){{ "checked" }} @endif >LAINNYA</p>
          </div>
          <div class="form-group mb-3">
            <label><strong>Hoby :</strong></label>
            <input type="text" name="hoby" id="hoby" placeholder="Hoby" class="form-control" value="{{ $mahasiswaku->hoby }}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Fakultas :</strong></label>
            <select name="fakultas" id="fakultas" class="form-control">
              <option selected>Pilih Fakultas</option>
              <option value="Fakultas Ilmu Budaya"@if ($mahasiswaku->fakultas=='Fakultas Ilmu Budaya'){{ "selected" }} @endif >Fakultas Ilmu Budaya</option>
              <option value="Fakultas Kedokteran"@if ($mahasiswaku->fakultas=='Fakultas Kedokteran'){{ "selected" }} @endif >Fakultas Kedokteran</option>
              <option value="Fakultas Kedokteran Hewan"@if ($mahasiswaku->fakultas=='Fakultas Kedokteran Hewan'){{ "selected" }} @endif >Fakultas Kedokteran Hewan</option>
              <option value="Fakultas Pariwisata"@if ($mahasiswaku->fakultas=='Fakultas Pariwisata'){{ "selected" }} @endif >Fakultas Pariwisata</option>
              <option value="Fakultas Pertanian"@if ($mahasiswaku->fakultas=='Fakultas Pertanian'){{ "selected" }} @endif >Fakultas Pertanian</option>
              <option value="Fakultas Teknologi Pertanian"@if ($mahasiswaku->fakultas=='Fakultas Teknologi Pertanian'){{ "selected" }} @endif >Fakultas Teknologi Pertanian</option>
              <option value="Fakultas Peternakan"@if ($mahasiswaku->fakultas=='Fakultas Peternakan'){{ "selected" }} @endif >Fakultas Peternakan</option>
              <option value="Fakultas Ekonomi dan Bisnis"@if ($mahasiswaku->fakultas=='Ekonomi dan Bisnis'){{ "selected" }} @endif >Fakultas Ekonomi dan Bisnis</option>
              <option value="Fakultas Hukum"@if ($mahasiswaku->fakultas=='Fakultas Hukum'){{ "selected" }} @endif >Fakultas Hukum</option>
              <option value="Fakultas Teknik"@if ($mahasiswaku->fakultas=='Fakultas Teknik'){{ "selected" }} @endif >Fakultas Teknik</option>
              <option value="Fakultas Ilmu Sosial dan Ilmu Politik"@if ($mahasiswaku->fakultas=='Fakultas Ilmu Sosial dan Ilmu Politik'){{ "selected" }} @endif >Fakultas Ilmu Sosial dan Ilmu Politik</option>
              <option value="Fakultas Ilmu Kelautan dan Perikanan"@if ($mahasiswaku->fakultas=='Fakultasn Ilmu Kelautan dan Perikanan'){{ "selected" }} @endif >Fakultas Ilmu Kelautan dan Perikanan</option>
              <option value="Fakultas Matematika dan Ilmu Pengetahuan Alam"@if ($mahasiswaku->fakultas=='Fakultas Matematikan dan Ilmu Pengetahuan Alam'){{ "selected" }} @endif >Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
            </select>
         </div>
          <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Tanggal Lahir"value="{{ $mahasiswaku->tgllahir }}">
            </div>

          <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control"value="{{ $mahasiswaku->email }}">
          </div>
          <div class="form-group mb-3">
            <label><strong>Kota Asal :</strong></label>
            <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota"value="{{ $mahasiswaku->kota }}">
          </div>
          <div>
            <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
          </div>
        </form>
      </div>
    <script>
      function validateForm() {
        // Validasi Nama Lengkap
        if (document.forms["formBiodata"]["fullname"].value == "") {
            alert("Masukkan Nama Lengkap Anda");
            document.forms["formBiodata"]["fullname"].focus();
            return false;
        }
        // Validasi NIM
        if (document.forms["formBiodata"]["nim"].value == "") {
            alert("Masukkan Nim Anda");
            document.forms["formBiodata"]["nim"].focus();
            return false;
        }
        // Validasi Jenis Kelamin
        var jeniskelamin = document.getElementsByName('jeniskelamin');
        var genValue = false;
          for(var i=0; i<jeniskelamin.length;i++){
            if(jeniskelamin[i].checked == true){
                genValue = true;    
            }
          }
          if(!genValue){
            alert("Pilih Jenis Kelamin Anda");
            return false;
          }
        // Validasi Hoby
        if (document.forms["formBiodata"]["hoby"].value == "") {
            alert("Masukkan Hoby Anda");
            document.forms["formBiodata"]["hoby"].focus();
            return false;
        }
        // Validasi Fakultas
        if (document.forms["formBiodata"]["fakultas"].selectedIndex < 1) {
            alert("Pilih Fakultas Anda");
            document.forms["formBiodata"]["fakultas"].focus();
            return false;
        }
        // Validasi Tanggal Lahir
        if (document.forms["formBiodata"]["tgllahir"].value == "") {
            alert("Masukkan Tanggal Lahir Anda");
            document.forms["formBiodata"]["tgllahir"].focus();
            return false;
        }
        // Validasi E-mail
        if (document.forms["formBiodata"]["email"].value == "") {
            alert("Masukkan E-mail Aktif Anda");
            document.forms["formBiodata"]["email"].focus();
            return false;
        }
        // Validasi Kota Asal
        if (document.forms["formBiodata"]["kota"].value == "") {
            alert("Masukkan Kota Anda");
            document.forms["formBiodata"]["kota"].focus();
            return false;
        }
      }
    </script>
</body>
</html>