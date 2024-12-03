<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "website_donasi");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data donatur
$result = $conn->query("SELECT * FROM donatur ORDER BY tanggal_donasi DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bismillah</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #E5D2BB;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 40px;
            background: #f9f4ef;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
            color: #1d1d1d;
            margin-bottom: 20px;
        }

        /* Form Styling */
        form {
            max-width: 650px;
            margin: 20px auto;
            padding: 30px;
            background: #f9f4ef;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }

        input, select, button {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input:focus, select:focus {
            border-color: #f5a623;
            outline: none;
        }

        button {
            background-color: #f5a623;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Tabel Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #f5a623;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .table-container {
            overflow-x: auto;
        }

        /* Responsif */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            form {
                width: 100%;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Langkah Kecil Dampak Besar</h1>
        <form action="proses_donasi.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan Nama Anda">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan Email Anda">

            <label for="jumlah_donasi">Jumlah Donasi (Rp):</label>
            <input type="number" id="jumlah_donasi" name="jumlah_donasi" required placeholder="Masukkan Jumlah Donasi">

            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select id="metode_pembayaran" name="metode_pembayaran" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="E-Wallet">E-Wallet</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="Bank BSI">Bank BSI</option>
                <option value="Bank Aceh">Bank Aceh</option>
            </select>

            <button type="submit">Kirim Donasi</button>
        </form>

        <h2>Daftar Donatur</h2>
        <div class="table-container">
            <table> 
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jumlah Donasi</th>
                        <th>Metode Pembayaran</th>
                        <th>Tanggal Donasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['nama']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td>Rp <?php echo number_format($row['jumlah_donasi'], 2, ',', '.'); ?></td>
                            <td><?php echo htmlspecialchars($row['metode_pembayaran']); ?></td>
                            <td><?php echo $row['tanggal_donasi']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
