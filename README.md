Sistem Pengelolaan Stok Produk Kecantikan - UTS PWEB kelas B
*Dibuat oleh:* Wafiya Ramadhaning Tyas  
*Mata Kuliah:* Pemrograman Web (PWEB)  
*Framework:* Laravel 10  


Deskripsi Proyek
Proyek ini merupakan *aplikasi web sederhana berbasis Laravel* yang berfungsi untuk *menampilkan dan mengelola data produk kecantikan*, seperti sabun wajah, toner, dan serum vitamin C.

Website ini dibuat untuk memenuhi tugas *UTS Pemrograman Web, dengan fokus pada **penerapan konsep MVC (Model–View–Controller)* serta penggunaan *Blade Template* untuk menampilkan data secara dinamis dari controller ke tampilan.

Tujuan
- Menerapkan alur kerja *MVC (Model, View, Controller)* di Laravel.
- Membuat sistem login sederhana menggunakan *form username dan password*.
- Menampilkan data produk dalam bentuk *tabel dinamis*.
- Mendesain tampilan web yang *feminim, lembut, dan user-friendly* menggunakan tema *pink pastel*.


Struktur Halaman
| Halaman | Fungsi |
|----------|---------|
| *Login* | Pengguna memasukkan username dan password untuk masuk ke sistem. |
| *Beranda* | Menampilkan sambutan personal sesuai nama pengguna yang login. |
| *Profil Pengguna* | Menampilkan informasi pengguna seperti nama, email, dan status. |
| *Kelola Produk* | Menampilkan daftar produk kecantikan (nama, kategori, stok) dalam tabel yang datanya berasal dari controller. |


Alur Program
1. *User Login:*  
   Pengguna mengisi form login dengan username dan password.  
   Setelah menekan tombol Masuk, sistem akan mengarahkan ke halaman *beranda*.

2. *Halaman Beranda:*  
   Menampilkan pesan sambutan kepada pengguna yang berhasil login.

3. *Halaman Profil:*  
   Menampilkan data profil pengguna, seperti:
   - Nama pengguna  
   - Email (contoh: wafiya@mail.com)  
   - Status aktif  

4. *Halaman Kelola Produk:*  
   Menampilkan data produk kecantikan statis yang diatur di controller:  
   - Sabun Wajah  
   - Toner Wajah  
   - Serum Vitamin C  


Tema dan Desain
- *Warna utama:* Pink pastel (#ffb6c1 dan #d63384)
- *Framework CSS:* Bootstrap 5  
- *Tampilan clean dan rapi*, menonjolkan sisi feminim dan lembut.
- Setiap halaman memiliki *navbar dan footer* dengan identitas pembuat:
  > © 2025 UTS PWEB – Dibuat oleh Wafiya Ramadhaning Tyas


Teknologi yang Digunakan
- *Laravel 10*
- *PHP 8.1*
- *Bootstrap 5*
- *Blade Template Engine*
