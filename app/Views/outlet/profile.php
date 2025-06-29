<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Outlet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 500px;
            background: white;
            padding: 24px;
            margin: 40px auto 20px;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.06);
            box-sizing: border-box;
        }
        h1 {
            font-size: 24px;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-info p {
            font-size: 16px;
            color: #34495e;
            margin: 12px 0;
            word-wrap: break-word;
        }
        .profile-info strong {
            display: inline-block;
            width: 100px;
        }
        .button-group {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .profile-item {
                margin-bottom: 16px;
            }

            .profile-item label {
                display: block;
                font-weight: bold;
                margin-bottom: 4px;
                color: #2c3e50;
            }

            .profile-item p {
                margin: 0;
                color: #34495e;
                word-break: break-word;
            }

        .btn {
            padding: 12px;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
        }
        .btn-edit {
            background-color: #007bff;
            color: white;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Outlet</h1>
        <div class="profile-info">
            <div class="profile-item">
                <label>Nama:</label>
                <p><?= esc($user['name']) ?></p>
            </div>
            <div class="profile-item">
                <label>Email:</label>
                <p><?= esc($user['email']) ?></p>
            </div>
            <div class="profile-item">
                <label>Peran:</label>
                <p>Pemilik <?= esc($user['role']) ?></p>
            </div>
        </div>


        <div class="button-group">
            <a href="/outlet/profile/edit_profile" class="btn btn-edit">Edit Profil</a>
        </div>
    </div>

    <a href="/dashboard" class="back-link">← Kembali ke Dashboard</a>
</body>
</html>
