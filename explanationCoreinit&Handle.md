# CORE-Init
# INit
Kode di atas adalah skrip awal untuk menginisialisasi environment dan memuat kelas-kelas yang diperlukan untuk operasi pada aplikasi Twitter clone. Berikut adalah penjelasan singkat untuk bagian-bagian utama dari kode tersebut:

1. **`include` Statements**: Kode memuat file-file yang diperlukan, seperti file koneksi database (`connection.php`) dan kelas-kelas (`User.php`, `Follow.php`, `tweet.php`). Namun, satu baris dengan `include 'database/connection.php';` di-comment, dan yang digunakan adalah `include 'classes/connection.php';`.

2. **`session_start()`**: Memulai atau melanjutkan sesi pengguna untuk menyimpan variabel sesi dan mempertahankan data antar permintaan.

3. **Global Variable `$pdo`**: Variabel global untuk menyimpan koneksi database yang nantinya digunakan dalam kelas-kelas.

4. **`define("BASE_URL", "http://localhost/twitterclone/");`**: Membuat konstanta `BASE_URL` yang menyimpan URL dasar aplikasi.

5. **Instantiasi Kelas**: Penggunaan kelas-kelas seperti `User`, `Follow`, dan `tweet` yang digunakan secara statis, tanpa membuat objek baru. Dalam konteks ini, `User`, `Follow`, dan `tweet` mungkin memiliki metode-metode statis yang memfasilitasi operasi tertentu tanpa perlu membuat objek instans.

Kode ini adalah bagian awal dari aplikasi dan berfungsi untuk menyiapkan lingkungan kerja, mendefinisikan konstanta, dan memuat kelas-kelas yang diperlukan.

# HANDLE
# Handle Account Setting

# Handle Change Password
Kode di atas adalah skrip PHP yang digunakan untuk memproses formulir perubahan password pengguna. Berikut adalah penjelasan singkat untuk bagian-bagian utama dari kode tersebut:

1. **`include` Statements**: Memuat file yang diperlukan seperti `init.php` dan kelas `Validator`.

2. **Namespace Declaration**: Menggunakan namespace `validation` dan mengimpor kelas `Validator`.

3. **Redirect to Login Page**: Jika pengguna belum login (`User::checkLogIn()` mengembalikan `false`), maka pengguna akan diarahkan kembali ke halaman login.

4. **Retrieve User Data**: Mengambil data pengguna dari sesi dan variabel `$user`, serta mendapatkan username pengguna.

5. **Form Submission Handling**: Memeriksa apakah formulir telah disubmit (melalui `isset($_POST['submit'])`).

6. **Data Validation**: Menggunakan kelas `Validator` untuk menerapkan aturan validasi pada input password baru. Jika ada kesalahan validasi, pesan kesalahan disimpan dalam sesi, dan pengguna diarahkan kembali ke halaman akun.

7. **Check Old Password**: Memeriksa apakah password lama yang dimasukkan cocok dengan password yang tersimpan di database.

8. **Password Matching Check**: Memeriksa apakah password baru dan verifikasi password baru cocok. Jika tidak, pesan kesalahan disimpan dalam sesi, dan pengguna diarahkan kembali ke halaman akun.

9. **Update Password**: Jika tidak ada kesalahan validasi atau kesalahan pada password lama, password baru di-hash dan data pengguna diperbarui menggunakan metode statis `update` dari kelas `User`.

10. **Redirect to Profile Page**: Pengguna diarahkan kembali ke halaman profil setelah proses selesai.

Kode ini bertanggung jawab untuk memproses perubahan password pengguna, termasuk validasi input dan pemeriksaan password lama.

# Handle Delete Cover
Kode di atas adalah skrip PHP yang bertanggung jawab untuk menghapus gambar sampul lama pengguna dan memperbarui referensi gambar sampul di database dengan gambar sampul default ('cover.png'). Berikut adalah penjelasan singkat untuk bagian-bagian utama dari kode tersebut:

1. **Memeriksa Status Login**: Menggunakan fungsi `User::checkLogIn()` untuk memastikan bahwa pengguna sudah login. Jika tidak, pengguna akan diarahkan kembali ke halaman login.

2. **Mendapatkan Informasi Pengguna**: Mengambil data pengguna dari database berdasarkan ID pengguna yang disimpan dalam sesi.

