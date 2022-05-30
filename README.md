# Praktikum 11 - PHP Framework (Codeigniter)
# Pemrograman Web
```
Alfansha Abiftyo Hadyatama
311910321
TI.19.A.2
```

## Persiapan
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. 
Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4.

Berikut beberapa ekstensi yang perlu diaktifkan:
- php-json ekstension untuk bekerja dengan JSON;
- php-mysqlnd native driver untuk MySQL;
- php-xml ekstension untuk bekerja dengan XML;
- php-intl ekstensi untuk membuat aplikasi multibahasa;
- libcurl (opsional), jika ingin pakai Curl

## LANGKAH 1
Untuk mengaktifkan ekstentsi tersebut, melalui XAMPP Control Panel, pada bagian Apache klik `Config` -> `PHP.ini`

<img width="616" alt="1" src="https://user-images.githubusercontent.com/56286071/122119272-2eefb180-ce53-11eb-969e-9ca89431f681.png">

Pada bagian `extention`, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. 
Kemudian simpan kembali filenya dan restart Apache web server.

<img width="637" alt="2" src="https://user-images.githubusercontent.com/56286071/122175025-7a36ae00-cead-11eb-93c0-d80144f2be02.png">



Kemudian buat folder baru dengan nama `lab11_php_ci` pada doc root webserver (`htdocs`)

<img width="591" alt="3" src="https://user-images.githubusercontent.com/56286071/122119465-6f4f2f80-ce53-11eb-8266-a4b0d8338b47.png">

## LANGKAH 2
## Instalasi Codeigniter 4
Untuk melakukan `instalasi Codeigniter 4` dapat dilakukan dengan dua cara, yaitu cara `manual` dan menggunakan `composer`. 
Pada praktikum ini kita menggunakan cara `manual`.

- Unduh Codeigniter dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

<img width="960" alt="4" src="https://user-images.githubusercontent.com/56286071/122119665-a7ef0900-ce53-11eb-9532-b6119c0e7695.png">

