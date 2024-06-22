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
            <div class="side-button active" onclick="window.location.href = 'client';"><i class="fa-solid fa-user-group"></i>Client</div>
            <div class="side-button" onclick="window.location.href = 'invoice';"><i class="fa-solid fa-calendar-days"></i>Invoice</div>
            <div class="side-button" onclick="window.location.href = 'pekerja';"><i class="fa-solid fa-laptop"></i>Pekerja</div>
            
        </aside>
        <main>
            <h1><span>Hello, </span>Daniel Fonseca</h1>
            
            <button class="button" onclick="window.location.href = 'client/create';">+ Add</button>
            <div class="info-container flex">
                <div class="info-box">
                    <i class="fa-solid fa-user-group"></i>
                    <p>Client Aktif</p>
                    <h1>42<span>saat ini</span></h1>
                </div>
                <div class="info-box-2">
                    <div>
                        <i class="fa-solid fa-user-group"></i>
                        <p>Paket Aktif</p>
                    </div>
                    <div class="bars">
                        <div class="bar gold bar14">14</div>
                        <div class="bar silver bar9">9</div>
                        <div class="bar bronze bar14">14</div>
                        <div class="bar itbss bar24">24</div>
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
                <tr>
                    <td class="bold">1</td>
                    <td class="bold">Azul</td>
                    <td>742 Evergreen Terrace, Springfield, USA</td>
                    <td>987654321</td>
                    <td><div class="bar aktif">Aktif</div></td>
                    <td><div class="bronze bar">Bronze</div></td>
                    <td>The report highlights a 10% increase in...</td>
                    <td>02/03/2024</td>
                    <td>Jessica Sentoso</td>
                    <td>123819238</td>
                    <td>742 Evergreen Terrace, Springfield, USA</td>
                    <td class="flex">
                        <div class="action-btn edit"><i class="fa-solid fa-pencil"></i></div>
                        <div class="action-btn delete"><i class="fa-solid fa-trash-can"></i></div>
                    </td>
                </tr>
                <tr>
                    <td class="bold">2</td>
                    <td class="bold">Legunis</td>
                    <td>221B Baker Street, London, UK</td>
                    <td>456123789</td>
                    <td><div class="bar nonaktif">Nonaktif</div></td>
                    <td><div class="bar gold">Gold</div></td>
                    <td>The report highlights a 10% increase in...</td>
                    <td>02/03/2024</td>
                    <td>Jessica Sentoso</td>
                    <td>123819238</td>
                    <td>742 Evergreen Terrace, Springfield, USA</td>
                    <td class="flex">
                        <div class="action-btn edit"><i class="fa-solid fa-pencil"></i></div>
                        <div class="action-btn delete"><i class="fa-solid fa-trash-can"></i></div>
                    </td>
                </tr>
                <tr>
                    <td class="bold">3</td>
                    <td class="bold">Inienak</td>
                    <td>4 Privet Drive, Little Whinging, Surrey, UK</td>
                    <td>789654123</td>
                    <td><div class="bar aktif">Aktif</div></td>
                    <td><div class="bar itbss">ITBSS</div></td>
                    <td>The report highlights a 10% increase in...</td>
                    <td>02/03/2024</td>
                    <td>Jessica Sentoso</td>
                    <td>123819238</td>
                    <td>742 Evergreen Terrace, Springfield, USA</td>
                    <td class="flex">
                        <div class="action-btn edit"><i class="fa-solid fa-pencil"></i></div>
                        <div class="action-btn delete"><i class="fa-solid fa-trash-can"></i></div>
                    </td>
                </tr>
                <tr>
                    <td class="bold">4</td>
                    <td class="bold">Foreign</td>
                    <td>123 Sesame Street, New York, USA</td>
                    <td>321987654</td>
                    <td><div class="bar aktif">Aktif</div></td>
                    <td><div class="bar gold">Gold</div></td>
                    <td>The report highlights a 10% increase in...</td>
                    <td>02/03/2024</td>
                    <td>Jessica Sentoso</td>
                    <td>123819238</td>
                    <td>742 Evergreen Terrace, Springfield, USA</td>
                    <td class="flex">
                        <div class="action-btn edit"><i class="fa-solid fa-pencil"></i></div>
                        <div class="action-btn delete"><i class="fa-solid fa-trash-can"></i></div>
                    </td>
                </tr>
                <tr>
                    <td class="bold">5</td>
                    <td class="bold">Chicken Earth</td>
                    <td>12 Grimmauld Place, London, UK</td>
                    <td>654789123</td>
                    <td><div class="bar aktif">Aktif</div></td>
                    <td><p class="bar gold">Gold</p></td>
                    <td>The report highlights a 10% increase in...</td>
                    <td>02/03/2024</td>
                    <td>Jessica Sentoso</td>
                    <td>123819238</td>
                    <td>742 Evergreen Terrace, Springfield, USA</td>
                    <td class="flex">
                        <div class="action-btn edit"><i class="fa-solid fa-pencil"></i></div>
                        <div class="action-btn delete"><i class="fa-solid fa-trash-can"></i></div>
                    </td>
                </tr>
            </table>
            </div>
        </main>
    </div>
</body>
</html>