3. **Menghapus Gambar Sampul Lama**: Jika gambar sampul saat ini bukan 'cover.png', maka gambar sampul lama dihapus dari direktori `../assets/images/users/`.

4. **Persiapan Data Baru**: Menyiapkan data baru untuk diperbarui di database. Dalam hal ini, mengatur `imgCover` ke 'cover.png'.

5. **Memperbarui Database**: Menggunakan metode statis `update` dari kelas `User` untuk memperbarui data pengguna dengan data baru.

6. **Pengalihan Halaman**: Jika pembaruan berhasil (`$sign == true`), pengguna diarahkan kembali ke halaman profil. Jika tidak, pengguna tetap diarahkan ke halaman profil.

Kode ini berfungsi untuk mengganti gambar sampul pengguna dengan gambar sampul default dan memastikan bahwa gambar sampul lama dihapus.

# Handle Login
Skrip PHP di atas adalah bagian dari proses autentikasi login. Berikut adalah penjelasan singkatnya:

1. **Pengecekan Metode Permintaan**: Mengecek apakah formulir login telah dikirim (`isset($_POST['login']) && !empty($_POST['login'])`).

2. **Pengambilan Data dari Formulir**: Mengambil nilai email dan password dari formulir login.

3. **Pembersihan dan Validasi Data**: Menggunakan kelas `Validator` untuk membersihkan dan memvalidasi data input. Jika tidak ada kesalahan validasi, proses login dilanjutkan.

4. **Pemanggilan Fungsi Login**: Menggunakan fungsi statis `User::login($email, $password)` untuk mencoba login. Jika login berhasil, pengguna diarahkan ke halaman beranda (`header('location: ../index.php')`). Jika login gagal, pesan kesalahan ditetapkan dalam `$_SESSION['errors']` dan pengguna diarahkan kembali ke halaman login.

5. **Penanganan Kesalahan**: Jika terdapat kesalahan validasi atau kesalahan login, pesan kesalahan disimpan dalam `$_SESSION['errors']` dan pengguna diarahkan kembali ke halaman login.

Skrip ini membantu dalam melakukan validasi, membersihkan input, dan mengelola proses login pengguna ke dalam sistem.

# Handle Signup
Skrip PHP di atas adalah bagian dari proses pendaftaran pengguna baru (sign-up). Berikut adalah penjelasan singkatnya:

1. **Pengecekan Metode Permintaan**: Mengecek apakah formulir pendaftaran (`isset($_POST['signup'])`).

2. **Pengambilan Data dari Formulir**: Mengambil nilai email, nama, password, dan username dari formulir pendaftaran.

3. **Pembersihan dan Validasi Data**: Menggunakan kelas `Validator` untuk membersihkan dan memvalidasi data input. Jika tidak ada kesalahan validasi, proses pendaftaran dilanjutkan.

4. **Pengecekan Unik Email dan Username**: Memeriksa apakah email dan username yang dimasukkan sudah digunakan. Jika sudah, pesan kesalahan disimpan dalam `$_SESSION['errors_signup']` dan pengguna diarahkan kembali ke halaman pendaftaran.

5. **Pengecekan Karakter Username**: Memeriksa apakah username hanya terdiri dari huruf, angka, dan garis bawah. Jika tidak, pesan kesalahan disimpan dalam `$_SESSION['errors_signup']` dan pengguna diarahkan kembali ke halaman pendaftaran.

6. **Pendaftaran Pengguna**: Jika tidak ada kesalahan, fungsi `User::register` dipanggil untuk mendaftarkan pengguna baru dengan menggunakan informasi yang dimasukkan.

7. **Penanganan Kesalahan**: Jika terdapat kesalahan validasi atau kesalahan dalam proses pendaftaran, pesan kesalahan disimpan dalam `$_SESSION['errors_signup']` dan pengguna diarahkan kembali ke halaman pendaftaran.

Skrip ini membantu dalam melakukan validasi, membersihkan input, dan mengelola proses pendaftaran pengguna baru.

# Handle tweet
Skrip PHP di atas merupakan bagian dari proses pengiriman tweet pada aplikasi media sosial. Berikut adalah penjelasan singkatnya:

1. **Pengecekan Status Log-in**: Memastikan bahwa pengguna telah masuk. Jika belum, pengguna diarahkan kembali ke halaman login.

