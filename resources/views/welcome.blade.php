<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="30">
  <title>CV - Daniel</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Link Font Awesome -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    .header {
      text-align: center;
      padding: 20px 0;
      background-color: #007bff;
      color: white;
      border-radius: 8px 8px 0 0;
    }

    .announcement {
      font-size: 14px;
      margin-top: 10px;
      color: #ffc107; /* Warna kuning untuk kontras dengan judul */
      display: flex;
      align-items: center; /* Menyelaraskan ikon dan teks secara vertikal */
      justify-content: center; /* Menyelaraskan ikon dan teks secara horizontal */
    }

    .announcement i {
      margin-right: 5px; /* Jarak antara ikon dan teks */
      font-size: 20px; /* Ukuran ikon */
    }

    .update-text {
      font-size: 12px; /* Ukuran teks tambahan */
      color: red; /* Mengubah warna teks menjadi merah */
      text-align: center; /* Menyelaraskan teks di tengah */
      margin-top: 5px; /* Jarak atas untuk pemisahan */
      display: flex; /* Menggunakan flex untuk menyelaraskan ikon dan teks */
      align-items: center; /* Menyelaraskan ikon dan teks secara vertikal */
      justify-content: center; /* Menyelaraskan ikon dan teks secara horizontal */
    }

    .update-text i {
      margin-right: 5px; /* Jarak antara ikon dan teks */
      font-size: 16px; /* Ukuran ikon tanda seru */
    }

    .navbar {
      margin: 20px 0;
    }

    .list-nav {
      list-style-type: none;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    .list-nav li {
      margin: 0 15px;
    }

    .list-nav a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
      transition: color 0.3s;
    }

    .list-nav a:hover {
      color: #0056b3;
    }

    .content {
      padding: 20px;
    }

    footer {
      text-align: center;
      padding: 10px 0;
      background-color: #007bff;
      color: white;
      border-radius: 0 0 8px 8px;
      margin-top: 20px;
    }

    .footer-text {
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>CV</h1>
      <div class="announcement">
        <i class="fas fa-sync-alt"></i> <!-- Ikon refresh dari Font Awesome -->
        Auto Refresh Every 30 Seconds
      </div>
      <div class="update-text">
        <i class="fas fa-exclamation-triangle"></i> <!-- Ikon tanda seru dari Font Awesome -->
        Website ini bisa update kapan aja
      </div> <!-- Teks tambahan -->
    </div>
    <div class="navbar">
      <ul class="list-nav">
        <li><a href="/">About</a></li> 
        <li><a href="/portofolio">Portofolio</a></li>
        <li><a href="/kontak">Contact</a></li>
      </ul>
    </div>
    <div class="content">
        @yield('konten')
    </ ```html
    </div>
    </div>
    <footer>
      <p class="footer-text">Copyright &copy; 2023 - 2024</p>
    </footer> 
  </div>
</body>
</html>