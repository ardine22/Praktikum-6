<?php
// --------------------------------------------
// Login sederhana: validasi string statis
// Simulasikan kredensial yang "benar"
// --------------------------------------------
$USERNAME_BENAR = "admin";     // ganti sesuai kebutuhan praktikum
$PASSWORD_BENAR = "12345";     // ganti sesuai kebutuhan praktikum

// Cegah akses langsung tanpa POST (mis. buka login.php langsung)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Arahkan balik ke form jika bukan POST
    header('Location: login.html');
    exit;
}

// Ambil input dari form (POST)
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? (string)$_POST['password'] : '';

// Validasi sangat dasar (kosong/tidak)
$errors = [];
if ($username === '') { $errors[] = "Username tidak boleh kosong."; }
if ($password === '') { $errors[] = "Password tidak boleh kosong."; }

// Jika ada error input kosong → tampilkan pesan
if (!empty($errors)) {
    // Tampilkan HTML sederhana berisi error & tombol kembali
    tampilkan_hasil(false, $errors, $username);
    exit;
}

// Cek kecocokan dengan string yang ditentukan
if ($username === $USERNAME_BENAR && $password === $PASSWORD_BENAR) {
    // Sukses login
    tampilkan_hasil(true, [], $username);
} else {
    // Gagal login
    $errors[] = "Username atau password salah.";
    tampilkan_hasil(false, $errors, $username);
}

// --------------------------------------------
// Fungsi helper untuk menampilkan halaman hasil
// --------------------------------------------
function tampilkan_hasil(bool $sukses, array $errors, string $usernameTerakhir) {
    // Escape output agar aman ditampilkan di HTML
    $safeUser = htmlspecialchars($usernameTerakhir, ENT_QUOTES, 'UTF-8');
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?= $sukses ? 'Login Berhasil' : 'Login Gagal' ?></title>
        <style>
            body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif; background:#f7f7fb; margin:0; padding:0;}
            .wrap{max-width:520px; margin:8vh auto; background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:24px; box-shadow:0 10px 25px rgba(0,0,0,.05)}
            h1{font-size:22px; margin:0 0 16px}
            .ok{background:#ecfdf5; color:#065f46; border:1px solid #10b981; padding:10px 12px; border-radius:8px; margin-bottom:12px}
            .err{background:#fef2f2; color:#991b1b; border:1px solid #ef4444; padding:10px 12px; border-radius:8px; margin-bottom:12px}
            .btn{display:inline-block; text-decoration:none; background:#6366f1; color:#fff; padding:10px 12px; border-radius:8px; font-weight:600}
            .meta{font-size:14px; color:#6b7280; margin-top:6px}
            .list{margin:8px 0 0 18px}
            .info{background:#f9fafb; border:1px dashed #cbd5e1; padding:10px 12px; border-radius:8px; font-size:13px; color:#334155; margin-top:16px}
        </style>
    </head>
    <body>
        <div class="wrap">
            <?php if ($sukses): ?>
                <h1>Login Berhasil 🎉</h1>
                <div class="ok">Selamat datang, <b><?= $safeUser ?: 'Pengguna' ?></b>.</div>
                <p class="meta">Ini hanya contoh praktikum validasi server-side menggunakan PHP.</p>
                <a class="btn" href="login.html">Kembali ke Halaman Login</a>
            <?php else: ?>
                <h1>Login Gagal</h1>
                <?php foreach ($errors as $e): ?>
                    <div class="err"><?= htmlspecialchars($e, ENT_QUOTES, 'UTF-8') ?></div>
                <?php endforeach; ?>
                <a class="btn" href="login.html">Coba Lagi</a>

                <div class="info">
                    <b>Catatan Praktikum:</b><br>
                    - Validasi dilakukan di <i>server-side</i> (PHP), bukan hanya di HTML.<br>
                    - Bandingkan input dengan string yang telah ditentukan di file <code>login.php</code>.<br>
                    - Kamu boleh mengubah nilai <code>$USERNAME_BENAR</code> dan <code>$PASSWORD_BENAR</code> sesuai kebutuhan tugas.
                </div>
            <?php endif; ?>
        </div>
    </body>
    </html>
    <?php
}
