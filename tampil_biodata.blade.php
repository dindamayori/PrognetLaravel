<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Biodata Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', serif; /* Change the font-family here */
            background-color: lightblue;
            color: black;
        }

        .card-header {
            background-color: lightyellow;
        }

        .highlight-text {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                <h1>_________________</h1>  
                <h1>Biodata Mahasiswa</h1>
                <h1>_________________</h1>
            </div>
        <div class="card-body">
          <h5>NIM : {{ $send->nim }}</h5>
          <h5>Nama Lengkap : {{ $send->fullname }}</h5>
          <h5>Jenis Kelamin : {{ $send->jeniskelamin }}</h5>
          <h5>Hoby : {{ $send->hoby }}</h5>
          <h5>Fakultas : {{ $send->fakultas }}</h5>
          <h5>Tanggal Lahir : {{ $send->tgllahir }}</h5>
          <h5>E-mail : {{ $send->email }}</h5>
          <h5>Kota Asal : {{ $send->kota }}</h5>
        </div>
      </div>
    </div>
</body>
</html>