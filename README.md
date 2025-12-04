# User Management System (CRUD Native PHP)

![Demo Aplikasi](assets/demo.gif)

Aplikasi Back-End sederhana untuk mengelola data Member (User) menggunakan PHP Native dan Database MySQL dengan teknik OOP dasar.

## 1. Deskripsi Aplikasi

Aplikasi ini dibuat untuk memenuhi Tugas 1 Implementasi Aplikasi Back-End. Aplikasi ini berfokus pada pengelolaan satu entitas domain utama yaitu **Member (Users)**.

**Fitur Utama:**
* **Create:** Menambahkan member baru beserta upload foto profil.
* **Read:** Menampilkan daftar seluruh member dalam tabel dan melihat detailnya.
* **Update:** Mengubah data member (Username, Fullname, City, Password) dan mengganti foto profil.
* **Delete:** Menghapus data member beserta file fotonya dari server.
* **Validasi:** Menangani input teks, angka, validasi password, dan validasi file upload (tipe & ukuran).

## 2. Spesifikasi Teknis

* **Bahasa Pemrograman:** PHP 8.4.13 (Native)
* **Basis Data:** MySQL / MariaDB
* **Driver Database:** PDO (PHP Data Objects)
* **Arsitektur:** Pemisahan Logic (Class), Konfigurasi, dan View (HTML)

## Struktur Folder
```text
/TUGASCRUD
├── assets/             # Aset statis (gambar/gif dokumentasi)
│   └── demo.gif
├── class/              # Kumpulan Class (OOP)
│   ├── Database.php    # Koneksi database via PDO
│   ├── User.php        # Model User (CRUD Logic)
│   └── Utility.php     # Helper functions (Navigasi, dll)
├── css/
│   └── style.css       # Styling tampilan
├── database/
│   └── schema.sql      # File dump SQL database
├── inc/
│   └── config.php      # Konfigurasi DB & Autoload
├── uploads/            # Folder penyimpanan foto user
├── authenticate.php    # Proses validasi login
├── create.php          # Form tambah member
├── delete.php          # Proses hapus member
├── edit.php            # Form edit member
├── index.php           # Halaman dashboard utama
├── login.php           # Halaman login
├── logout.php          # Proses logout
├── members.php         # Halaman list data user
├── README.md           # Dokumentasi proyek
├── save.php            # Proses simpan data baru
├── testing.php         # File untuk uji coba kode
└── update.php          # Proses update data ke DB

## 3. Instruksi Menjalankan Aplikasi

Ikuti langkah-langkah berikut untuk menjalankan aplikasi ini di komputer lokal (Localhost):

**Langkah 1: Persiapan Basis Data**
1.  Pastikan aplikasi **Laragon** (atau XAMPP) sudah terinstal dan **Server** sudah berjalan.
2.  Buka **phpMyAdmin** (biasanya di `http://localhost/phpmyadmin`).
3.  Buat database baru dengan nama: **`user_crud`**.
4.  Klik tab **Import**, lalu pilih file SQL yang ada di dalam folder `database` (`schema.sql`).
5.  Klik **Go** / **Kirim** untuk menjalankan import tabel.

**Langkah 2: Konfigurasi Koneksi**
1.  Buka file `inc/config.php` di text editor.
2.  Cek bagian konfigurasi database. Sesuaikan dengan settingan laragon.

```php
// inc/config.php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';    
const DB_NAME = 'user_crud';

**Langkah 3: Menjalankan Server (PHP Built-in Server)
1.  Buka Terminal atau Command Prompt (CMD).
2.  Arahkan direktori ke folder ini.
    cd path/to/TUGASCRUD
3.  Jalankan perintah berikut untuk memulai server: 
    php -S localhost:8000

**Langkah 4: Buka browser (Chrome, Firefox, dll) dan kunjungi URL berikut: http://localhost:8000
Anda akan diarahkan ke halaman Dashboard Utama. Silahkan dicoba fiturnya.

## 4. Demo Penggunaan (Skenario Uji)

Berikut adalah simulasi visual untuk setiap fitur utama aplikasi:

### 1. Tambah Member Baru (Create)
Input data user baru, validasi password, upload foto, dan simpan ke database.
![Demo Create](assets/create.gif)

### 2. Lihat Daftar Member (Read)
Menampilkan list user dalam tabel dan melihat thumbnail foto profil.
![Demo Read](assets/read.gif)

### 3. Edit Data Member (Update)
Mengubah data profil (Kota, Nama) dan mengganti foto profil lama dengan yang baru.
![Demo Update](assets/update.gif)

### 4. Hapus Member (Delete)
Menghapus data user secara permanen beserta file fotonya dari server.
![Demo Delete](assets/delete.gif)

---
*Dibuat oleh: https://github.com/KillyNourin