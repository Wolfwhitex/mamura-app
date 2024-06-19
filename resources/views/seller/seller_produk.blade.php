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
      <form id="addProductForm">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>

        <label for="product_price">Product Price:</label>
        <input type="text" id="product_price" name="product_price" required>

        <label for="product_description">Product Description:</label>
        <textarea id="product_description" name="product_description" required></textarea>

        <label for="product_stock">Product Stock:</label>
        <input type="number" id="product_stock" name="product_stock" required>

        <label for="product_image">Product Image:</label>
        <input type="file" id="product_image" name="product_image" required>

        <button type="submit">Add Product</button>
      </form>
    </div>
  </section>

  <script>
    document.getElementById('addProductForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const productName = document.getElementById('product_name').value;
      const productPrice = document.getElementById('product_price').value;
      const productDescription = document.getElementById('product_description').value;
      const productStock = document.getElementById('product_stock').value;
      const productImage = document.getElementById('product_image').files[0]; // File gambar yang dipilih

      // Simpan atau proses data sesuai kebutuhan Anda
      console.log('Product Name:', productName);
      console.log('Product Price:', productPrice);
      console.log('Product Description:', productDescription);
      console.log('Product Stock:', productStock);
      console.log('Product Image:', productImage); // Contoh output: File object

      // Lakukan proses simpan data atau pengiriman ke backend di sini

      // Misalnya, untuk sementara hanya menampilkan pesan
      alert('Product successfully added!');
    });
  </script>
</body>

</html>