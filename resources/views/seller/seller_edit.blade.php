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
    <form action="{{ Route('products.update', $product->ProductID) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" value="{{ $product->Nama }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Deskripsi">Deskripsi</label>
                <textarea name="Deskripsi" class="form-control">{{ $product->Deskripsi }}</textarea>
            </div>
            <div class="form-group">
                <label for="Harga">Harga</label>
                <input type="number" name="Harga" value="{{ $product->Harga }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Stock">Stock</label>
                <input type="number" name="Stock" value="{{ $product->Stock }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="FotoProduk">Foto Produk</label>
                <input type="file" name="FotoProduk" class="form-control">
                @if($product->FotoProduk)
                    <img src="{{ asset($product->FotoProduk) }}" alt="Product Image" class="img-thumbnail" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
  </div>

</body>

</
html>