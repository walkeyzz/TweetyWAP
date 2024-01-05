# AJAX
# Comment
Kode ini adalah bagian dari suatu fitur pada sebuah situs web sosial (sepertinya mirip dengan Twitter) yang memungkinkan pengguna untuk memberikan tanggapan (comment) dan balasan (reply) terhadap postingan atau komentar orang lain. Berikut penjelasan singkatnya:

1. **Commenting:**
   - Jika ada data post yang dikirim melalui `$_POST['qoute']`, maka proses comment dimulai.
   - Data comment diproses, kemudian disimpan di database dengan menggunakan metode `User::create('comments', $data)`.
   - Jika comment berhasil disimpan, notifikasi dibuat dan disimpan menggunakan metode `tweet::create('notifications', $data_notify)`.
   - Notifikasi tersebut mungkin memberi tahu pengguna lain bahwa ada komentar baru.
   - Sebagai respons, comment tersebut ditampilkan di halaman dengan menggunakan HTML.

2. **Replying:**
   - Jika ada data post yang dikirim melalui `$_POST['reply']`, maka proses reply dimulai.
   - Data reply diproses, kemudian disimpan di database menggunakan metode `User::create('replies', $data)`.
   - Jika reply berhasil disimpan, notifikasi dibuat dan disimpan menggunakan metode `tweet::create('notifications', $data_notify)`.
   - Notifikasi tersebut mungkin memberi tahu pengguna lain bahwa ada balasan baru.
   - Sebagai respons, reply tersebut ditampilkan di halaman dengan menggunakan HTML.

3. **Displaying Replies:**
   - Jika ada data post yang dikirim melalui `$_POST['showPopup']`, maka tampilkan popup untuk melihat detail tweet atau quote yang direply.
   - HTML dihasilkan untuk menampilkan informasi tweet atau quote yang direply dan juga memberikan opsi untuk membuat comment atau reply.

4. **Displaying Comment Replies:**
   - Jika ada data post yang dikirim melalui `$_POST['showReply']`, maka tampilkan popup untuk melihat detail comment yang direply.
   - HTML dihasilkan untuk menampilkan informasi comment yang direply dan memberikan opsi untuk membuat reply.

# Follow
Kode ini terkait dengan fitur mengikuti (follow) dan berhenti mengikuti (unfollow) pengguna dalam sistem sosial media. Berikut adalah penjelasan singkatnya:

1. **Follow:**
   - Jika ada data post yang dikirim melalui `$_POST['follow']`, maka proses penggunaan fitur follow dimulai.
   - Data follower dan following diproses dan disimpan di database menggunakan metode `Follow::create('follow', $data)`.
   - Selain itu, notifikasi dibuat dan disimpan menggunakan metode `tweet::create('notifications', $data_notify)`.
   - Notifikasi tersebut mungkin memberi tahu pengguna lain bahwa seseorang telah mengikuti mereka.
   - Sebagai respons, jumlah pengikut yang dimiliki oleh pengguna yang diikuti diberikan sebagai hasil dan mungkin digunakan untuk memperbarui tampilan pengguna.

2. **Unfollow:**
   - Jika ada data post yang dikirim melalui `$_POST['unfollow']`, maka proses penggunaan fitur unfollow dimulai.
   - Data follower dan following diproses dan dihapus dari database menggunakan metode `Follow::delete('follow', $condition)`.
   - Selain itu, notifikasi yang berkaitan dengan follow juga dihapus menggunakan metode `tweet::delete('notifications', $data)`.
   - Sebagai respons, jumlah pengikut yang dimiliki oleh pengguna yang diikuti diberikan sebagai hasil dan mungkin digunakan untuk memperbarui tampilan pengguna.

Catatan:
- Kode ini menggunakan fungsi-fungsi dari suatu framework atau sistem yang tidak tercantum di potongan kode yang Anda berikan (seperti `Follow::create`, `tweet::delete`, dll.), jadi pastikan bahwa implementasinya sesuai dengan struktur dan fungsionalitas dari sistem tersebut.
- Penanganan notifikasi dan pembaruan jumlah pengikut setelah follow/unfollow memberikan informasi interaktif pada antarmuka pengguna untuk memberikan umpan balik instan.

# GetHastag
Kode ini terkait dengan pencarian dan tampilan hasil pencarian hashtag atau mention pada suatu situs web atau aplikasi media sosial. Berikut adalah penjelasan singkatnya:

1. **Pencarian Hashtag:**
   - Jika ada data post yang dikirim melalui `$_POST['hashtag']`, maka proses pencarian hashtag dimulai.
   - Hashtag yang dimasukkan oleh pengguna diproses dan dicari dalam database dengan menggunakan metode `tweet::getTrendByHash($trend)`.
   - Hasil pencarian hashtag ditampilkan sebagai daftar item dalam elemen `<li>`. Setiap hasil hashtag disertakan dengan tautan dan ditampilkan di antarmuka pengguna.

