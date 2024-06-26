<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{'assets/style.css'}}">
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
            <div class="side-button active" onclick="window.location.href = '/index';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button" onclick="window.location.href = '/invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button" onclick="window.location.href = '/pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
            <div class="side-button" onclick="window.location.href = '/logout';"><i class="fa-solid fa-logout"></i>Keluar</div>
        </aside>
        <main>
            <form action="{{ route('create-invoice') }}" method="POST">
                @csrf
                <p>Nama Perusahaan</p>
                <input type="text" class="form-input" name="nama_client">
                <p>Tanggal Deal</p>
                <input type="date" class="form-input" name="tanggal_deal">
                <p>Periode Paket</p>
                <select name="periode_paket" id="" class="form-input">
                    <option value="bulanan">
                        <div class="bar aktif">Bulanan</div>
                    </option>
                    <option value="tahunan">
                        <div class="bar aktif">Tahunan</div>
                    </option>
                </select>
                <p>Jenis Paket</p>
                <select name="jenis_paket" id="" class="form-input">
                    <option value="bronze">
                        <div class="bar aktif">Bronze</div>
                    </option>
                    <option value="silver">
                        <div class="bar aktif">Silver</div>
                    </option>
                    <option value="gold">
                        <div class="bar aktif">Gold</div>
                    </option>
                    <option value="itbss">
                        <div class="bar aktif">ITBSS</div>
                    </option>
                </select>
                <p>Closing Bill</p>
                <input type="number" name="closing_bill" class="form-input">
                <p>PIC Laporan</p>
                <textarea name="pic_laporan" id="" cols="20" rows="30"></textarea>
                <p>Pembayaran</p>
                <input type="number" name="pembayaran" class="form-input">
                <p>Tanda Selesai</p>
                <input type="number" name="tanda_selesai" class="form-input">

                <button type="submit" class="button">Submit</button>
            </form>
        </main>
    </div>
</body>
