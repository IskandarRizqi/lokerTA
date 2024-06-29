<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Navbar dengan Button Kembali</title> --}}
    <!-- Masukkan CSS langsung di sini -->
    <style>
        /* CSS untuk tautan "Kembali" di navbar */
        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .nav-link.active {
            margin-left: auto; /* Meletakkan tautan "Kembali" sejauh mungkin ke kanan */
            background-color: #007bff; /* Warna latar belakang biru (Blue) */
            color: #fff; /* Warna teks putih */
            padding: 8px 16px; /* Padding untuk menyesuaikan ukuran tombol */
            border-radius: 4px; /* Memberi sudut lengkung pada tombol */
            transition: background-color 0.3s ease; /* Efek transisi saat hover */
        }

        .nav-link.active:hover {
            background-color: #0056b3; /* Warna latar belakang biru yang lebih gelap saat hover */
            /* Opsi lainnya, seperti efek bayangan, dll. */
        }
    </style>
</head>
<body>
    <!-- Isi HTML lainnya, seperti navbar dan tautan "Kembali" -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="/profile">Kembali</a>
            </li>
        </ul>
    </nav>
</body>
</html>