2. **Pengecekan Data Formulir**: Memeriksa apakah status atau gambar tweet diisi. Jika tidak, menyimpan pesan kesalahan dan mengarahkan kembali ke halaman utama.

3. **Validasi Data Input**: Menggunakan kelas `Validator` untuk membersihkan dan memvalidasi status dan gambar tweet.

4. **Pengelolaan Gambar**: Jika ada gambar yang diunggah, menggunakan kelas `Image` untuk mengelola proses pengunggahan gambar ke server.

5. **Pembuatan Data Tweet dan Post**: Membuat data untuk tabel `posts` dan `tweets`, kemudian menyimpannya dalam database.

6. **Notifikasi Mentions**: Jika ada mention dalam tweet, mengirim notifikasi kepada pengguna yang disebutkan.

7. **Pengelolaan Hashtags**: Jika ada hashtag dalam tweet, menambahkannya ke dalam database sebagai tren.

8. **Penanganan Kesalahan**: Jika terdapat kesalahan validasi atau kesalahan dalam proses pengiriman tweet, pesan kesalahan disimpan dalam `$_SESSION['errors_tweet']` dan pengguna diarahkan kembali ke halaman utama.

9. **Pengalihan Halaman**: Jika tidak ada kesalahan, pengguna diarahkan kembali ke halaman utama.

Skrip ini membantu dalam memastikan data yang dimasukkan valid, mengelola gambar yang diunggah, dan melakukan tindakan terkait notifikasi dan tren pada tweet.

# Handle Update Data
Skrip PHP di atas digunakan untuk mengelola pembaruan profil pengguna pada aplikasi media sosial. Berikut adalah penjelasan singkatnya:

1. **Pengecekan Status Log-in**: Memastikan bahwa pengguna telah masuk. Jika belum, pengguna diarahkan kembali ke halaman login.

2. **Penerimaan Data Formulir**: Mengambil data yang dikirimkan melalui formulir pembaruan profil.

3. **Validasi Data Input**: Menggunakan kelas `Validator` untuk membersihkan dan memvalidasi data input seperti nama, bio, gambar profil, dan gambar sampul.

4. **Pengelolaan Gambar**: Jika ada gambar profil atau sampul baru yang diunggah, menggunakan kelas `Image` untuk mengelola proses pengunggahan gambar ke server.

5. **Pembuatan Data Pembaruan Profil**: Membuat data yang akan diperbarui pada tabel `users`.

6. **Pembaruan Profil Pengguna**: Menggunakan fungsi `update` dari kelas `User` untuk memperbarui data profil pengguna dalam database.

7. **Penghapusan Gambar Lama**: Jika gambar profil atau sampul lama bukan yang bawaan sistem, maka gambar lama dihapus dari server.

8. **Pengalihan Halaman**: Jika pembaruan berhasil, pengguna diarahkan kembali ke halaman profilnya.

9. **Penanganan Kesalahan**: Jika terdapat kesalahan validasi atau kesalahan dalam proses pembaruan profil, pesan kesalahan disimpan dalam `$_SESSION['errors']` dan pengguna diarahkan kembali ke halaman profil.

Skrip ini membantu dalam memastikan data yang dimasukkan valid, mengelola gambar yang diunggah, dan melakukan pembaruan profil pengguna.


# INCLUDES
# Login
Potongan kode PHP di atas merupakan formulir HTML untuk halaman login. Berikut adalah penjelasan singkatnya:

1. **Formulir Login**: Membuat formulir HTML dengan metode POST yang mengarah ke skrip `./handle/handlelogin.php`.

2. **Input Email dan Password**: Dua input untuk memasukkan alamat email dan kata sandi.

3. **Tombol Login**: Tombol submit untuk mengirimkan formulir.

4. **Pesan Kesalahan**: Jika terdapat kesalahan dalam proses login, pesan-pesan kesalahan akan ditampilkan di bawah formulir menggunakan tag `<div>` dengan kelas `con`. Pesan kesalahan diambil dari `$_SESSION['errors']` dan kemudian unset agar pesan tidak ditampilkan kembali di halaman selanjutnya.

5. **Handle Login**: Setelah pengguna mengisi formulir dan mengklik tombol login, data akan dikirimkan ke `./handle/handlelogin.php` untuk diproses lebih lanjut.