2. **Pencarian Mention:**
   - Jika ada data post yang dikirim melalui `$_POST['hashtag']`, maka proses pencarian mention dimulai.
   - Mention yang dimasukkan oleh pengguna diproses dan dicari dalam database dengan menggunakan metode `tweet::getMention($mention)`.
   - Hasil pencarian mention ditampilkan sebagai daftar item dalam elemen `<li>`. Setiap hasil mention disertakan dengan gambar profil pengguna, nama, dan username, dan ditampilkan di antarmuka pengguna.

Catatan:
- Fungsi-fungsi seperti `User::checkInput` dan `tweet::getTrendByHash` adalah bagian dari suatu framework atau sistem yang tidak tercantum di potongan kode yang Anda berikan, jadi pastikan implementasinya sesuai dengan struktur dan fungsionalitas dari sistem tersebut.
- Kode ini menghasilkan HTML yang mewakili hasil pencarian dan kemudian dapat digunakan untuk memperbarui tampilan pada halaman pencarian secara dinamis.

# Like
Kode ini terkait dengan sistem like pada suatu situs web atau aplikasi media sosial. Berikut adalah penjelasan singkatnya:

1. **Like:**
   - Jika ada data post yang dikirim melalui `$_POST['like']`, maka proses like dimulai.
   - Data like (user_id dan tweet_id) diproses dan disimpan di database menggunakan metode `User::create('likes', $data)`.
   - Jika like berhasil disimpan, notifikasi dibuat dan disimpan menggunakan metode `tweet::create('notifications', $data_notify)`.
   - Notifikasi tersebut mungkin memberi tahu pemilik tweet bahwa seseorang menyukai tweet mereka.
   - Sebagai respons, jumlah total like pada tweet tersebut diambil dan ditampilkan.

2. **Unlike:**
   - Jika ada data post yang dikirim melalui `$_POST['unlike']`, maka proses unlike dimulai.
   - Data unlike (user_id dan tweet_id) diproses dan dihapus dari database menggunakan metode `tweet::unLike($user_id, $tweet_id)`.
   - Jika unlike berhasil, notifikasi terkait like juga dihapus menggunakan metode `tweet::delete('notifications', $data)`.
   - Sebagai respons, jumlah total like pada tweet tersebut diambil dan ditampilkan.

3. **Upload Image:**
   - Jika ada data post yang dikirim melalui `$_POST['file']`, maka proses upload gambar dimulai.
   - Metode `uploadImage` dari objek `$getFromT` (yang tidak terlihat dalam potongan kode) dipanggil untuk mengelola proses pengunggahan gambar.

Catatan:
- Kode ini menggunakan fungsi-fungsi dan metode-metode dari suatu framework atau sistem yang tidak tercantum di potongan kode yang Anda berikan (seperti `User::create`, `tweet::create`, `tweet::delete`, dll.), jadi pastikan bahwa implementasinya sesuai dengan struktur dan fungsionalitas dari sistem tersebut.
- Tag backtick (``) pada `echo` digunakan untuk menampilkan hasil evaluasi ekspresi PHP dalam string.

# Retweet
Kode ini berkaitan dengan pop-up untuk mengutip (quote) suatu tweet. Berikut adalah penjelasan singkatnya:

1. **Inisialisasi dan Pengecekan:**
   - Mendapatkan user ID dari sesi dan menetapkan zona waktu.
   - Jika ada data post yang dikirim melalui `$_POST['qoute']`, maka proses pengutipan dimulai.
   - Data yang diperlukan seperti ID tweet, ID pengguna, dan komentar diambil dari `$_POST`.
   - Pengecekan dan manipulasi dilakukan terkait dengan jenis pengutipan (normal, quote, atau quote dari quote).

2. **Notifikasi:**
   - Mengecek ID pengguna yang akan diutip dan membuat data notifikasi jika diutip oleh pengguna yang berbeda.

3. **Penanganan Retweet:**
   - Memeriksa apakah tweet telah di-retweet sebelumnya oleh pengguna saat mengutip.
   - Jika tidak ada retweet sebelumnya, membuat entri retweet baru dan menangani notifikasi sesuai.

4. **Pembuatan Post Baru:**
   - Membuat entri baru dalam tabel `posts` untuk tweet yang diutip.
   - Mengecek apakah ada komentar yang ditambahkan. Jika ada, menyimpan komentar sebagai bagian dari retweet.

5. **Penanganan Quote:**
   - Jika tweet yang diutip adalah quote, menyesuaikan data retweet sesuai dengan jenis quote yang diberikan.
   - Jika quote dari quote, menangani pengambilan data dari tweet yang di-quote.

6. **Penanganan Tampilan Pop-up:**
   - Menyiapkan data untuk ditampilkan dalam pop-up termasuk informasi pengguna, waktu, dan isi tweet.
   - Menyiapkan formulir input untuk komentar pengguna.

