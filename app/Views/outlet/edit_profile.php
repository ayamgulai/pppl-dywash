<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Profil Outlet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: 40px auto 20px;
            background-color: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.06);
            box-sizing: border-box;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 24px;
            text-align: center;
            color: #2c3e50;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #34495e;
            font-weight: 500;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profil</h1>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="error">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <div>• <?= esc($error) ?></div>
                <?php endforeach ?>
            </div>
        <?php endif; ?>

        <form action="/outlet/profile/update" method="post">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="<?= esc($user['name']) ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= esc($user['email']) ?>" required>

            <button type="submit">Simpan Perubahan</button>
        </form>

        <a href="/outlet/profile" class="back-link">← Batal & Kembali ke Profil</a>
    </div>
</body>
</html>
