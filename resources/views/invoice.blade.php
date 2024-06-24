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
    <nav><img src="logo.png" alt=""></nav>
    <div class="flex">
        <aside>
            <div class="side-button" onclick="window.location.href = '/client';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button active" onclick="window.location.href = '/invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button" onclick="window.location.href = '/pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
            <div class="side-button" onclick="window.location.href = '/logout';"><i class="fa-solid fa-logout"></i>Keluar</div>
        </aside>
        <main>
            <h1><span>Hello, </span>Daniel Fonseca</h1>
        <button class="button" onclick="window.location.href = '/forminvoice';">+ Add</button>
            <div class="table-container">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama </th>
                        <th>Tanggal Deal</th>
                        <th>Periode Paket</th>
                        <th>Jenis Paket</th>
                        <th>Closing Bill</th>
                        <th>PIC Laporan</th>
                        <th>Pembayaran</th>
                        <th>Tanda Selesai</th>
                        <th>Action</th>
                    </tr>

                    @foreach($invoice as $key => $value)
                        <tr>
                            <td class="bold">{{ $value->id }}</td>
                            <td class="bold">{{ $value->nama_client }}</td>
                            <td>{{ $value->tanggal_deal }}</td>
                            <td>{{ $value->periode_paket }}</td>
                            <td>{{ $value->jenis_paket }}</td>
                            <td>Rp{{ number_format($value->closing_bill, 0, ",", ".") }}</td>
                            <td>{{ $value->pic_laporan }}</td>
                            <td>Rp{{ number_format($value->pembayaran, 0, ",", ".") }}</td>
                            <td>Rp{{ number_format($value->tanda_selesai, 0, ",", ".") }}</td>
                            <td class="flex">
                                <a href="{{ route('edit-invoice', ['id' => $value->id]) }}" class="action-btn edit"><i class="fa-solid fa-pencil"></i></a>
                                <a href="{{ route('delete-invoice', ['id' => $value->id]) }}" class="action-btn delete"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>

                    @endforeach
                    <!-- Copy Dari Sini -->
                    <!-- Sampai Sini untuk tambah kolum -->
                </table>
            </div>
        </main>
    </div>
</body>
</html>
