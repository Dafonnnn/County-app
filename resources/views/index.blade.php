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
            <div class="side-button active" onclick="window.location.href = '/client';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button" onclick="window.location.href = '/invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button" onclick="window.location.href = '/pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
            <div class="side-button" onclick="window.location.href = '/logout';"><i class="fa-solid fa-logout"></i>Keluar</div>
        </aside>
        <main>
            <h1><span>Hello, </span>Daniel Fonseca</h1>

            <button class="button" onclick="window.location.href = '/client/create';">+ Add</button>
            <div class="info-container flex">
                <div class="info-box">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Client Aktif</p>
                    <h1>{{$client_aktif}}<span>saat ini</span></h1>
                </div>
                <div class="info-box-2">
                    <div>
                        <i class="fa-solid fa-user-group"></i>
                        <p>Paket Aktif</p>
                    </div>
                    <div class="bars">
                        <div class="bar gold" style="width:{{$paket_gold*20}}px">{{$paket_gold}}</div>
                        <div class="bar silver" style="width:{{$paket_silver*20}}px">{{$paket_silver}}</div>
                        <div class="bar bronze" style="width:{{$paket_bronze*20}}px">{{$paket_bronze}}</div>
                        <div class="bar itbss" style="width:{{$paket_itbss*20}}px">{{$paket_itbss}}</div>
                    </div>


                </div>
            </div>
            <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat Perusahaan</th>
                    <th>No Telpon Perusahaan</th>
                    <th>Status</th>
                    <th>Paket</th>
                    <th>Kebutuhan Laporan</th>
                    <th>Masa Aktif</th>
                    <th>Nama PIC</th>
                    <th>Telpon PIC</th>
                    <th>Alamat PIC</th>
                    <th>Action</th>
                </tr>
                @foreach ( $clients as $client)
                <tr>
                    <td class="bold">{{$client->id}}</td>
                    <td class="bold">{{$client->nama_perusahaan}}</td>
                    <td class="bold">{{$client->alamat_perusahaan}}</td>
                    <td>{{$client->no_telp_perusahaan}}</td>
                    <td><div class="bar {{$client->status == 'Aktif' ? 'aktif' : 'nonaktif'}}">{{$client->status}}</div></td>
                    <td><div class="bar {{$client->paket == 'Aktif' ? 'aktif' : 'nonaktif'}}">{{$client->paket}}</div></td>
                    <td>{{$client->kebutuhan_laporan}}</td>
                    <td>{{$client->masa_aktif}}</td>
                    <td>{{$client->nama_pic}}</td>
                    <td>{{$client->telp_pic}}</td>
                    <td>{{$client->alamat_pic}}</td>
                    <td class="flex">
                        <a class="action-btn edit" href="/client/{{$client->id}}/edit"><i class="fa-solid fa-pencil"></i></a>
                        <form action="client/{{$client->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="action-btn delete"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </main>
    </div>
</body>
</html>

