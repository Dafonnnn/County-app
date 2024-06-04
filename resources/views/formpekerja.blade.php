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
        <form action="">
            <p>Nama Pekerja</p>
            <input type="text" class="form-input">
            <p>No Telp Pekerja</p>
            <input type="tel" class="form-input">
            <p>Status</p>
            <select name="" id="" class="form-input">
                <option value=""><div class="bar aktif">Aktif</div></option>
                <option value=""><div class="bar aktif">Nonaktif</div></option>
            </select>
            <p>Alamat Pekerja</p>
            <input type="text" class="form-input">
            <p>ID Invoice</p>
            <input type="number" class="form-input">
            <p>Tugas</p>
            <textarea name="" id="" cols="20" rows="30"></textarea>
            <p>Deadline</p>
            <input type="date" class="form-input">
            <p>Tugas Selesai</p>
            <input type="text" class="form-input">
        </form>
        <button class="button" onclick="window.location.href = 'pekerja';">Submit</button>
        </main>
    </div>
</body>