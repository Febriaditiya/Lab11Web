## Febri Aditiya
## 312010212
## TI.20.A2

# Lab11Web
Paraktikum 11 PHP Framework (codeigniter)

### Pertama membuat file home.php di app/controllers/home.php

![1png](ci4/public/img/1.png)

### Lalu membuat file home.php di app/controllers/page.php

![2png](ci4/public/img/2.png)

### Membuat folder template di dalam view kemudian buat file header.php app/view/template/header.php

![3png](ci4/public/img/3.png)

### Membuat file footer.php di app/view/template/footer.php

![4png](ci4/public/img/4.png)

### Membuat file widget.php di app/view/template/widget.php

![5png](ci4/public/img/5.png)

### Membuat file box.php di app/view/template/box.php

![6png](ci4/public/img/6.png)

### Membuat file divider.php di app/view/template/divider.php

![7png](ci4/public/img/7.png)

### Membuat file home.php di app/view/home.php
*Yang berfungsi untuk meng-include setiap file tersebut.*

![8png](ci4/public/img/8.png)

### Tampilan hasilnya sebagai berikut.

![10png](ci4/public/img/10.png)

## Pertanyaan dan Tugas
`Lengkapi kode program untuk menu lainnya yang ada pada Controller page, sehingga semua link pada navigasi header dapat menampilkan tampilan denganlayout yang sama.`

### Membuat File about.php pada app/view/about.php

![13png](ci4/public/img/13.png)

### tampilan browser nya seperti ini pada menu about

![14png](ci4/public/img/14.png)

### Membuat File contact.php pada app/view/contact.php

![11png](ci4/public/img/11.png)

### tampilan browser nya seperti ini pada menu contact

![12png](ci4/public/img/12.png)


# Praktikum 12: Framework lanjutan (CRUD)
### Intruksi praktikum
1. persiapkan text editor misalnya VSCode.
2. Buka kembali folder dengan nama lab11_php_ci pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikumyang akan dijelaskan berikutnya.

### Membuat Database

![15png](ci4/public/img/15.png)

### Membuat tabel

![16png](ci4/public/img/16.png)

### Konfigurasi Koneksi Database
`ada dua cara pertama dapat di file app/config/database.php atau bisa juga menggunakan .env`

![18png](ci4/public/img/18.png)

![19png](ci4/public/img/19.png)

### Membuat Model
`Buat file di dalam folder models dengan nama ArtikelModel.php`

![20png](ci4/public/img/20.png)

### Membuat Controller
`Membuat direktori Artikel.php di dalam folder Controller`

![21png](ci4/public/img/21.png)

### Membuat View
`Buat Direktori baru di dalam folder Views lalu buat file index.php`

![22png](ci4/public/img/22.png)

`lalu buka browser untuk melihat tampilannya. http://localhost:8080/artikel`

![23png](ci4/public/img/23.png)

`Kemudian coba tambahkan beberapa data pada databases agar dapat ditampilkan datanya.`

![24png](ci4/public/img/24.png)

`lalu buka kembali browser untuk melihat hasil tampilannya`

![25png](ci4/public/img/25.png)

#### Membuat Tampilan Detail Artikel
`pada saat judul berita di klik maka akan diarahkan kehalaman yang berbeda tambahkan fungsi baru pada controller artikel dengan nama view()

![26png](ci4/public/img/26.png)

### Membuat view detail
`Buat view baru dengan nama app/views/artikel/detail.php`

![27png](ci4/public/img/27.png)

### Lalu Buat Roating untuk artikel detail
`pada file app/config/Routes.php`

![28png](ci4/public/img/28.png)

`Lalu buka browser kembali untuk melihat tampilannya`

![29png](ci4/public/img/29.png)

### Membuat Menu Admin
`menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index()`

![17png](ci4/public/img/17.png)

`Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php`

![30png](ci4/public/img/30.png)

![31png](ci4/public/img/31.png)

`Tambahkan Routing untuk menu admin`

![32png](ci4/public/img/32.png)

`Untuk akses menu admin dengan url http://localhost:8080/admin/artikel`

![33png](ci4/public/img/33.png)

### Menambahkan Data Artikel
`Tambahkan fungsi baru  pada Controller Artikel dengan nama add()`

![34png](ci4/public/img/34.png)

`Kemudian buat view untuk form tambah dengan nama form_add.php`

![35png](ci4/public/img/35.png)

`Maka tampilannya sebagai berikut`

![36png](ci4/public/img/36.png)

### Mengubah Data
`Tambahkan fungsi Controller Artikel dengan nama edit()`

![37png](ci4/public/img/37.png)

`Kemudaian  buat view form tambah dengan nama form_edit.php`

![38png](ci4/public/img/38.png)

`Hasilnya sebagai berikut`

![39png](ci4/public/img/39.png)

### Menghapus Data
`Tambah fungsi baru pada Controller Artikel dengan nama delete`

![40png](ci4/public/img/40.png)

`Maka Tampilan delete nya sebagai berikut`

![41png](ci4/public/img/41.png)


# Praktikum 13: Frammework lanjutan (Modul Login)
### Intruksi praktikum
1. persiapkan text editor misalnya VSCode.
2. Buka kembali folder dengan nama lab11_php_ci pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikumyang akan dijelaskan berikutnya.

### Langkah-langkah Paraktikum 
### Membuat Table User

![42png](ci4/public/img/42.png)

### Membuat Model User
*Membuat model untuk memproses data login. pada direktori app/Models dengan nama UserModel.php*

![43png](ci4/public/img/43.png)

### Membuat Controller User
*Buat controller baru dengan nama User.php pada direktori app/Controller*

![44png](ci4/public/img/44.png)

![45png](ci4/public/img/45.png)

### Membuat View Login
*Buat direktori baru dengan nama user pada direktori app/view kemudian buat file baru login.php*

![46png](ci4/public/img/46.png)

### Membuat Database Seeder
*Database seeder digunakan untuk membuat data dummy. Untuk keperluan uji coba modul login, kita perku masukkan data user dan password kedalam database, untuk itu membuat database seeder untuk tabel user. Buka CLI tulis perintah berikut:*

![47png](ci4/public/img/47.png)

*Selanjutnya buka file UserSeeder.php yang berada di lokasi direktori app/database/seeds/UserSeeder.php kemudian isi dengan ini.*

![48png](ci4/public/img/48.png)

*Selanjutnya Buka kembali CLI ketik perintah berikut.*

![49png](ci4/public/img/49.png)

### Uji coba login
*Selanjutnya buka URL https://localhost:8080/user/login seperti berikut.*

![50png](ci4/public/img/50.png)

### Menambhakan Auth Filter
*Membuat filter untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filter.*

![51png](ci4/public/img/51.png)

*Selanjutnya buka file app/Config/Filters.php tambahkan seperti berikut.*

![52png](ci4/public/img/52.png)

*Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.*

![53png](ci4/public/img/53.png)

*Selanjutnya buka URL https://localhost:8080/user/login seperti berikut.*

![50png](ci4/public/img/50.png)

### Fungsi Logout 
*Tambahkan method logout pada Controller User seperti berikut.*

![54png](ci4/public/img/54.png)

### Pertanyaan Dan Tugas
*Selesaikan Programnya sesuai denga langkah-langkah yang ada. Anda boleh melakukan improvisasi.*