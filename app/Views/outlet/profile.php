<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Outlet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tambahkan Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
            color: #34495e;
        }

        .container {
            max-width: 500px;
            background: white;
            padding: 24px;
            margin: 40px auto 20px;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        }

        h1 {
            font-size: 24px;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 28px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-item {
            margin-bottom: 18px;
        }

        .profile-item label {
            display: block;
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 6px;
            color: #2c3e50;
        }

        .profile-item p {
            margin: 0;
            font-size: 15px;
            color: #34495e;
            word-break: break-word;
        }

        .button-group {
            margin-top: 30px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            text-align: center;
            font-size: 15px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            background-color: #007bff;
            color: white;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .back-link {
            display: block;
            margin: 30px auto 0;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Outlet</h1>

        <div class="profile-info">
            <div class="profile-item">
                <label>Nama</label>
                <p><?= esc($user['name']) ?></p>
            </div>
            <div class="profile-item">
                <label>Email</label>
                <p><?= esc($user['email']) ?></p>
            </div>
            <div class="profile-item">
                <label>Peran</label>
                <p>Pemilik <?= esc($user['role']) ?></p>
            </div>

            <?php if (!empty($user['phone'])): ?>
            <div class="profile-item">
                <label>Nomor Telepon</label>
                <p><?= esc($user['phone']) ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="button-group">
            <a href="/outlet/profile/edit_profile" class="btn">Edit Profil</a>
        </div>
    </div>

    <a href="/dashboard" class="back-link">← Kembali ke Dashboard</a>
</body>
</html>
