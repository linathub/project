<?php
include "koneksi.php";

$sql = "SELECT * FROM produk";
$query = mysqli_query($koneksi,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f2f2f2;
        }

        h2 {
            color: #333;
        }

        .sidebar {
      width: 220px;
      background-color: #e5d0ba;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .sidebar img {
      width: 100px;
    } */

        .order-dashboard {
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 10px;
        max-width: 900px;
        margin-left: 290px;
        font-family: Arial, sans-serif;
        }

        .order-dashboard h2 {
        display: flex;
        align-items: center;
        font-size: 24px;
        margin-bottom: 20px;
        }

        .order-dashboard h2 i {
        margin-right: 10px;
        font-size: 28px;
        color: #d49f00;
        }

        .order-boxes {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        margin-top: 10px;
        }

        .order-box {
        flex: 1;
        min-width: 180px;
        background-color: rgb(207, 196, 186);
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 2px 8px rgb(207, 196, 186);
        text-align: center;
        }

        .order-box i {
        font-size: 24px;
        margin-bottom: 5px;
        display: block;
        }

        .order-total i { color: #333; }
        .order-completed i { color: #28a745; }
        .order-pending i { color: #ffc107; }
        .order-canceled i { color: #dc3545; }

        .order-label {
        font-weight: bold;
        margin-top: 5px;
        }

        .order-count {
        font-size: 20px;
        font-weight: bold;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-right: 290px
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
            margin-right: 290px;
        }

        th {
            background-color:rgb(207, 196, 186);
            color: white;
            margin-right: 290px;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: bold;
            display: inline-block;
        }

        .completed {
            background-color: green;
            color: white;
        }

        .pending {
            background-color: yellow;
            color: black;
        }

        .canceled {
            background-color: red;
            color: white;
        }

        .action a {
            margin: 0 5px;
            text-decoration: none;
            font-size: 18px;
        }

        .action a:hover {
            opacity: 0.7;
        }

        /* .sidebar {
        width: 100%;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding: 10px;
      }

      .sidebar img {
        display: none;
      }  */
       body {
  font-family: 'Segoe UI', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

/* .sidebar {
  position: fixed;
  width: 200px;
  height: 100%;
  background-color: #e5d3bc;
  padding: 20px;
}

.sidebar .logo {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 40px;
}

.sidebar nav ul {
  list-style: none;
  padding: 0;
}

.sidebar nav ul li {
  margin: 20px 0;
  cursor: pointer;
  font-size: 16px;
} */

.main-content {
  margin-left: 220px;
  padding: 20px;
}

.card-container {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
}

.card {
  background-color: #ddc6aa;
  padding: 20px;
  border-radius: 10px;
  flex: 1;
  text-align: center;
  font-weight: bold;
}

.status {
  padding: 5px 10px;
  border-radius: 12px;
  color: white;
  font-size: 13px;
}

.status.completed {
  background-color: #63d471;
}

.status.pending {
  background-color: #f5a623;
}

.status.canceled {
  background-color: #ff5c5c;
}

table {
  width: 100%;
  border-collapse: collapse;
  background-color: white;
}

table th, table td {
  padding: 12px;
  text-align: right;
  border-bottom: 1px solid #ccc;
}

.action-icons i {
  margin: 0 5px;
  cursor: pointer;
}

    </style>
</head>
<body>
    <!-- <div class="sidebar">
    <img src="gambar/logotoy.png" alt="Logo Kids Toys" />
    <div class="nav-link">
        <i class="fas fa-th-large"></i> Dashboard</div>
    <div class="nav-link">
        <i class="fas fa-shopping-cart"></i> Order</div>
    <div class="nav-link">
        <i class="fas fa-chart-bar"></i> Product</div>
    <div class="nav-link">
        <i class="fas fa-user"></i> Account</div>
  </div> -->
  <!-- Tambahkan di bagian awal body -->
<aside class="sidebar">
  <div class="logo">KIDS TOYS</div>
  <nav>
    <ul>
      <li> <a href="akun_admin.php">Dashboard</a></li>
      <li> <a href="admin.php">Product</a></li>
      <li> <a href="akun_admin.php">Account</a></li>
    </ul>
  </nav>
</aside>

    <div class="order-dashboard">
  <h2><i class="fas fa-box"></i> Daftar Order</h2>
  <div class="order-boxes">
    <div class="order-box order-total">
      <i class="fas fa-list"></i>
      <div class="order-label">Total Orders</div>
      <div class="order-count">0</div>
    </div>
    <div class="order-box order-completed">
      <i class="fas fa-check-square"></i>
      <div class="order-label">Selesai</div>
      <div class="order-count">0</div>
    </div>
    <div class="order-box order-pending">
      <i class="fas fa-hourglass-half"></i>
      <div class="order-label">Tertunda</div>
      <div class="order-count">0</div>
    </div>
    <div class="order-box order-canceled">
      <i class="fas fa-times-circle"></i>
      <div class="order-label">Batal</div>
      <div class="order-count">0</div>
    </div>
  </div>
</div>
<img src="gambar_produk/<?php echo $row['cat Teddy Bear.jpg']; ?>" width="100">
    <h1>ORDER</h1>
    <a href="tambah.php">Tambah</a><br></br>
    <table border='1'>
        <tr>
        <th>Id Produk</th>
        <th>Nama Produk</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Id Merk</th>
        <th>Id Kategori</th>
        <th>Tanggal Masuk</th>
        <th>Aksi</th>
        </tr>
        <?php while($produk=mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?=$produk['id_produk']?></td>
                <td><?=$produk['nama_produk']?></td>
                <td><?=$produk['deskripsi']?></td>
                <td><?=$produk['harga']?></td>
                <td><?=$produk['stok']?></td>
                <td><?=$produk['id_merk']?></td>
                <td><?=$produk['id_kategori']?></td>
                <td><?=$produk['tanggal_masuk']?></td>
                <td>
                    <a href="edit.php?id_produk=<?=$produk['id_produk']?>">Edit</a> |
                    <a href="hapus.php?id_produk=<?=$produk['id_produk']?>">Hapus</a> 
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>