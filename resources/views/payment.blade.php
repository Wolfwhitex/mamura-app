<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran Makanan</title>
  <link rel="stylesheet" href="style.css">
  <style>
body {
  font-family: sans-serif;
  background: linear-gradient(135deg, #00204a, #00507a);
}

.container {
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

h1, h2, h3, p {
  text-align: center;
  color: white;
}

.order-summary {
  margin-bottom: 20px;
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 5px;
}

.payment-methods {
  margin-bottom: 20px;
}

.method {
  margin-bottom: 10px;
  color: white;
}

.method input {
  margin-right: 5px;
}

.btn {
  background-color: #007bff;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

.btn:hover {
  background-color: #0056b3;
}

.upload-proof {
    margin-bottom: 20px;
}

.upload-proof input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.upload-proof .btn {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 4px;
}

.upload-proof .btn:hover {
    background-color: #0056b3;
}


  </style>
</head>
<body>
  <div class="container">
    <h1>Pembayaran</h1>

    <div class="order-summary">
      <h2 style="margin-top: 100px;">Ringkasan Pesanan</h2>
      <table height="200" class="table" style="color: white;">
        <thead style="text-align: center">
          <tr>
            <th></th>
            <th>Jumlah</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr style="text-align: center">
            <td>Nasi Goreng</td>
            <td>1</td>
            <td>Rp 6.000</td>
          </tr>
          <tr style="text-align: center">
            <td>Es Teh</td>
            <td>2</td>
            <td>Rp 4.000</td>
          </tr>
          <tr>
            <th>Total</th>
            <th></th>
            <th>Rp 10.000</th>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="payment-methods">
        <div class="row position-center">
            <div class="col-md-4 justify-content-center">
      <h2>Metode Pembayaran Transfer Bank</h2>
      <h3>Kode Virtual Account</h3>
      <p class="va-code">BANK BCA - 123456789</p>
    </div>

    <div class="upload-proof">
      <h2>Upload Bukti Pembayaran</h2>
      <form action="" method="post" enctype="multipart/form-data">
          <input type="file" name="proof" id="proofFile" accept="image/*">
          <label for="proofFile"></label>
          <p></p>
          <br>
          <div class="row" style="display: flex; justify-content: right;">
            <button type="submit" class="btn btn-primary">Upload Bukti</button>
          </div>
      </form>
    </div>
    

  </div>
</div>
</div>

  <script src="script.js"></script>
</body>
</html>