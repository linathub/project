<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Account Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=key" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=dashboard" />

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      background-color: #f1e2d3;
      display: flex;
      min-height: 100vh;
      flex-direction: row;
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
      margin-bottom: 40px;
    }

    .sidebar nav ul {
  list-style: none;
  padding: 0;
}

.sidebar nav ul li {
  margin: 30px 0;
  cursor: pointer;
  font-size: 16px;
}

    .nav-link {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 16px;
      margin: 10px 0;
      cursor: pointer;
    }

    .main {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;

    }

    .card {
      background-color: #f8ede7;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }

    .card h2 {
      margin-bottom: 20px;
    }

    .profile-img {
      width: 80px;
      height: 80px;
      border: 2px solid #000;
      border-radius: 50%;
      margin: 0 auto 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 40px;
    }

    .username {
      font-weight: bold;
      font-size: 16px;
    }

    .name {
      font-size: 14px;
      color: #444;
    }

    .icons {
      margin-top: 30px;
      display: flex;
      justify-content: center;
      gap: 30px;
    }

    .icons i {
      font-size: 20px;
      cursor: pointer;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      body {
        flex-direction: column;
      }

      .sidebar {
        width: 100%;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        padding: 10px;
      }

      .sidebar img {
        display: none;
      }

      .nav-link {
        font-size: 14px;
        margin: 5px;
      }

      .main {
        padding: 10px;
      }

      .card {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <!-- <div class="sidebar">
    <img src="gambar/logotoy.png" alt="Logo Kids Toys" />
    <nav>
    <ul> 
      <li> <a href="akun_admin.php">Dashboard</a></li>
      <li> <a href="admin.php">Product</a></li>
      <li> <a href="akun_admin.php">Account</a></li>
    </ul>
    </nav>
  </div> -->
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

  <div class="main">
    <div class="card">
      <h2>Account Admin</h2>
      <div class="profile-img">
        <i class="fas fa-user"></i>
      </div>
      <p class="username">Username</p>
      <p class="name">Nama admin</p>
      <div class="icons">
        <i class="fas fa-th"></i>
        <i class="fas fa-key"></i>
        <span class="material-symbols-outlined">key</span>
        <i class="fas fa-envelope"></i>
        <span class="material-symbols-outlined">dashboard</span>
      </div>
    </div>
  </div>
</body>
</html>