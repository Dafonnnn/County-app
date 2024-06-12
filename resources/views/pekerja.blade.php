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
            <div class="side-button" onclick="window.location.href = 'index';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button" onclick="window.location.href = 'invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button active" onclick="window.location.href = 'pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
        </aside>
        <main>
            <h1><span>Hello, </span>Daniel Fonseca</h1>
            <button class="button" onclick="window.location.href = 'formpekerja';">+ Add</button>
            <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama Pekerja</th>
                    <th>No Telp Pekerja</th>
                    <th>Status</th>
                    <th>Alamat Pekerja</th>
                    <th>ID Invoice</th>
                    <th>Tugas</th>
                    <th>Deadline</th>
                    <th>Tugas Selesai</th>
                    <th>Action</th>
                </tr>
                @foreach ( $pekerjas as $pekerja)
                <tr> 
                    <td class="bold">{{$pekerja->id}}</td>
                    <td class="bold">{{$pekerja->nama_pekerja}}</td>
                    <td>{{$pekerja->no_telp_pekerja}}</td>
                    <td><div class="bar aktif">{{$pekerja->status}}</div></td>
                    <td>{{$pekerja->alamat_pekerja}}</td>
                    <td>{{$pekerja->id_invoice}}</td>
                    <td>{{$pekerja->tugas}}</td>
                    <td>{{$pekerja->deadline}}</td>
                    <td>{{$pekerja->tugas_selesai}}</td>
                    <td class="flex">
                        <div class="action-btn edit"><i class="fa-solid fa-pencil"></i></div>
                        <div class="action-btn delete"><i class="fa-solid fa-trash-can"></i></div>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </main>
    </div>
</body>
</html>