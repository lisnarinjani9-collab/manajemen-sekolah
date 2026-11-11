<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa - Manajemen Siswa</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/siswa.js" defer></script>
</head>

<body>
    <div class="app">
        <aside class="sidebar">
            <div class="brand">TokoKu.</div>
            <a href="#" class="nav-link">Beranda</a>
            <a href="index.html" class="nav-link active">Produk</a>
        </aside>

        <main class="main">
            <header class="page-header">
                <div>
                    <h1>Produk</h1>
                    <p class="subtitle">Kelola data produk Anda.</p>
                </div>
                <a href="tambah.html" class="btn btn-primary">
                    + Tambah Produk
                </a>
            </header>

            <section class="card">
                <div class="toolbar">
                    <input type="search" id="searchProduk" class="search" placeholder="Cari nama produk...">
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Kondisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="daftarProduk">
                            <tr data-nama="pasta gigi">
                                <td>1</td>
                                <td>Pasta Gigi</td>
                                <td>Rp 15.000</td>
                                <td>Baru</td>
                                <td>
                                    <a class="btn btn-secondary" href="update.html?id=1">Edit</a>
                                    <button type="button" class="btn btn-hapus">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
