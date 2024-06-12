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
            <div class="side-button active" onclick="window.location.href = 'index';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button" onclick="window.location.href = 'invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button" onclick="window.location.href = 'pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
        </aside>
        <main>
        <form action="" method="POST">
            @csrf
            <p>Nama Pekerja</p>
            <input type="text" class="form-input" name="nama_pekerja" id="nama_pekerja">
            <p>No Telp Pekerja</p>
            <input type="tel" class="form-input" name="no_telp_pekerja" id="no_telp_pekerja">
            <p>Status</p>
            <select name="" id="" class="form-input" name="status" id="status">
                <option value=""><div class="bar aktif">Aktif</div></option>
                <option value=""><div class="bar aktif">Nonaktif</div></option>
            </select>
            <p>Alamat Pekerja</p>
            <input type="text" class="form-input" name="alamat_pekerja" id="alamat_pekerja">
            <p>ID Invoice</p>
            <input type="number" class="form-input" name="id_invoice" id="id_invoice">
            <p>Tugas</p>
            <textarea name="" id="" cols="20" rows="30" name="tugas" id="tugas"></textarea>
            <p>Deadline</p>
            <input type="date" class="form-input" name="deadline" id="deadline">
            <p>Tugas Selesai</p>
            <input type="text" class="form-input" name="tugas_selesai" id="tugas_selesai">
            <br>
            <button class="button">Submit</button>
        </form>
        
        </main>
    </div>
</body>