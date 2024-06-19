<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Produk Makanan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #00204a, #00507a);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .edit-container {
      background-color: #ffffff;
      padding: 20px 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      text-align: center;
      width: 300px;
    }

    .edit-container h1 {
      margin-bottom: 20px;
    }

    .edit-container input[type="text"],
    .edit-container input[type="file"],
    .edit-container textarea,
    .edit-container input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .edit-container button {
      background-color: #00bbf0;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
      width: 100%;
      box-sizing: border-box;
    }

    .edit-container button:hover {
      background-color: #009acd;
    }

    .edit-container p {
      margin-top: 20px;
    }

    .edit-container a {
      color: #00bbf0;
      text-decoration: none;
      transition: color 0.3s;
    }

    .edit-container a:hover {
      color: #009acd;
    }
  </style>
</head>

<body>
  <div class="edit-container">
    <h1>Edit Produk Makanan</h1>
    <form id="editForm">
      <input type="text" id="namaProduk" name="namaProduk" placeholder="Nama Produk" required>
      <input type="text" id="harga" name="harga" placeholder="Harga (Rp)" required>
      <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>
      <input type="number" id="stok" name="stok" placeholder="Stok" required>
      <input type="file" id="gambar" name="gambar" accept="image/*" required>
      <button type="submit">Simpan</button>
    </form>
  </div>

  <script>
    document.getElementById('editForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const namaProduk = document.getElementById('namaProduk').value;
      const harga = document.getElementById('harga').value;
      const deskripsi = document.getElementById('deskripsi').value;
      const stok = document.getElementById('stok').value;
      const gambar = document.getElementById('gambar').files[0]; // File gambar yang dipilih

      // Simpan atau proses data sesuai kebutuhan Anda
      console.log('Nama Produk:', namaProduk);
      console.log('Harga:', harga);
      console.log('Deskripsi:', deskripsi);
      console.log('Stok:', stok);
      console.log('Gambar:', gambar); // Contoh output: File object

      // Lakukan proses simpan data atau pengiriman ke backend di sini

      // Misalnya, untuk sementara hanya menampilkan pesan
      alert('Data produk berhasil disimpan!');
    });
  </script>
</body>

</
html>