## LANGKAH 3
## Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt.
Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (`cd C:\xampp\htdocs\lab11_php_ci\ci4\`)
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: `php spark`

<img width="677" alt="5" src="https://user-images.githubusercontent.com/56286071/122119777-c94ff500-ce53-11eb-9737-6f10451c8208.png">

## LANGKAH 4
## Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

<img width="960" alt="6" src="https://user-images.githubusercontent.com/56286071/122176757-2927b980-ceaf-11eb-940a-3fdeb7cadc3e.png">


Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan `mode debugging` dengan mengubah nilai konfigurasi pada environment variable `CI_ENVIRONMENT` menjadi `development`. Kemudian mengubah nama file `env` menjadi `.env` lalu setelah itu buka file tersebut dan ubah nilai variable `CI_ENVORNMENT` menjadi `development`. Setelah mengubah nilai konfigurasi pada environment variable `CI_ENVIRONMENT` menjadi `development`. maka hapus `tanda tagar (#)` pada awal baris `CI_ENVIRONMENT`. Dan yang terakhir, ubah kode pada file `app/Controller/Home.php` kemudian hilangkan `titik koma (;)` pada akhir kode seperti berikut.

<img width="960" alt="7" src="https://user-images.githubusercontent.com/56286071/122176796-30e75e00-ceaf-11eb-89cd-4039c9f90a56.png">


Maka hasilnya akan terjadi error seperti berikut.

<img width="960" alt="8" src="https://user-images.githubusercontent.com/56286071/122176855-4066a700-ceaf-11eb-8251-dc21cb31d8d2.png">

## LANGKAH 5
## Membuat Route Baru
Tambahkan kode berikut di dalam `app/config/Routes.php`

<img width="960" alt="9" src="https://user-images.githubusercontent.com/56286071/122180884-0a2b2680-ceb3-11eb-9654-159e4dcf492d.png">

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.
`php spark`

Ketik perintah berikut untuk menjalankan server CI 4 pada port 8080.
`php spark serve`

<img width="696" alt="10" src="https://user-images.githubusercontent.com/56286071/122183127-23cd6d80-ceb5-11eb-99db-bdd8d10ca238.png">

Selanjutnya coba `akses route` yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu `Controller` yang sesuai dengan routing yang dibuat yaitu `Controller Page`.

<img width="960" alt="11" src="https://user-images.githubusercontent.com/56286071/122186926-b9b6c780-ceb8-11eb-86dd-4ad6f445c69e.png">

## LANGKAH 6
## Membuat Controller
Selanjutnya adalah membuat `Controller Page`. Buat file baru dengan nama `page.php` pada direktori `Controller` kemudian isi kodenya seperti berikut.

<img width="960" alt="12" src="https://user-images.githubusercontent.com/56286071/122229253-c9e39c80-cee2-11eb-8217-ff07645b4390.png">

## LANGKAH 7
## Auto Routing
Secara default fitur autoroute pada `Codeiginiter` sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai `true` menjadi `false`. Kemudian tambahkan method baru pada `Controller Page` seperti berikut. Method ini belum ada pada `routing`, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos

<img width="960" alt="13" src="https://user-images.githubusercontent.com/56286071/122229400-e5e73e00-cee2-11eb-9990-b16a301d76e3.png">

## LANGKAH 8
### Membuat Views
Selanjutnya adalah membuat `view` untuk tampilan web agar lebih menarik. Buat file baru dengan nama `about.php` pada direktori `view (app/view/about.php)` kemudian isi kodenya seperti berikut. Kemudian ubah method `about` pada class `Controller Page` menjadi seperti berikut.

<img width="960" alt="14" src="https://user-images.githubusercontent.com/56286071/122229525-06af9380-cee3-11eb-9503-34c8ffbb0472.png">

Maka hasilnya seperti berikut

<img width="960" alt="15" src="https://user-images.githubusercontent.com/56286071/122229606-18913680-cee3-11eb-94f9-5bf4eb40b8d1.png">

## LANGKAH 9 
## Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan `css` dapat diimplementasikan dengan mudah pada `Codeigniter`. Yang perlu diketahui adalah pada `Codeigniter 4` file yang menyimpan asset `css` dan `javascript` terletak pada direktori public. Buat file `css` pada direktori public dengan nama `style.css` seperti berikut.

<img width="960" alt="16" src="https://user-images.githubusercontent.com/56286071/122229764-3a8ab900-cee3-11eb-9880-366130a99e6c.png">

Kemudian buat folder `template` pada direktori view kemudian buat file `header.php` dan `footer.php` seperti berikut.

<img width="960" alt="17" src="https://user-images.githubusercontent.com/56286071/122230038-76be1980-cee3-11eb-83ce-dfec25be0f77.png">

`File app/view/template/header.php`
`File app/view/template/footer.php`

<img width="960" alt="18" src="https://user-images.githubusercontent.com/56286071/122230146-93f2e800-cee3-11eb-9635-d923040db6aa.png">

Kemudian ubah file `app/view/about.php` seperti berikut.

<img width="960" alt="19" src="https://user-images.githubusercontent.com/56286071/122230195-9ce3b980-cee3-11eb-92e6-4b2166573f4f.png">

Hasilnya :

<img width="960" alt="20" src="https://user-images.githubusercontent.com/56286071/122230234-a5d48b00-cee3-11eb-8b59-a06710825865.png">


## Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

### Hasilnya :

<img width="960" alt="21" src="https://user-images.githubusercontent.com/56286071/122239224-f996a280-ceea-11eb-89b7-c4640af17258.png">

<img width="960" alt="22" src="https://user-images.githubusercontent.com/56286071/122239276-01564700-ceeb-11eb-9953-35578658d6c9.png">



# Praktikum 12 - Framework Lanjutan (CRUD)
# Pemrograman Web

```
Alfansha Abiftyo Hadyatama
311910321
TI.19.A.2
```

## Persiapan
Pastikan `MySQL server` sudah berjalan, Kemudian buat sebuah `database` dan `table` sebagai berikut:

<img width="960" alt="1" src="https://user-images.githubusercontent.com/56286071/122739374-1c3f0780-d2ad-11eb-9ccd-13ab5ad83188.png">

<img width="960" alt="2" src="https://user-images.githubusercontent.com/56286071/122739404-23661580-d2ad-11eb-8333-e8f463388feb.png">

## LANGKAH 1
## Konfigurasi Koneksi Database
`Konfigurasi` dapat dilakukan dengan cara mengubah beberapa kode pada file `htdocs\lab11_php_ci\ci4\.env`.
Dan hilangkan tanda pagar `#` didepan. Maka jadi seperti dibawah ini.

<img width="960" alt="3" src="https://user-images.githubusercontent.com/56286071/122740254-fe25d700-d2ad-11eb-970c-e6f7502b3971.png">

## LANGKAH 2
## Membuat Model
Selanjutnya adalah `membuat Model` untuk memproses `data Artikel`. Buat file baru pada direktori `app/Models` dengan nama `ArtikelModel.php`

<img width="960" alt="4" src="https://user-images.githubusercontent.com/56286071/122740519-404f1880-d2ae-11eb-98fd-8bf9b7c5d396.png">

## LANGKAH 3
## Membuat Controller
Buat `Controller` baru dengan nama `Artikel.php` pada direktori `app/Controllers`.

<img width="960" alt="5" src="https://user-images.githubusercontent.com/56286071/122740666-65438b80-d2ae-11eb-84b4-b8d4ac6e99e6.png">

## LANGKAH 4
## Membuat View
Buat folder baru dengan nama `artikel` pada direktori `app/views`, kemudian buat file baru dengan nama `index.php`.

<img width="960" alt="6" src="https://user-images.githubusercontent.com/56286071/122740787-860be100-d2ae-11eb-8f10-08670c8480c3.png">

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel

<img width="960" alt="7" src="https://user-images.githubusercontent.com/56286071/122740878-9c19a180-d2ae-11eb-9c90-71c18846983f.png">

Belum ada `data` yang diampilkan. Kemudian coba tambahkan beberapa `data` pada `database` agar dapat ditampilkan `datanya`.

<img width="960" alt="8" src="https://user-images.githubusercontent.com/56286071/122741356-12b69f00-d2af-11eb-8d29-4d7780d50a6e.png">

Refresh kembali browser, sehingga akan ditampilkan hasilnya.

<img width="960" alt="9" src="https://user-images.githubusercontent.com/56286071/122741688-6628ed00-d2af-11eb-8772-e15e1c6b020c.png">

## LANGKAH 5
## Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada `Controller Artikel` dengan nama `view()`.

<img width="960" alt="10" src="https://user-images.githubusercontent.com/56286071/122741909-a1c3b700-d2af-11eb-855d-a3da359f077b.png">

## LANGKAH 6
## Membuat View Detail
Buat `view` baru untuk halaman detail dengan nama `app/views/artikel/detail.php`.

<img width="960" alt="11" src="https://user-images.githubusercontent.com/56286071/122742370-11d23d00-d2b0-11eb-8c13-b216e2c74f53.png">

## LANGKAH 7
## Membuat Routing Untuk Artikel Detail
Buka Kembali file `app/config/Routes.php`, kemudian tambahkan `routing` untuk `artikel detail`.

<img width="960" alt="12" src="https://user-images.githubusercontent.com/56286071/122742546-40e8ae80-d2b0-11eb-821c-2d6671caea15.png">

Maka akan tampil halaman dari artikel yang di klik.

<img width="960" alt="13" src="https://user-images.githubusercontent.com/56286071/122742664-61b10400-d2b0-11eb-92a1-9b658a0f8a7b.png">

## LANGKAH 8
## Membuat Menu Admin
Buat method baru pada `Controller Artikel` dengan nama `admin_index()`.

<img width="960" alt="14" src="https://user-images.githubusercontent.com/56286071/122742787-84dbb380-d2b0-11eb-9914-3b92ea338b46.png">

Kemudian buat `view` untuk tampilan `admin` dengan nama `admin_index.php`.

<img width="960" alt="15" src="https://user-images.githubusercontent.com/56286071/122742896-a046be80-d2b0-11eb-8791-68b7431d2f53.png">

Tambahkan `routing` untuk `menu admin` seperti berikut:

<img width="960" alt="16" src="https://user-images.githubusercontent.com/56286071/122742968-b785ac00-d2b0-11eb-8090-f5662bdc0e74.png">

Setelah itu buat `template header` dan `footer` baru untuk `Halaman Admin`. Buat file baru dengan nama `admin_header.php` pada direktori `app/view/template`

<img width="960" alt="17" src="https://user-images.githubusercontent.com/56286071/122743095-dd12b580-d2b0-11eb-9236-5cfb12f594b2.png">

Dan Buat file baru lagi dengan nama `admin_footer.php` pada direktori `app/view/template`

<img width="960" alt="18" src="https://user-images.githubusercontent.com/56286071/122743166-f3207600-d2b0-11eb-84ad-7833c841aa36.png">

Kemudian buat file baru lagi dengan nama `admin.css` pada direktori `ci4/public` untuk mempercantik tampilan `Halaman Admin`.

<img width="960" alt="19" src="https://user-images.githubusercontent.com/56286071/122743286-0fbcae00-d2b1-11eb-860e-5943f974277e.png">

<img width="960" alt="20" src="https://user-images.githubusercontent.com/56286071/122743332-1a774300-d2b1-11eb-9a88-1929e22a0404.png">

Akses `menu admin` dengan url http://localhost:8080/admin/artikel

<img width="960" alt="21" src="https://user-images.githubusercontent.com/56286071/122743434-2ebb4000-d2b1-11eb-828c-7e77d9d5b91e.png">

## LANGKAH 9
## Menambahkan Data Artikel
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `add()`.

<img width="960" alt="22" src="https://user-images.githubusercontent.com/56286071/122744354-18fa4a80-d2b2-11eb-991a-2f38b205a0bb.png">

Kemudian buat `view` untuk `form tambah` dengan nama `form_add.php`

<img width="960" alt="23" src="https://user-images.githubusercontent.com/56286071/122744441-2d3e4780-d2b2-11eb-9071-87b85dde1546.png">

Klik menu `Tambah Artikel` dan inilah hasilnya.

<img width="960" alt="24" src="https://user-images.githubusercontent.com/56286071/122744515-3fb88100-d2b2-11eb-9341-a336a1593b9c.png">

## LANGKAH 10
## Mengubah Data
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `edit()`.

<img width="960" alt="25" src="https://user-images.githubusercontent.com/56286071/122744627-5c54b900-d2b2-11eb-84a5-a00ed1a18741.png">

Kemudian buat `view` untuk `form tambah` dengan nama `form_edit.php`

<img width="960" alt="26" src="https://user-images.githubusercontent.com/56286071/122744743-7e4e3b80-d2b2-11eb-95cd-5de968758a82.png">

Klik ubah pada salah satu `artikel` dan inilah hasilnya :

<img width="960" alt="27" src="https://user-images.githubusercontent.com/56286071/122744820-96be5600-d2b2-11eb-9730-8c8c23f2e89b.png">

## LANGKAH 11
## Menghapus Data
Tambahkan fungsi/method baru pada `Controller Artikel` dengan nama `delete()`.

<img width="960" alt="28" src="https://user-images.githubusercontent.com/56286071/122744949-b5245180-d2b2-11eb-87cd-15e7fc6e407c.png">


# Praktikum 13 - Framework Lanjutan (Modul Login)
# Pemrograman Web
```
Alfansha Abiftyo Hadyatama
311910321
TI.19.A.2
```

## Persiapan
Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.

Kemudian Membuat Tabel: User Login

<img width="960" alt="1" src="https://user-images.githubusercontent.com/56286071/123524655-faeb7a80-d6f5-11eb-941a-2f46c6ca30ef.png">

## LANGKAH 1
## Membuat Model User
Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori `app/Models` dengan nama `UserModel.php`

<img width="960" alt="2" src="https://user-images.githubusercontent.com/56286071/123524704-4f8ef580-d6f6-11eb-89bb-583078083cd5.png">

## LANGKAH 2
## Membuat Controller User
Buat Controller baru dengan nama `User.php` pada direktori `app/Controllers`. Kemudian tambahkan method `index()` untuk menampilkan daftar user, dan method 
`login()` untuk proses login.

<img width="960" alt="3" src="https://user-images.githubusercontent.com/56286071/123524736-7c430d00-d6f6-11eb-913c-63c4cf167641.png">

<img width="960" alt="4" src="https://user-images.githubusercontent.com/56286071/123524742-836a1b00-d6f6-11eb-9b19-d779e71cd467.png">

## LANGKAH 3
## Membuat View Login
Buat direktori baru dengan nama `user` pada direktori `app/views`, kemudian buat file baru dengan nama `login.php`. 

<img width="960" alt="5" src="https://user-images.githubusercontent.com/56286071/123524775-aac0e800-d6f6-11eb-9ae4-e9d239982602.png">

## LANGKAH 4
## Membuat Database Seeder
Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat 
database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:
`php spark make:seeder UserSeeder`

<img width="589" alt="6" src="https://user-images.githubusercontent.com/56286071/123524790-c88e4d00-d6f6-11eb-851a-674743085ad5.png">

Selanjutnya, buka file `UserSeeder.php` yang berada di lokasi direktori `/app/Database/Seeds/UserSeeder.php` kemudian isi dengan kode berikut:

<img width="960" alt="7" src="https://user-images.githubusercontent.com/56286071/123524832-08edcb00-d6f7-11eb-8e83-6785b643dfc7.png">

Selanjutnya buka kembali CLI dan ketik perintah berikut:
`php spark db:seed UserSeeder`

<img width="578" alt="8" src="https://user-images.githubusercontent.com/56286071/123524854-2753c680-d6f7-11eb-8449-ac495b766e48.png">

Jangan lupa jalankan perintah ini untuk menjalankan ci4 di port 8080. Buka kembali CLI dan ketik perintah berikut:
`php spark serve`

<img width="715" alt="9" src="https://user-images.githubusercontent.com/56286071/123524869-44889500-d6f7-11eb-99eb-508d4633aee6.png">

Tambahkan CSS untuk mempercantikan tampilan login. Buka file `style.css` pada direktori `ci4\public\style.css`

<img width="960" alt="10" src="https://user-images.githubusercontent.com/56286071/123524892-5cf8af80-d6f7-11eb-8c8b-d89096cfbe0f.png">

### Uji Coba Login
Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

<img width="960" alt="11" src="https://user-images.githubusercontent.com/56286071/123524918-7dc10500-d6f7-11eb-9d11-d5fcf50e81d9.png">

## LANGKAH 5
## Menambahkan Auth Filter
Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama `Auth.php` pada direktori `app/Filters`. 

<img width="960" alt="12" src="https://user-images.githubusercontent.com/56286071/123524984-03dd4b80-d6f8-11eb-9a64-08c6f9754075.png">

Selanjutnya buka file `app/Config/Filters.php` tambahkan kode berikut:
`'auth' => App\Filters\Auth::class`

<img width="960" alt="13" src="https://user-images.githubusercontent.com/56286071/123524999-1bb4cf80-d6f8-11eb-8dd0-8f2b448efdbc.png">

Selanjutnya buka file `app/Config/Routes.php` dan sesuaikan kodenya.

<img width="960" alt="14" src="https://user-images.githubusercontent.com/56286071/123525009-2cfddc00-d6f8-11eb-93fb-9d47ee7ce350.png">

## LANGKAH 6
## Fungsi Logout
Tambahkan method logout pada `Controller User` seperti berikut:

<img width="960" alt="15" src="https://user-images.githubusercontent.com/56286071/123525053-6d5d5a00-d6f8-11eb-8bd9-64de09179b3d.png">

Tambahkan menu logout di header admin. Ke direktori `app\view\template` lalu buka file `admin_header.php` tambahkan kode berikut

`<a href="<?= base_url('/admin/logout');?>">Logout</a>`

<img width="960" alt="16" src="https://user-images.githubusercontent.com/56286071/123525075-8d8d1900-d6f8-11eb-834a-396f29c8ee93.png">

Tambahkan route logout dengan cara ke direktori `app\Config\Routes.php` lalu tambahkan kode berikut

`$routes->add('logout', 'User::logout');`

<img width="960" alt="17" src="https://user-images.githubusercontent.com/56286071/123525087-9e3d8f00-d6f8-11eb-8315-392be43767bf.png">

## LANGKAH 7
## Percobaan Akses Menu Admin
Buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.

<img width="960" alt="18" src="https://user-images.githubusercontent.com/56286071/123525115-c88f4c80-d6f8-11eb-95ab-a9842880c8b8.png">

<img width="960" alt="19" src="https://user-images.githubusercontent.com/56286071/123525116-cd540080-d6f8-11eb-9520-69945c1c61cc.png">


# Praktikum 14 - Pagination dan Pencarian
# Pemrograman Web
```
Alfansha Abiftyo Hadyatama
311910321
TI.19.A.2
```

## LANGKAH 1
## Membuat Pagination
`Pagination` merupakan proses yang digunakan untuk membatasi tampilan yang panjang dari data yang banyak pada sebuah website. `Fungsi pagination` adalah memecah 
tampilan menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan pada setiap halaman. Pada `Codeigniter 4`, `fungsi pagination` sudah tersedia pada Library sehingga cukup mudah menggunakannya. Untuk membuat `pagination`, buka Kembali `Controller Artikel` - `htdocs\lab11_php_ci\ci4\Controllers\Artikel.php`, kemudian modifikasi kode pada method `admin_index` seperti berikut.

<img width="960" alt="1" src="https://user-images.githubusercontent.com/56286071/125151175-70802d80-e16f-11eb-9896-fc952d53c448.png">

Kemudian buka file `views/artikel/admin_index.php` dan tambahkan kode berikut dibawah deklarasi tabel data.

<img width="960" alt="2" src="https://user-images.githubusercontent.com/56286071/125151193-868dee00-e16f-11eb-9900-d82a1a90d9b0.png">

Selanjutnya buka kembali menu `daftar artikel`, tambahkan `data` lagi untuk melihat hasilnya.

<img width="960" alt="3" src="https://user-images.githubusercontent.com/56286071/125151250-a02f3580-e16f-11eb-9f56-148aa25d1dcd.png">

## LANGKAH 2
## Membuat Pencarian
Pencarian data digunakan untuk memfilter data.
Untuk membuat pencarian data, buka kembali `Controller Artikel` - `htdocs\lab11_php_ci\ci4\Controllers\Artikel.php`, pada method `admin_index` ubah kodenya seperti berikut

<img width="960" alt="4" src="https://user-images.githubusercontent.com/56286071/125151620-a1f9f880-e171-11eb-9a64-d82ce69959ab.png">

Kemudian buka kembali file `views/artikel/admin_index.php` dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:

<img width="960" alt="5" src="https://user-images.githubusercontent.com/56286071/125151634-c0f88a80-e171-11eb-98a0-3f8516c71534.png">

Dan pada link pager ubah seperti berikut.

<img width="960" alt="6" src="https://user-images.githubusercontent.com/56286071/125151637-ca81f280-e171-11eb-8492-f7c4b634d9ff.png">

Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata kunci tertentu pada form pencarian.

<img width="960" alt="7" src="https://user-images.githubusercontent.com/56286071/125151644-dd94c280-e171-11eb-9c6c-f3300e109d0f.png">

## LANGKAH 3
## Upload Gambar
Menambahkan fungsi unggah gambar pada tambah artikel. Buka kembali `Controller Artikel` - `htdocs\lab11_php_ci\ci4\Controllers\Artikel.php`, sesuaikan kode pada `method add` seperti berikut:

<img width="960" alt="8" src="https://user-images.githubusercontent.com/56286071/125151746-8e02c680-e172-11eb-8112-132b4bba80fd.png">

Kemudian pada file `views/artikel/form_add.php` tambahkan field input file seperti berikut.
Dan sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.

<img width="960" alt="9" src="https://user-images.githubusercontent.com/56286071/125151764-b5f22a00-e172-11eb-943a-e8e8ca086dc4.png">

Ujicoba file upload dengan mengakses `menu tambah artikel`.

<img width="960" alt="10" src="https://user-images.githubusercontent.com/56286071/125151773-c5717300-e172-11eb-8205-6c1b9e99074c.png">
