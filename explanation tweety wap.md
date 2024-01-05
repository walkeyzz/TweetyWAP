# TWEETYWAP
# Account
Kode PHP di atas digunakan untuk membuat halaman pengaturan akun (account settings) pada aplikasi Twitter. Berikut adalah penjelasan singkatnya:

1. **Inisialisasi dan Pemeriksaan Login**:
   - Mendapatkan data pengguna yang sedang login.
   - Memeriksa apakah pengguna sudah login. Jika tidak, maka akan diarahkan kembali ke halaman utama.

2. **Struktur HTML dan CSS**:
   - Menyertakan file CSS dan JavaScript (Bootstrap, FontAwesome, dan file kustom).
   - Mendefinisikan struktur HTML untuk halaman pengaturan akun dengan beberapa tab (Change Email/Username dan Change Password).

3. **Sidebar Kiri**:
   - Menampilkan menu sidebar kiri dengan navigasi ke beranda, notifikasi, profil pengguna, pengaturan akun, dan opsi logout.

4. **Form Perubahan Email/Username**:
   - Membuat formulir untuk mengganti alamat email dan/atau username.
   - Menampilkan pesan kesalahan jika ada kesalahan validasi pada pengisian formulir.

5. **Form Perubahan Password**:
   - Membuat formulir untuk mengganti kata sandi.
   - Menampilkan pesan kesalahan jika ada kesalahan validasi pada pengisian formulir.

6. **Fitur Live Search**:
   - Menambahkan fitur pencarian langsung dengan ikon kaca pembesar dan menampilkan hasil pencarian dalam kotak dropdown.

7. **Daftar Akun yang Mungkin Diikuti**:
   - Menampilkan daftar akun yang mungkin diikuti oleh pengguna, termasuk foto profil, nama, dan tombol "Follow" atau "Following" sesuai status saat ini.

8. **JavaScript Interaktif**:
   - Menggunakan JavaScript untuk membuat elemen-elemen interaktif, seperti tombol "Follow", "Following", dan fitur pencarian langsung.

9. **Logout Button**:
   - Menambahkan tombol untuk logout dari akun pengguna.

10. **Styling Tambahan**:
    - Menambahkan beberapa gaya CSS untuk mempercantik tampilan halaman.

Kode ini menciptakan antarmuka pengguna untuk mengelola pengaturan akun pengguna, termasuk perubahan email/username, perubahan kata sandi, serta menampilkan saran akun yang mungkin diikuti dan fitur pencarian langsung.

# Home
Kode PHP di atas digunakan untuk membuat halaman utama (Home) dari aplikasi Twitter. Berikut adalah penjelasan singkatnya:

1. **Inisialisasi dan Pemeriksaan Login**:
   - Mendapatkan data pengguna yang sedang login.
   - Memeriksa apakah pengguna sudah login. Jika tidak, maka akan diarahkan kembali ke halaman utama.

2. **Struktur HTML dan CSS**:
   - Menyertakan file CSS dan JavaScript (Bootstrap, FontAwesome, dan file kustom).
   - Mendefinisikan struktur HTML untuk halaman utama dengan elemen-elemen seperti sidebar, area posting tweet, daftar tweet, dan daftar akun yang mungkin diikuti.

3. **Modal Selamat Datang**:
   - Menampilkan modal selamat datang untuk pengguna baru yang berhasil mendaftar.

4. **Sidebar Kiri**:
   - Menampilkan menu sidebar kiri dengan navigasi ke beranda, notifikasi, profil pengguna, pengaturan akun, dan opsi logout.

5. **Form Posting Tweet**:
   - Membuat formulir untuk pengguna dapat memposting tweet.
   - Menambahkan tombol untuk mengunggah gambar bersama dengan tweet.
   - Menampilkan pesan kesalahan jika ada kesalahan validasi pada pengisian formulir.

6. **Daftar Akun yang Mungkin Diikuti**:
   - Menampilkan daftar akun yang mungkin diikuti oleh pengguna, termasuk foto profil, nama, dan tombol "Follow" atau "Following" sesuai status saat ini.

7. **Daftar Tweet**:
   - Memasukkan file `includes/tweets.php` untuk menampilkan daftar tweet yang telah diposting.

8. **JavaScript Interaktif**:
   - Menggunakan JavaScript untuk membuat elemen-elemen interaktif, seperti tombol "Follow", "Following", tombol pencarian, tombol "Like", "Comment", dan "Retweet" pada setiap tweet.

