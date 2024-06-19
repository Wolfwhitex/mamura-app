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

    .container {
      background-color: #ffffff;
      padding: 20px 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      width: 300px;
      text-align: left;
    }

    .container h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .container label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .container input[type="text"],
    .container input[type="file"],
    .container textarea,
    .container input[type="number"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0 20px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .container button {
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

    .container button:hover {
      background-color: #009acd;
    }
  </style>
</head>

<body>
  <section class="add_product_section">
    <div class="container">
      <h2>Add New Product</h2>
      <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="Nama">Nama Produk:</label>
        <input type="text" id="Nama" name="Nama" required><br>

        <label for="Deskripsi">Deskripsi:</label>
        <textarea id="Deskripsi" name="Deskripsi"></textarea><br>

        <label for="Harga">Harga:</label>
        <input type="number" id="Harga" name="Harga" step="0.01" required><br>

        <label for="Stock">Stok:</label>
        <input type="number" id="Stock" name="Stock" required><br>

        <label for="FotoProduk">Foto Produk:</label>
        <input type="file" id="FotoProduk" name="FotoProduk"><br>

        <button type="submit">Simpan Produk</button>
    </form>
    </div>
  </section>

</body>

</html>