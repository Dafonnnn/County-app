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
    <nav><img src="logo.png" alt=""></nav>
    <div class="flex">
        <aside>
            <div class="side-button" onclick="window.location.href = 'client';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button active" onclick="window.location.href = 'invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button" onclick="window.location.href = 'pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
            
        </aside>
        <main>
            <h1><span>Hello, </span>Daniel Fonseca</h1>
            <button class="button" onclick="window.location.href = 'forminvoice';">+ Add</button>
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
                <!-- Copy Dari Sini -->
                <tr> 
                    <td class="bold">1</td>
                    <td class="bold">Tambah Sesuai Kebutuhan</td>
                    <td>02/03/2024</td>
                    <td>1 bulan</td>
                    <td><div class="bronze bar">Bronze</div></td>
                    <td>Rp1.000.000</td>
                    <td>The report highlights a 10% increase in...</td>
                    <td>123819238</td>
                    <td>123819238</td>
                    <td class="flex">
                        <div class="action-btn edit"><i class="fa-solid fa-pencil"></i></div>
                        <div class="action-btn delete"><i class="fa-solid fa-trash-can"></i></div>
                    </td>
                </tr>
                <!-- Sampai Sini untuk tambah kolum -->
            </table>
            </div>
        </main>
    </div>
</body>
</html>