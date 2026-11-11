<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk - TokoKu</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/produk.js" defer></script>
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
                    <h1>Update Produk</h1>
                    <p class="subtitle">Perbarui informasi produk Anda.</p>
                </div>
            </header>

            <section class="card form-card">
                <form id="formUpdate">
                    <input type="hidden" id="produkId">

                    <div class="form-group">
                        <label for="nama_produk">
                            Nama Produk <span class="required">*</span>
                        </label>
                        <input type="text" id="nama_produk" required>
                    </div>

                    <div class="form-group">
                        <label for="harga_produk">
                            Harga Produk (Rp) <span class="required">*</span>
                        </label>
                        <input type="number" id="harga_produk" min="0" step="1" required>
                    </div>

                    <div class="form-group">
                        <label for="kondisi_produk">
                            Kondisi Produk <span class="required">*</span>
                        </label>
                        <select id="kondisi_produk" required>
                            <option value="">Pilih kondisi</option>
                            <option value="Bagus">Bagus</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <a href="index.html" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">
                            Update Produk
                        </button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>

</html>
