# Sistem Perpustakaan Digital Kampus (`app-perpustakaan`)

Proyek aplikasi web manajemen perpustakaan kampus berbasis **Laravel 12** yang dibangun dengan pola arsitektur **Model-View-Controller (MVC)**.

---

## 📌 Deskripsi & Tujuan Proyek

Aplikasi **`app-perpustakaan`** dirancang untuk mendigitalkan proses operasional perpustakaan kampus. Tujuan utama dari aplikasi ini adalah mempermudah pengelolaan katalog buku, pendataan anggota perpustakaan, serta pencatatan transaksi peminjaman dan pengembalian buku secara terpusat, aman, dan efisien.

---

## 💡 Konsep Arsitektur MVC (Pemahaman Mandiri)

Arsitektur **Model-View-Controller (MVC)** memisahkan tanggung jawab kode ke dalam tiga komponen utama:
1. **Model (`app/Models/`):** Bertanggung jawab atas pengelolaan data dan logika bisnis aplikasi, menjadi representasi dari tabel-tabel di database (seperti buku, anggota, peminjaman) serta mengelola relasi antar tabel tersebut.
2. **View (`resources/views/`):** Bertanggung jawab murni atas antarmuka pengguna (tampilan visual/HTML menggunakan Blade template) yang dilihat oleh user, tanpa memuat query atau logika bisnis yang rumit.
3. **Controller (`app/Http/Controllers/`):** Berperan sebagai jembatan penghubung yang menerima *request* dari pengguna melalui browser, memanggil Model untuk mengambil atau memanipulasi data, lalu mengoper hasilnya ke View untuk ditampilkan kembali kepada pengguna.

Pemisahan ini memastikan kode program lebih rapi (*separation of concerns*), mudah dirawat (*maintainability*), dan memudahkan kolaborasi tim pengembang.

---

## 🚀 Cara Menjalankan Proyek Secara Lokal

Ikuti langkah-langkah berikut untuk menjalankan aplikasi di komputer lokal:

### 1. Prasyarat
- PHP >= 8.2
- Composer
- MySQL / MariaDB (melalui Laragon / XAMPP)

### 2. Kloning & Instalasi Dependensi
```bash
git clone https://github.com/[USERNAME]/app-perpustakaan.git
cd app-perpustakaan
composer install
```

### 3. Konfigurasi Environment (`.env`)
Salin file `.env.example` menjadi `.env` (atau edit file `.env` yang sudah ada):
```bash
cp .env.example .env
php artisan key:generate
```

Pastikan konfigurasi database di file `.env` sudah sesuai:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_perpustakaan
DB_USERNAME=root
DB_PASSWORD=
```
> *Catatan: Buat database kosong bernama `db_perpustakaan` di phpMyAdmin / MySQL.*

### 4. Menjalankan Server Development
Jalankan server lokal bawaan Laravel menggunakan perintah Artisan:
```bash
php artisan serve
```

Buka browser dan akses alamat:
👉 **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 🌿 Git Branching Workflow
- **`main`**: Branch untuk kode rilis yang stabil di setiap checkpoint.
- **`dev`**: Branch untuk pengembangan aktif seluruh materi dan fitur modul.
