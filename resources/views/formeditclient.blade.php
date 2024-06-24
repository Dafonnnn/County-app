<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{'../../assets/style.css'}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <div><img src="logo.png" alt=""></div>
        <div><input type="text" placeholder="Search"></div>
    </nav>
    <div class="flex">
         <aside>
            <div class="side-button active" onclick="window.location.href = '/client';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button" onclick="window.location.href = '/invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button" onclick="window.location.href = '/pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
            <div class="side-button" onclick="window.location.href = '/logout';"><i class="fa-solid fa-logout"></i>Keluar</div>
        </aside>
        <main>
        <form action="/client/{{$client->id}}" method="post">
            @csrf
            @method('PUT')

            <p>Nama Perusahaan</p>
            <input type="text" class="form-input" name="nama_perusahaan" id="nama_perusahaan" value="{{$client->nama_perusahaan}}">
            <p>Alamat Perusahaan</p>
            <input type="text" class="form-input" name="alamat_perusahaan" id="alamat_perusahaan" value="{{$client->alamat_perusahaan}}">
            <p>Nomor Telpon Perusahaan</p>
            <input type="text" class="form-input" name="no_telp_perusahaan" id="no_telp_perusahaan" value="{{$client->no_telp_perusahaan}}">
            <p>Status</p>
            <select name="status" id="status" class="form-input" value="{{$client->status}}">
                <option value="aktif"><div class="bar aktif">Aktif</div></option>
                <option value="nonaktif"><div class="bar aktif">Nonaktif</div></option>
            </select>
            <p>Paket</p>
            <select name="paket" id="paket" class="form-input" value="{{$client->paket}}">
                <option value="bronze"><div class="bar aktif">Bronze</div></option>
                <option value="silver"><div class="bar aktif">Silver</div></option>
                <option value="gold"><div class="bar aktif">Gold</div></option>
                <option value="itbss"><div class="bar aktif">ITBSS</div></option>
            </select>
            <p>Kebutuhan Laporan</p>
            <textarea name="kebutuhan_laporan" id="kebutuhan_laporan" cols="20" rows="30">{{$client->kebutuhan_laporan}}</textarea>
            <p>Masa Aktif</p>
            <input type="date" class="form-input" name="masa_aktif" id="masa_aktif" value="{{$client->masa_aktif}}">
            <p>Nama PIC</p>
            <input type="text" class="form-input" name="nama_pic" id="nama_pic" value="{{$client->nama_pic}}">
            <p>Alamat PIC</p>
            <input type="text" class="form-input" name="alamat_pic" id="alamat_pic" value="{{$client->alamat_pic}}">
            <p>Nomor Telpon PIC</p>
            <input type="text" class="form-input" name="telp_pic" id="telp_pic" value="{{$client->telp_pic}}">
            <button class="button">Submit</button>
        </form>
        </main>
    </div>
</body>
