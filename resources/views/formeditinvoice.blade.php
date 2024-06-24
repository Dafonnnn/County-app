<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
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
            <form action="{{ route('update-invoice', ['id' => $invoice->id]) }}" method="POST">
                @csrf
                <p>Nama Perusahaan</p>
                <input type="text" class="form-input" name="nama_client" value="{{ $invoice->nama_client }}">
                <p>Tanggal Deal</p>
                <input type="date" class="form-input" name="tanggal_deal" value="{{ $invoice->tanggal_deal }}">
                <p>Periode Paket</p>
                <select name="periode_paket" id="" class="form-input">
                    <option value="bulanan" {{ ($invoice->periode_paket == "bulanan") ? "selected" : "" }}>
                        <div class="bar aktif">Bulanan</div>
                    </option>
                    <option value="tahunan" {{ ($invoice->periode_paket == "tahunan") ? "selected" : "" }}>
                        <div class="bar aktif">Tahunan</div>
                    </option>
                </select>
                <p>Jenis Paket</p>
                <select name="jenis_paket" id="" class="form-input">
                    <option value="bronze" {{ ($invoice->jenis_paket == "bronze") ? "selected" : "" }}>
                        <div class="bar aktif">Bronze</div>
                    </option>
                    <option value="silver" {{ ($invoice->jenis_paket == "silver") ? "selected" : "" }}>
                        <div class="bar aktif">Silver</div>
                    </option>
                    <option value="gold" {{ ($invoice->jenis_paket == "gold") ? "selected" : "" }}>
                        <div class="bar aktif">Gold</div>
                    </option>
                    <option value="itbss" {{ ($invoice->jenis_paket == "itbss") ? "selected" : "" }}>
                        <div class="bar aktif">ITBSS</div>
                    </option>
                </select>
                <p>Closing Bill</p>
                <input type="number" name="closing_bill" class="form-input" value="{{ $invoice->closing_bill }}">
                <p>PIC Laporan</p>
                <textarea name="pic_laporan" id="" cols="20" rows="30">{{ $invoice->pic_laporan }}</textarea>
                <p>Pembayaran</p>
                <input type="number" name="pembayaran" class="form-input" value="{{ $invoice->pembayaran }}">
                <p>Tanda Selesai</p>
                <input type="number" name="tanda_selesai" class="form-input" value="{{ $invoice->tanda_selesai }}">

                <button type="submit" class="button">Submit</button>
            </form>
        </main>
    </div>
</body>
