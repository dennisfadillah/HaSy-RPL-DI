<?php
include "koneksi.php";


?>




<html>
<head>
  <title>Input Barang</title>
  <style>
  form.input-barang {
    display: table;
  }

  div.form-input {
    display: table-row;
  }

  label, input {
    display: table-cell;
    margin-bottom: 10px;
  }

  label {
    padding-right: 10px;
  }
  </style>
</head>

<body>
  <form method="post" class="input-barang">
    <div class="form-input">
      <label for="item-name">Nama Barang: </label>
      <input type="text" name="item-name" id="item-name" required>
    </div>
    <div class="form-input">
      <label for="item-category">Kategori: </label>
      <input type="text" name="item-category" id="item-category" required>
    </div>
    <div class="form-input">
      <label for="item-detail">Detail: </label>
      <textarea name="item-detail" id="item-detail" rows="5" cols="50" required></textarea>
    </div>
    <div class="form-input">
      <input type="submit" value="Tambah Barang">
    </div>
  </form>
</body>
</html>
