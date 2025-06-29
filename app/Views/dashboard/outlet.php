<?php // file: app/Views/dashboard/outlet.php (REVISI TOTAL) ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Outlet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* =================================
           DESAIN DASHBOARD MODERN
        ================================= */
        body { 
            font-family: 'Poppins', sans-serif; 
            background: linear-gradient(to bottom, #eef2f9, #ffffff);
            margin: 0;
            padding: 20px;
            color: #34495e;
        }
        .container { 
            max-width: 900px; 
            margin: 20px auto; 
        }
        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 30px;
            gap: 15px;
        }

        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                align-items: stretch;
            }

            .profile-avatar {
                align-self: flex-end;
            }

            .welcome-text h1 {
                font-size: 22px;
            }

            .welcome-text p {
                font-size: 14px;
            }
        }

        .welcome-text h1 {
            font-size: 28px;
            font-weight: 700;
            color: #2c3e50;
            margin: 0;
        }
        .welcome-text p {
            font-size: 16px;
            color: #7f8c8d;
            margin: 5px 0 0;
        }
        .logout-btn {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s;
            flex-shrink: 0;
        }
        .logout-btn:hover {
            background-color: #f1c6cb;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        /* GRID KARTU MENU */
        .dashboard-grid {
            display: grid;
            /* Membuat 2 kolom di layar besar, dan 1 kolom di layar kecil */
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        /* STYLE UNTUK AVATAR PROFIL */
        /* Hilangkan efek warna link biru/ungu pada ikon profil */
        .profile-avatar,
        .profile-avatar:visited {
            color: inherit;
            background-color: #ecf0f1;
        }

        /* Jika pakai ikon SVG dan warna berubah, tambahkan ini juga */
        .profile-avatar svg {
            stroke: #34495e;
            transition: stroke 0.2s;
        }

        .profile-avatar:hover svg {
            stroke: #2c3e50;
        }

        .profile-avatar {
            background-color: #ecf0f1;
            width: 96px;
            height: 96px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: background-color 0.2s, box-shadow 0.2s;
        }

        .profile-avatar:hover {
            background-color: #d0d8df;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        
        .avatar-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .profile-avatar {
            background-color: #ecf0f1;
            width: 96px;
            height: 96px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: background-color 0.2s, box-shadow 0.2s;
        }

        /* STYLE UNTUK SETIAP KARTU MENU */
        .menu-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 25px;
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }
        .menu-card .icon-wrapper {
            background-color: #eef2f9;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .menu-card .icon-wrapper svg {
            width: 32px;
            height: 32px;
            stroke: #007bff;
            stroke-width: 1.5;
        }
        .menu-card h3 {
            margin: 0 0 5px 0;
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
        }
        .menu-card p {
            margin: 0;
            font-size: 14px;
            color: #7f8c8d;
            flex-grow: 1; /* Membuat deskripsi mengisi ruang kosong */
        }
        .card-footer {
            margin-top: 20px;
            font-weight: 600;
            color: #007bff;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="welcome-text">
                <h1>Selamat datang, <?= esc(session('name')) ?>!</h1>
                <p>Kelola semua kebutuhan outlet Anda di sini.</p>
            </div>
            <div class="avatar-container">
                <a href="/outlet/profile" class="profile-avatar" title="Lihat Profil">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="12" cy="8" r="4" />
                        <path d="M4 20c0-4 4-6 8-6s8 2 8 6" />
                    </svg>
                </a>
            </div>
            <div class="profile-label">Profil</div>
        </header>


        
        <main class="dashboard-grid">
            <a href="/outlet/my-outlets" class="menu-card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 4H8m8-8H8m12 4a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3>Kelola Outlet Saya</h3>
                <p>Ubah detail, alamat, dan jam operasional dari semua outlet yang Anda miliki.</p>
                <div class="card-footer">Buka Menu &rarr;</div>
            </a>

            <a href="/outlet/services" class="menu-card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 8v5z" />
                    </svg>
                </div>
                <h3>Kelola Layanan</h3>
                <p>Tambah, ubah, atau hapus jenis layanan laundry dan harganya (kg, satuan, dll).</p>
                <div class="card-footer">Buka Menu &rarr;</div>
            </a>

            <a href="/outlet/orders" class="menu-card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </div>
                <h3>Kelola Pesanan</h3>
                <p>Lihat pesanan yang masuk, proses, dan perbarui statusnya untuk customer.</p>
                <div class="card-footer">Buka Menu &rarr;</div>
            </a>

            <a href="/outlet/reviews" class="menu-card">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.196-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                    </svg>
                </div>
                <h3>Lihat Ulasan</h3>
                <p>Baca feedback dan ulasan yang diberikan oleh para customer Anda.</p>
                <div class="card-footer">Buka Menu &rarr;</div>
            </a>
        </main>
    </div>
</body>
</html>