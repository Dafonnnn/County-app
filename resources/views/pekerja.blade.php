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

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>
    <nav>
        <div><img src="logo.png" alt=""></div>
        <div id="DataTables_Table_0_filter"><input type="search" placeholder="Search" aria-controls="DataTables_Table_0"></div>
    </nav>
    <div class="flex">
         <aside>
            <div class="side-button" onclick="window.location.href = '/client';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button" onclick="window.location.href = '/invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button active" onclick="window.location.href = '/pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
            <div class="side-button" onclick="window.location.href = '/logout';"><i class="fa-solid fa-logout"></i>Keluar</div>
        </aside>
        <main>
            <h1><span>Hello, </span>Daniel Fonseca</h1>
            <button class="button" onclick="window.location.href = '/pekerja/create';">+ Add</button>
            <div class="table-container">
                <table class="table">
                    <thead>
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
                    </thead>
                    <tbody>
                        @foreach ($pekerjas as $pekerja)
                        <tr> 
                            <td class="bold">{{ $pekerja->id }}</td>
                            <td class="bold">{{ $pekerja->nama_pekerja }}</td>
                            <td>{{ $pekerja->no_telp_pekerja }}</td>
                            <td><div class="bar {{ $pekerja->status == 'Aktif' ? 'aktif' : 'nonaktif' }}">{{ $pekerja->status }}</div></td>
                            <td>{{ $pekerja->alamat_pekerja }}</td>
                            <td>{{ $pekerja->id_invoice }}</td>
                            <td>{{ $pekerja->tugas }}</td>
                            <td>{{ $pekerja->deadline }}</td>
                            <td>{{ $pekerja->tugas_selesai }}</td>
                            <td class="flex">
                                <a class="action-btn edit" href="/pekerja/{{ $pekerja->id }}/edit"><i class="fa-solid fa-pencil"></i></a>
                                <form action="/pekerja/{{ $pekerja->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="action-btn delete"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>
</body>
</html>