Formulir ini memberikan antarmuka yang bersih untuk pengguna memasukkan informasi login dan menangani pesan kesalahan jika terjadi kesalahan dalam proses login.
# logout
Potongan kode PHP di atas adalah formulir HTML untuk halaman login. Berikut penjelasan singkatnya:

1. **Formulir Login**: Membuat formulir HTML dengan metode POST yang mengarah ke skrip `./handle/handlelogin.php`.

2. **Input Email dan Password**: Dua input untuk memasukkan alamat email dan kata sandi.

3. **Tombol Login**: Tombol submit untuk mengirimkan formulir.

4. **Pesan Kesalahan**: Jika terdapat kesalahan dalam proses login, pesan-pesan kesalahan akan ditampilkan di bawah formulir. Pesan kesalahan diambil dari `$_SESSION['errors']` dan kemudian dihapus (`unset`) agar pesan tidak ditampilkan kembali di halaman selanjutnya.

Formulir ini memberikan antarmuka yang bersih untuk pengguna memasukkan informasi login dan menangani pesan kesalahan jika terjadi kesalahan dalam proses login.
# sign-up form
Potongan kode PHP di atas menunjukkan formulir pendaftaran dengan fitur modal untuk menampilkan pesan kesalahan jika registrasi gagal. Berikut penjelasan singkatnya:

1. **Pemanggilan jQuery**: Menggunakan jQuery untuk memanggil modal secara otomatis ketika terdapat kesalahan registrasi.

2. **Script Modal**: Mengeksekusi skrip jQuery yang menunjukkan modal jika terdapat `$_SESSION['errors_signup']`.

3. **Pesan Kesalahan**: Jika terdapat kesalahan registrasi (`$_SESSION['errors_signup']` terdefinisi), masing-masing pesan kesalahan akan ditampilkan dalam div alert-danger di dalam modal.

4. **Formulir Pendaftaran**: Formulir HTML dengan metode POST yang mengarah ke skrip `./handle/handleSignUp.php`.

5. **Input Nama, Username, Email, dan Password**: Empat input untuk memasukkan informasi pendaftaran seperti nama lengkap, username, alamat email, dan kata sandi.

6. **Tombol Sign Up**: Tombol submit untuk mengirimkan formulir.

Formulir ini memberikan pengguna antarmuka yang bersih untuk pendaftaran, dan menggunakan modal untuk menyoroti pesan kesalahan jika terjadi kesalahan dalam proses pendaftaran. Setelah menampilkan pesan kesalahan, `unset($_SESSION['errors_signup'])` digunakan agar pesan kesalahan tidak ditampilkan lagi di halaman selanjutnya.
# tweets
Potongan kode PHP di atas digunakan untuk menampilkan tweet-feed pengguna dengan berbagai fitur seperti retweet, like, dan komentar. Berikut penjelasan singkatnya:

1. **Looping Melalui Tweet**: Mengeksekusi looping melalui tweet yang diterima dan menampilkan informasi setiap tweet.

2. **Penanganan Tweet Normal dan Retweet**: Memeriksa apakah tweet merupakan retweet atau tweet biasa dan menangani penampilan berdasarkan jenisnya.

3. **Informasi Pengguna dan Tweet Asli**: Menampilkan informasi pengguna yang membuat tweet dan informasi tweet asli jika itu adalah retweet.

4. **Penghitungan Interaksi**: Menghitung jumlah komentar, retweet, dan like untuk setiap tweet.

5. **Tombol-tombol Interaksi**: Menampilkan tombol-tombol untuk komentar, retweet, dan like, serta menyesuaikan tampilan berdasarkan apakah pengguna telah melakukan interaksi tersebut.

6. **Tombol Opsional**: Menampilkan tombol opsional untuk tweet yang memerlukan tindakan lebih lanjut.

7. **Fitur Tooltip dan Informasi Tambahan**: Menambahkan fitur tooltip dan informasi tambahan untuk tweet dan interaksi.

8. **Popup Tweet dan Komentar**: Mempersiapkan div khusus untuk menampilkan pop-up dengan informasi lebih lanjut saat tombol komentar atau tweet di klik.

Kode ini memberikan tampilan yang kaya fitur dan responsif untuk setiap tweet dalam feed pengguna, termasuk penanganan khusus untuk retweet, like, dan komentar.