7. **Tampilan dan Respons:**
   - Membuat tampilan pop-up dengan tombol untuk mengutip dan menampilkan data tweet yang diutip.
   - Memberikan respons dalam HTML yang mencakup jumlah retweet dari tweet yang diutip.

8. **Pengecekan Retweet:**
   - Memeriksa apakah tweet tersebut telah di-retweet sebelumnya oleh pengguna yang sedang menggunakan pop-up.

9. **Tombol Quote dan Tutup:**
   - Menambahkan tombol untuk mengutip tweet dan menutup pop-up.

10. **Tampilan dan Penanganan Quote Berlanjut:**
   - Menampilkan data tweet yang di-quote, termasuk informasi pengguna dan isi tweet.
   - Menambahkan tombol untuk mengutip dan menampilkan jumlah retweet.

Kode ini mencakup penanganan situasi yang berbeda terkait dengan retweet dan quote, serta menyediakan antarmuka pengguna untuk mengutip tweet.

# Search
Kode ini menangani pencarian pengguna pada suatu platform atau situs web. Berikut adalah penjelasan singkatnya:

1. **Pengecekan Pencarian:**
   - Memeriksa apakah ada data pencarian yang dikirim melalui `$_POST['search']`.
   - Jika ada, melakukan pembersihan input pencarian menggunakan fungsi `User::checkInput()`.

2. **Pencarian Pengguna:**
   - Menggunakan fungsi `User::search($search)` untuk mencari pengguna berdasarkan input pencarian.
   - Menyimpan hasil pencarian dalam variabel `$result`.

3. **Menampilkan Hasil Pencarian:**
   - Jika hasil pencarian tidak kosong (`!empty($result)`), melakukan iterasi melalui hasil dan menampilkan informasi pengguna.
   - Menampilkan gambar profil, nama, dan username pengguna.
   - Menyertakan tautan ke profil pengguna dengan menggunakan `BASE_URL` dan username.

4. **Penanganan Tampilan:**
   - Menampilkan hasil pencarian dalam daftar (unordered list) dengan elemen-elemen yang berisi informasi pengguna.

5. **Format Tampilan:**
   - Masing-masing elemen daftar memiliki struktur yang mencakup gambar profil, nama pengguna dengan tautan, dan username.

6. **Struktur HTML:**
   - Menyusun elemen-elemen HTML yang sesuai dengan tampilan hasil pencarian.

Kode ini bertanggung jawab untuk menampilkan hasil pencarian pengguna dengan tampilan yang sesuai, termasuk tautan ke profil masing-masing pengguna.

# Users
Kode ini adalah bagian dari fitur pop-up pada suatu platform sosial media atau situs web. Berikut adalah penjelasan singkat:

1. **Pengecekan Parameter:**
   - Memeriksa jenis pop-up yang diminta dengan menguji `$_POST['retweetby']`, `$_POST['likeby']`, `$_POST['follower']`, atau `$_POST['following']`.
   - Memasukkan data ke variabel sesuai dengan jenis pop-up yang diminta, seperti `$users` untuk daftar pengguna.

2. **Menampilkan Pengguna:**
   - Jika pop-up terkait dengan retweet, like, followers, atau following, maka menampilkan daftar pengguna yang terkait.
   - Menggunakan metode dari kelas `tweet` dan `Follow` untuk mendapatkan informasi pengguna terkait.

3. **Tata Letak Pop-Up:**
   - Menampilkan pop-up dengan tata letak yang sesuai, termasuk judul pop-up dan tombol penutup.

4. **Menampilkan Informasi Pengguna:**
   - Iterasi melalui daftar pengguna dan menampilkan informasi seperti gambar profil, nama, username, dan tombol follow.

5. **Penanganan Tombol Follow:**
   - Menangani perubahan status follow dengan menambahkan kelas seperti `'following'` pada tombol follow sesuai dengan status pengguna yang di-follow.

6. **Penanganan Tautan Profil:**
   - Menyediakan tautan ke profil pengguna dengan menggunakan `BASE_URL` dan username.

7. **Penutup Pop-Up:**
   - Memasukkan tombol penutup untuk menutup pop-up.

8. **Variabel Tambahan:**
   - Terdapat beberapa variabel tambahan seperti `$headline` untuk judul pop-up dan `$flag` untuk memeriksa apakah pop-up harus ditampilkan.

Kode ini berfungsi untuk menampilkan daftar pengguna yang terkait dengan suatu tindakan seperti retweet, like, followers, atau following, dengan tampilan yang sesuai pada pop-up.


# CLASSES
# VALIDATION

# Email
# Image
# max20
# max100
# maxtweet
# min5
# Numeric
# Required
# RequireImage
# Str
# Validator
# Valid Interface