9. **Logout Button**:
   - Menambahkan tombol untuk logout dari akun pengguna.

10. **Styling Tambahan**:
    - Menambahkan beberapa gaya CSS untuk mempercantik tampilan halaman.

Kode ini menciptakan antarmuka pengguna untuk melihat dan memposting tweet, menampilkan daftar tweet, dan menampilkan rekomendasi akun yang mungkin diikuti. Selain itu, menampilkan modal selamat datang untuk pengguna baru.

# Index
Kode PHP di atas adalah untuk halaman utama (index.php) dari aplikasi Twitter. Berikut adalah penjelasan singkatnya:

1. **Pemeriksaan Sesi dan Redirect**:
   - Memeriksa apakah pengguna sudah login (sesi user_id sudah ada). Jika sudah, pengguna diarahkan ke halaman utama (home.php).

2. **HTML dan CSS**:
   - Menggunakan file eksternal untuk gaya (CSS) dan beberapa ikon dari Font Awesome.
   - Menampilkan elemen-elemen HTML untuk bagian login dan fitur.

3. **Bagian Login**:
   - Memasukkan file eksternal `login.php` yang berisi formulir login.
   - Menampilkan tombol "Log in" dan "Sign up".
   - Menampilkan modal untuk pendaftaran saat tombol "Sign up" ditekan.

4. **Modal Pendaftaran**:
   - Menggunakan modal Bootstrap untuk formulir pendaftaran (SignUp).
   - Memasukkan file eksternal `signup-form.php` yang berisi formulir pendaftaran.

5. **Fitur Twitter**:
   - Menampilkan fitur Twitter dengan ikon dan teks yang merinci beberapa fitur utama seperti "Follow your interests", "Hear what people are talking about", dan "Join the conversation".

6. **Footer**:
   - Menampilkan bagian footer dengan tautan ke halaman terkait seperti About, Help Center, Terms, dan lainnya.
   - Menampilkan hak cipta dan informasi pengembang.

7. **Script JavaScript**:
   - Mengimpor jQuery, Popper, Bootstrap, dan file JavaScript kustom (mine.js).

Kode ini menciptakan antarmuka pengguna untuk halaman beranda Twitter, menyertakan formulir login, modal pendaftaran, dan fitur-fitur utama Twitter.

# notification
Kode PHP di atas adalah untuk halaman notifikasi (notification.php) pada aplikasi Twitter. Berikut adalah ringkasan fungsionalitas utama:

1. **Pemrosesan Data Pengguna dan Notifikasi**:
   - Mengambil informasi pengguna dan notifikasi dari sesi.
   - Memperbarui jumlah notifikasi yang belum terbaca.
   - Menghitung jumlah notifikasi yang belum terbaca.

2. **Pengecekan Login**:
   - Jika pengguna tidak login, maka diarahkan kembali ke halaman login (index.php).

3. **Antarmuka Pengguna**:
   - Menampilkan daftar notifikasi dengan berbagai jenis (like, retweet, follow, dll.).
   - Menggunakan ikon yang sesuai dengan jenis notifikasi.
   - Menyertakan avatar pengguna yang terlibat dalam notifikasi.
   - Menampilkan waktu sejak notifikasi dibuat dengan menggunakan fungsi `tweet::getTimeAgo()`.

4. **Sidebar Kiri**:
   - Menampilkan sidebar kiri dengan ikon navigasi untuk "Home", "Notifications", "Profile", "Settings", dan "Logout".
   - Menyoroti "Notifications" sebagai halaman aktif.

5. **Baris Pencarian**:
   - Menampilkan baris pencarian dengan ikon pencarian dan input pencarian.

6. **Panel Who to Follow**:
   - Menampilkan panel "Who to follow" dengan daftar pengguna yang disarankan untuk diikuti.

7. **Script JavaScript dan Gaya**:
   - Mengimpor library JavaScript seperti jQuery, Bootstrap, dan file JavaScript kustom.
   - Menyertakan file gaya (CSS) untuk mengatur tata letak halaman.

Kode ini menciptakan antarmuka pengguna untuk halaman notifikasi Twitter dengan menampilkan daftar notifikasi yang melibatkan berbagai tindakan pengguna di platform tersebut.

# profile
Kode PHP yang diberikan adalah bagian dari halaman profil pengguna pada suatu situs web mirip dengan Twitter. Berikut adalah penjelasan singkat dari beberapa bagian utama dalam kode tersebut:

1. **Pengecekan dan Pengambilan Data Pengguna:**
   - Kode memulai dengan melakukan pengecekan terhadap parameter GET 'username' untuk memastikan bahwa itu diatur dan tidak kosong.
   - Data pengguna kemudian diambil dari database berdasarkan username yang diberikan.

2. **Pengaturan Tampilan:**
   - Tampilan halaman web disusun menggunakan HTML dan CSS.
   - Diberikan beberapa elemen seperti judul, ikon, dan daftar tweet yang akan ditampilkan.

3. **Sidebar dan Navigasi:**
   - Terdapat sidebar dengan opsi seperti "Home", "Notifications", "Profile", "Settings", dan "Logout".
   - Tombol "Tweet" juga disediakan di bagian bawah.

4. **Profil Pengguna:**
   - Informasi profil pengguna, seperti nama, username, gambar profil, dan cover photo, ditampilkan.
   - Jika pengguna yang sedang masuk adalah pemilik profil, tombol "Edit Profile" akan ditampilkan yang membuka modal untuk mengedit profil.

5. **Tweet dan Tab Menu:**
   - Tweet-tweet pengguna ditampilkan dalam tiga tab yang berbeda: "Tweets", "Media", dan "Likes".
   - Jumlah tweet, pengikut, dan yang diikuti juga ditampilkan.

6. **Modal Edit Profile:**
   - Modal muncul saat pengguna ingin mengedit profilnya.
   - Dalam modal ini, pengguna dapat mengganti foto profil, cover photo, nama, bio, website, dan lokasi.

7. **Who to Follow:**
   - Bagian ini menampilkan saran pengguna untuk diikuti.

8. **Script dan JavaScript:**
   - Beberapa script JavaScript terkait seperti penanganan pencarian, tindakan pengguna seperti follow, dan fitur-fitur lainnya disertakan di akhir halaman.

9. **Stylesheet dan Icons:**
   - Terdapat penggunaan stylesheet untuk mengatur tata letak dan tampilan halaman.
   - Icons dari Font Awesome digunakan untuk beberapa elemen.

10. **Pustaka Eksternal:**
    - Kode menggunakan pustaka eksternal seperti Bootstrap dan jQuery.

Harap dicatat bahwa beberapa bagian dari kode tersebut mungkin tidak terlihat atau dijelaskan dengan rinci karena keterbatasan ruang dan untuk kejelasan singkat.

# status
Kode PHP ini merupakan bagian dari halaman yang menampilkan detail suatu tweet. Berikut adalah penjelasan singkatnya:

1. `include 'core/init.php';`: Mengimpor file `init.php` yang berisi konfigurasi awal dan file-file yang dibutuhkan.

2. Mendapatkan informasi pengguna saat ini (yang sedang login) dari sesi.

3. Memeriksa apakah pengguna sudah login. Jika belum, maka mengarahkan ke halaman utama (`index.php`).

4. Mendapatkan id tweet yang akan ditampilkan dari parameter GET.

5. Memanggil fungsi `tweet::getData($tweet_id)` untuk mendapatkan data tweet.

6. Mendapatkan daftar pengguna yang mungkin ingin diikuti oleh pengguna saat ini.

7. Menghitung jumlah notifikasi yang belum dibaca.

8. Mendefinisikan struktur halaman HTML dengan menggunakan Bootstrap.

9. Menampilkan elemen-elemen antarmuka seperti sidebar, tweet, tombol-tombol reaksi, dan daftar pengguna yang mungkin diikuti.

10. Menggunakan JavaScript untuk mengatur interaksi seperti pencarian, penanganan hashtag, like, follow, dll.

11. Menggunakan beberapa kondisi untuk menentukan tipe dan tampilan tweet, serta menghitung jumlah retweet, like, dan komentar.

12. Menampilkan tweet dan komentar-komentar yang terkait dengan tweet tersebut.

13. Menggunakan beberapa fungsi JavaScript untuk menangani berbagai interaksi pengguna, seperti like, retweet, dan follow.

14. Menggunakan beberapa file JavaScript eksternal dan juga mengimpor jQuery untuk memudahkan manipulasi DOM dan interaksi antarmuka.

15. Menyediakan link untuk mengimpor ikon dari Font Awesome.

16. Menyediakan link ke file JavaScript dan Bootstrap.

Catatan: Kode ini sebaiknya diperiksa lebih lanjut untuk keamanan dan performa. Juga, pastikan bahwa file-file yang diimpor (seperti `init.php` dan file kelas lainnya) tersedia dan berfungsi dengan baik.
