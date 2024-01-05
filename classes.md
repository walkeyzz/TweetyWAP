# CLASSES
# VALIDATION

# Email
Kode ini merupakan implementasi dari suatu kelas `Email` yang mengimplementasikan antarmuka (`ValidInterface`). Berikut adalah penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Email:**
   - Kelas `Email` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai yang akan divalidasi.
   - Konstruktor (`__construct`) menerima dua parameter, yaitu `$name` dan `$value`, dan menginisialisasi propertinya.

4. **Implementasi Antarmuka:**
   - Kelas `Email` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap nilai properti `$value` dengan menggunakan fungsi `filter_var` dengan opsi `FILTER_VALIDATE_EMAIL`.
   - Jika nilai tidak valid sebagai email, metode mengembalikan pesan kesalahan yang menyatakan bahwa email tidak valid.
   - Jika nilai valid, metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Email` ini dapat digunakan sebagai bagian dari suatu sistem validasi di mana objek-objek yang mengimplementasikan antarmuka ini dapat melakukan validasi berdasarkan aturan tertentu.

# Image
Kode ini adalah implementasi dari suatu kelas `Image` yang mengimplementasikan antarmuka (`ValidInterface`). Di bawah ini adalah penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Image:**
   - Kelas `Image` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai (berupa data dari file gambar) yang akan divalidasi.
   - Konstruktor (`__construct`) menerima dua parameter, yaitu `$name` dan `$value`, dan menginisialisasi propertinya.

4. **Implementasi Antarmuka:**
   - Kelas `Image` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap nilai properti `$value`, yang diasumsikan sebagai data file gambar.
   - Validasi dilakukan dengan memeriksa tipe mime dari file gambar (`$this->value['type']`) terhadap kumpulan tipe mime yang diizinkan (`$types`). Tipe mime yang diizinkan diatur dalam array `$types`.
   - Jika tipe mime tidak sesuai dengan tipe mime yang diizinkan, metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai harus merupakan gambar.
   - Jika valid, metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Image` ini dapat digunakan sebagai bagian dari suatu sistem validasi di mana objek-objek yang mengimplementasikan antarmuka ini dapat melakukan validasi khusus terkait dengan data file gambar.

# max20
Kode ini adalah implementasi dari suatu kelas `Max20` yang mengimplementasikan antarmuka (`ValidInterface`). Di bawah ini adalah penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Max20:**
   - Kelas `Max20` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai (teks) yang akan divalidasi.
   - Konstruktor (`__construct`) menerima dua parameter, yaitu `$name` dan `$value`, dan menginisialisasi propertinya.

4. **Implementasi Antarmuka:**
   - Kelas `Max20` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap panjang string (`strlen`) dari nilai properti `$value`. Jika panjangnya lebih dari 20 karakter, metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai harus kurang dari 20 karakter.
   - Jika valid, metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Max20` ini dapat digunakan sebagai bagian dari suatu sistem validasi di mana objek-objek yang mengimplementasikan antarmuka ini dapat melakukan validasi khusus terkait dengan batasan panjang string tertentu (dalam hal ini, maksimal 20 karakter).

# max100
Kode ini adalah implementasi dari kelas `Max100` yang mengimplementasikan antarmuka (`ValidInterface`). Di bawah ini adalah penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Max100:**
   - Kelas `Max100` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai (teks) yang akan divalidasi.
   - Konstruktor (`__construct`) menerima dua parameter, yaitu `$name` dan `$value`, dan menginisialisasi propertinya.

4. **Implementasi Antarmuka:**
   - Kelas `Max100` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap panjang string (`strlen`) dari nilai properti `$value`. Jika panjangnya lebih dari 100 karakter, metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai harus kurang dari 100 karakter.
   - Jika valid, metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Max100` ini dapat digunakan sebagai bagian dari suatu sistem validasi di mana objek-objek yang mengimplementasikan antarmuka ini dapat melakukan validasi khusus terkait dengan batasan panjang string tertentu (dalam hal ini, maksimal 100 karakter).

# maxtweet
Kode di atas adalah implementasi dari kelas `Maxtweet` yang mengimplementasikan antarmuka (`ValidInterface`). Berikut penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Maxtweet:**
   - Kelas `Maxtweet` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai (teks) yang akan divalidasi.
   - Konstruktor (`__construct`) menerima dua parameter, yaitu `$name` dan `$value`, dan menginisialisasi propertinya.

4. **Implementasi Antarmuka:**
   - Kelas `Maxtweet` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap panjang string (`strlen`) dari nilai properti `$value`. Jika panjangnya lebih dari 140 karakter, metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai harus tidak lebih dari 140 karakter.
   - Jika valid, metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Maxtweet` ini dapat digunakan sebagai bagian dari suatu sistem validasi di mana objek-objek yang mengimplementasikan antarmuka ini dapat melakukan validasi khusus terkait dengan batasan panjang string tertentu (dalam hal ini, maksimal 140 karakter, seperti pada karakteristik pesan singkat pada platform media sosial tertentu).
# min5
Kode di atas adalah implementasi dari kelas `Min5` yang mengimplementasikan antarmuka (`ValidInterface`). Berikut penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Min5:**
   - Kelas `Min5` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai (teks) yang akan divalidasi.
   - Konstruktor (`__construct`) menerima dua parameter, yaitu `$name` dan `$value`, dan menginisialisasi propertinya.

4. **Implementasi Antarmuka:**
   - Kelas `Min5` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap panjang string (`strlen`) dari nilai properti `$value`. Jika panjangnya kurang dari 5 karakter, metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai harus antara 5 dan 20 karakter.
   - Jika valid, metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Min5` ini dapat digunakan sebagai bagian dari suatu sistem validasi di mana objek-objek yang mengimplementasikan antarmuka ini dapat melakukan validasi khusus terkait dengan batasan panjang minimum string tertentu (dalam hal ini, minimal 5 karakter).
# Numeric
Kode di atas adalah implementasi dari kelas `Numeric` yang mengimplementasikan antarmuka (`ValidInterface`). Berikut penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Numeric:**
   - Kelas `Numeric` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai yang akan divalidasi, dengan asumsi nilai harus berupa angka.

4. **Implementasi Antarmuka:**
   - Kelas `Numeric` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap nilai properti `$value`. Jika panjang string nilai lebih dari 0 dan nilai tidak bersifat numerik, metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai harus berupa angka.
   - Jika valid, metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Numeric` ini dapat digunakan sebagai bagian dari suatu sistem validasi di mana objek-objek yang mengimplementasikan antarmuka ini dapat melakukan validasi khusus terkait dengan sifat numerik dari suatu nilai.

# Required
Kode di atas adalah implementasi dari kelas `Required` yang mengimplementasikan antarmuka (`ValidInterface`). Berikut penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Required:**
   - Kelas `Required` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai yang akan divalidasi, dengan asumsi bahwa nilai harus ada (tidak boleh kosong).

4. **Implementasi Antarmuka:**
   - Kelas `Required` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap nilai properti `$value`. Jika panjang string nilai adalah 0 (kosong), metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai tersebut diperlukan.
   - Jika valid (nilai tidak kosong), metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Required` ini dapat digunakan sebagai bagian dari sistem validasi untuk memastikan bahwa suatu nilai yang diharapkan untuk ada tidak boleh kosong.
# RequireImage
Kode di atas adalah implementasi dari kelas `RequireImage` yang mengimplementasikan antarmuka (`ValidInterface`). Berikut penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas RequireImage:**
   - Kelas `RequireImage` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai yang akan divalidasi, dengan asumsi bahwa nilai merupakan file gambar yang diunggah.

4. **Implementasi Antarmuka:**
   - Kelas `RequireImage` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap nilai properti `$value`. Validasi dilakukan berdasarkan panjang string nama file. Jika panjangnya adalah 0 (kosong), metode mengembalikan pesan kesalahan yang menyatakan bahwa file gambar diperlukan.
   - Jika valid (nama file tidak kosong), metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `RequireImage` ini dapat digunakan sebagai bagian dari sistem validasi untuk memastikan bahwa file gambar yang diharapkan untuk ada tidak boleh kosong saat validasi dilakukan.
# Str
Kode di atas adalah implementasi dari kelas `Str` yang mengimplementasikan antarmuka (`ValidInterface`). Berikut penjelasan singkatnya:

1. **Namespace:**
   - Kode ini berada dalam namespace `validation`.
   - Namespace digunakan untuk mengelompokkan kelas-kelas yang berkaitan agar tidak terjadi konflik nama.

2. **Use Statement:**
   - Menggunakan `require_once 'ValidInterface.php';` untuk mengimpor atau memasukkan definisi antarmuka (`ValidInterface`) yang diperlukan.

3. **Kelas Str:**
   - Kelas `Str` memiliki dua properti: `$name` dan `$value`. Properti ini mewakili nama dan nilai yang akan divalidasi.

4. **Implementasi Antarmuka:**
   - Kelas `Str` mengimplementasikan antarmuka `ValidInterface`. Oleh karena itu, kelas ini harus menyediakan implementasi dari semua metode yang didefinisikan dalam antarmuka tersebut.

5. **Metode `validate`:**
   - Metode `validate` melakukan validasi terhadap nilai properti `$value`. Validasi dilakukan dengan menggunakan fungsi `is_string`, yang mengembalikan `true` jika nilai tersebut adalah string dan `false` jika bukan.
   - Jika nilai bukan string, metode mengembalikan pesan kesalahan yang menyatakan bahwa nilai tersebut harus berupa string.
   - Jika valid (nilai merupakan string), metode mengembalikan string kosong, menandakan bahwa tidak ada kesalahan validasi.

Kelas `Str` ini dapat digunakan sebagai bagian dari sistem validasi untuk memastikan bahwa nilai yang diharapkan sebagai string memang benar-benar sebuah string.

# Validator
Kode di atas merupakan implementasi dari sebuah kelas `Validator` yang digunakan untuk melakukan validasi data berdasarkan aturan-aturan tertentu. Berikut adalah penjelasan singkatnya:

1. **Namespace dan Use Statements:**
   - Kode ini berada dalam namespace `validation`.
   - Menggunakan beberapa `require_once` untuk mengimpor definisi dari beberapa kelas yang diperlukan, seperti `Max20`, `Maxtweet`, `Min5`, `Numeric`, `Str`, `Required`, `Email`, `Image`, `RequireImage`, dan `Max100`.

2. **Kelas Validator:**
   - Kelas `Validator` memiliki dua properti: `$errors` dan `$errorMessages`. Properti `$errors` digunakan untuk menyimpan kesalahan validasi yang terjadi selama proses validasi.
   - Kelas ini memiliki metode `makeValidation`, yang menerima objek yang mengimplementasikan antarmuka `ValidInterface` dan kemudian memanggil metode `validate` dari objek tersebut.

3. **Metode `rules`:**
   - Metode ini menerima nama field (`$name`), nilai field (`$value`), dan aturan validasi dalam bentuk array (`$rules`).
   - Untuk setiap aturan validasi yang diberikan, metode memanggil metode `makeValidation` untuk melakukan validasi menggunakan objek yang sesuai dengan aturan tersebut. Objek tersebut dibuat berdasarkan tipe aturan validasi yang diimplementasikan dalam kelas-kelas seperti `Required`, `Str`, `Email`, `Max20`, dan lainnya.
   - Jika validasi menghasilkan kesalahan, kesalahan tersebut disimpan dalam properti `$errors` dengan kunci yang sesuai dengan nama field.
   - Kesalahan validasi disusun dalam bentuk array untuk kemudian digunakan oleh pengguna untuk mengetahui kesalahan-kesalahan yang terjadi selama proses validasi.

Kelas `Validator` ini dapat digunakan untuk menetapkan aturan-aturan validasi untuk data dan mendapatkan laporan kesalahan validasi jika ada.

# Valid Interface
Kode di atas mendefinisikan sebuah antarmuka (interface) dengan nama `ValidInterface` di dalam namespace `validation`. Berikut adalah penjelasan singkatnya:

1. **Namespace:**
   - Kode berada dalam namespace `validation`.

2. **ValidInterface:**
   - `ValidInterface` adalah sebuah antarmuka (interface) yang mendefinisikan dua metode:
      - `__construct($name, $value)`: Metode konstruktor untuk menginisialisasi properti yang diperlukan dalam implementasi kelas-kelas yang menggunakan antarmuka ini. Parameter `$name` biasanya merujuk pada nama field atau objek yang akan divalidasi, sedangkan `$value` merujuk pada nilai field atau objek tersebut.
      - `validate()`: Metode ini harus diimplementasikan oleh kelas yang menggunakan antarmuka ini. Metode ini bertanggung jawab untuk melakukan validasi dan mengembalikan pesan kesalahan jika validasi tidak berhasil, atau string kosong jika validasi berhasil.

Antarmuka `ValidInterface` memberikan kerangka kerja untuk membuat kelas-kelas validasi yang dapat digunakan oleh sistem validasi. Setiap kelas validasi yang mengimplementasikan antarmuka ini diharapkan memiliki kemampuan untuk memvalidasi suatu nilai berdasarkan aturan validasi tertentu.

# CLASSES
# connection
Kode di atas merupakan definisi kelas `Connect` yang digunakan untuk membuat koneksi ke database MySQL menggunakan PDO (PHP Data Objects). Berikut adalah penjelasan singkatnya:

1. **Kelas Connect:**
   - Kelas ini bertujuan untuk menyediakan metode statis (`connect()`) yang digunakan untuk membuat koneksi ke database.

2. **Properti Kelas:**
   - `$servername`: Menyimpan nama server dan port database. Dalam contoh ini, disetel ke "localhost:3307". Sesuaikan dengan host dan port yang sesuai dengan konfigurasi database Anda.
   - `$db_name`: Menyimpan nama database yang akan digunakan.
   - `$username`: Menyimpan nama pengguna database (dalam contoh ini, "root").
   - `$password`: Menyimpan kata sandi pengguna database (dalam contoh ini, string kosong). Sesuaikan dengan kata sandi yang sesuai dengan konfigurasi database Anda.
   - `$pdo`: Menyimpan objek PDO yang akan digunakan untuk koneksi. Diberi modifier `protected`, sehingga dapat diakses oleh kelas turunannya.

3. **Metode Konstruktor:**
   - Ada metode konstruktor yang tidak melakukan apa-apa. Konstruktor ini mungkin ditambahkan untuk alasan tertentu, meskipun dalam contoh ini tidak memiliki implementasi.

4. **Metode Statis `connect()`:**
   - Metode ini digunakan untuk membuat koneksi ke database.
   - Mencoba membuat objek PDO untuk koneksi menggunakan informasi yang tersimpan dalam properti kelas.
   - Jika koneksi berhasil, objek PDO dikembalikan.
   - Jika terjadi kesalahan, pesan kesalahan ditampilkan.

Kelas ini bisa diwarisi (extends) dan metodenya dapat digunakan untuk membuat koneksi ke database MySQL dengan mengakses metode statis `connect()`.

# follow
Kode di atas mendefinisikan kelas `Follow` yang merupakan turunan dari kelas `User`. Berikut adalah penjelasan singkat dari metode-metode yang ada dalam kelas `Follow`:

1. **`countFollowers($user_id)`**: Metode ini digunakan untuk menghitung jumlah pengikut (followers) dari seorang pengguna berdasarkan `$user_id`. Menggunakan SQL COUNT pada tabel `follow` untuk menghitung jumlah baris dengan `following_id` yang sesuai dengan `$user_id`.

2. **`countFollowing($user_id)`**: Metode ini menghitung jumlah orang yang diikuti (following) oleh seorang pengguna berdasarkan `$user_id`. Menggunakan SQL COUNT pada tabel `follow` untuk menghitung jumlah baris dengan `follower_id` yang sesuai dengan `$user_id`.

3. **`isUserFollow($user_id, $profile_id)`**: Metode ini memeriksa apakah seorang pengguna (`$user_id`) mengikuti pengguna lain (`$profile_id`). Menggunakan SQL SELECT pada tabel `follow` dengan kriteria `follower_id` dan `following_id`.

4. **`usersFollowing($user_id)`**: Metode ini mengembalikan daftar pengguna yang diikuti oleh pengguna dengan `$user_id`. Menggunakan SQL SELECT pada tabel `follow` untuk mengambil `following_id` dengan kriteria `follower_id` yang sesuai dengan `$user_id`.

5. **`usersFollowers($user_id)`**: Metode ini mengembalikan daftar pengguna yang menjadi pengikut pengguna dengan `$user_id`. Menggunakan SQL SELECT pada tabel `follow` untuk mengambil `follower_id` dengan kriteria `following_id` yang sesuai dengan `$user_id`.

6. **`whoToFollow($user_id)`**: Metode ini memberikan rekomendasi pengguna yang bisa diikuti oleh pengguna dengan `$user_id`. Mengambil tiga pengguna acak (`ORDER BY rand() LIMIT 3`) yang bukan pengikut saat ini.

7. **`FollowsYou($profile_id, $user_id)`**: Metode ini memeriksa apakah seorang pengguna (`$user_id`) diikuti oleh pengguna lain (`$profile_id`). Menggunakan SQL SELECT pada tabel `follow` dengan kriteria `follower_id` dan `following_id`.

# image
Kode di atas mendefinisikan kelas `Image`, yang digunakan untuk mengelola upload gambar. Berikut adalah penjelasan singkat dari kelas ini:

1. **`__construct($img, $tweet = null)`**: Konstruktor kelas ini menerima parameter berupa array `$img`, yang biasanya berasal dari formulir upload file. `$tweet` adalah parameter opsional yang menentukan apakah gambar tersebut terkait dengan suatu tweet atau pengguna. Jika terkait dengan tweet, nama baru gambar akan diawali dengan "tweet-"; jika tidak, nama baru akan diawali dengan "user-". Nama baru ini disusun dengan menggabungkan "uniqid()" untuk mendapatkan ID unik dan ekstensi gambar dari nama file asli.

2. **`upload()`**: Metode ini digunakan untuk melakukan proses upload gambar. Bergantung pada nilai properti `$sign`, gambar akan dipindahkan ke direktori yang sesuai (../assets/images/tweets/ atau ../assets/images/users/).

Penting untuk diingat bahwa potongan kode ini dapat lebih optimal dan aman dengan menambahkan validasi tambahan seperti memeriksa tipe file, ukuran file, dan langkah-langkah keamanan lainnya tergantung pada kebutuhan aplikasi.

# tweet
Kode di atas mendefinisikan kelas `Tweet` yang mengelola operasi terkait tweet, termasuk pengambilan tweet, komentar, retweet, dan statistik seperti jumlah likes, retweets, dan sebagainya. Berikut adalah penjelasan singkat untuk beberapa fungsi utamanya:

1. **`tweets($user_id)`**: Mengambil daftar tweet dari pengguna dan orang-orang yang diikuti oleh pengguna.

2. **`tweetsUser($user_id)`**: Mengambil daftar tweet hanya dari pengguna tertentu.

3. **`likedtweets($user_id)`**: Mengambil daftar tweet yang disukai oleh pengguna.

4. **`mediatweets($user_id)`**: Mengambil daftar tweet yang memiliki media terlampir (gambar).

5. **`comments($tweet_id)`**: Mengambil daftar komentar untuk suatu tweet.

6. **`replies($comment_id)`**: Mengambil daftar balasan untuk suatu komentar.

7. **`istweet($tweet_id)`**: Memeriksa apakah suatu post adalah tweet (tanpa retweet).

8. **`isRetweet($tweet_id)`**: Memeriksa apakah suatu post adalah retweet.

9. **`getTimeAgo($timestamp)`**: Menghitung waktu yang telah berlalu sejak suatu timestamp hingga sekarang dalam format yang ramah.

10. **`getTrendByHash($hashtag)`**: Mengambil daftar tren berdasarkan hashtag.

11. **`getMention($mention)`**: Mengambil daftar pengguna berdasarkan mention.

12. **`HashtagExist($hash)`**: Memeriksa apakah suatu hashtag sudah ada.

13. **`addTrend($hashtag)`**: Menambahkan hashtag ke tabel tren.

14. **`gettweetLinks($tweet)`**: Mengubah tautan dan hashtag dalam tweet menjadi tautan HTML.

15. **`hashtagAndMentiontweet($tweet)`**: Mengubah hashtag dan mention dalam tweet menjadi tautan HTML.

16. **`countLikes($post_id)`**: Menghitung jumlah likes untuk suatu tweet.

17. **`counttweets($user_id)`**: Menghitung jumlah total tweet dari suatu pengguna.

18. **`countComments($post_id)`**: Menghitung jumlah komentar untuk suatu tweet.

19. **`countReplies($comment_id)`**: Menghitung jumlah balasan untuk suatu komentar.

20. **`countRetweets($tweet_id)`**: Menghitung jumlah retweet untuk suatu tweet.

21. **`unLike($user_id, $tweet_id)`**: Membatalkan like dari suatu tweet.

22. **`userLikeIt($user_id, $tweet_id)`**: Memeriksa apakah pengguna telah memberi like pada suatu tweet.

23. **`usersLiked($tweet_id)`**: Mengambil daftar pengguna yang memberi like pada suatu tweet.

24. **`userRetweeetedIt($user_id, $tweet_id)`**: Memeriksa apakah pengguna telah melakukan retweet pada suatu tweet.

25. **`usersRetweeeted($tweet_id)`**: Mengambil daftar pengguna yang melakukan retweet pada suatu tweet.

26. **`checkRetweet($user_id, $tweet_id)`**: Memeriksa apakah pengguna telah melakukan retweet pada suatu tweet.

27. **`undoRetweet($user_id, $tweet_id)`**: Membatalkan retweet yang dilakukan oleh pengguna pada suatu tweet.

28. **`retweetRealId($tweet_id, $user_id)`**: Mengambil ID post asli dari suatu retweet.

29. **`likedtweetRealId($tweet_id)`**: Mengambil ID tweet asli dari suatu tweet yang disukai.

30. **`gettweet($tweet_id)`**: Mengambil informasi lengkap tentang suatu tweet.

31. **`getComment($tweet_id)`**: Mengambil informasi lengkap tentang suatu komentar.

32. **`getRetweet($tweet_id)`**: Mengambil informasi lengkap tentang suatu retweet.

33. **`getData($id)`**: Mengambil data lengkap tentang suatu post berdasarkan ID-nya.

34. **`includeHeader($title)`**: Memasukkan header tweet untuk digunakan dalam tampilan.

# user
Kode di atas mendefinisikan kelas `User` yang berfungsi untuk mengelola operasi terkait pengguna, seperti autentikasi, pendaftaran, pembaruan profil, dan pengambilan data pengguna. Berikut adalah penjelasan singkat untuk beberapa fungsi utamanya:

1. **`checkInput($input)`**: Membersihkan dan memvalidasi input pengguna untuk mencegah serangan XSS dan SQL injection.

2. **`login($email, $password)`**: Melakukan proses autentikasi pengguna berdasarkan email dan kata sandi.

3. **`create($table, $fields)`**: Menyediakan metode umum untuk menyisipkan data baru ke dalam tabel database.

4. **`register($email, $password, $name, $username)`**: Mendaftarkan pengguna baru ke dalam sistem, termasuk pengaturan default seperti mengikuti pemilik dan membuat notifikasi.

5. **`update($table, $user_id, $fields)`**: Memperbarui informasi pengguna dalam database.

6. **`delete($table, $array)`**: Menghapus data dari tabel berdasarkan kondisi yang diberikan.

7. **`getData($id)`**: Mengambil data pengguna berdasarkan ID.

8. **`logout()`**: Keluar dari sesi pengguna.

9. **`checkEmail($email)`**: Memeriksa apakah alamat email sudah terdaftar.

10. **`checkUserName($username)`**: Memeriksa apakah nama pengguna sudah terdaftar.

11. **`checkLogIn()`**: Memeriksa apakah pengguna sudah masuk ke dalam sesi.

12. **`getIdByUsername($username)`**: Mendapatkan ID pengguna berdasarkan nama pengguna.

13. **`getUserNameById($id)`**: Mendapatkan nama pengguna berdasarkan ID.

14. **`search($search)`**: Mencari pengguna berdasarkan nama pengguna atau nama lengkap.

15. **`CountNotification($user_id)`**: Menghitung jumlah notifikasi yang belum dibaca.

16. **`notification($user_id)`**: Mengambil daftar notifikasi untuk pengguna tertentu.

17. **`updateNotifications($user_id)`**: Menandai notifikasi sebagai sudah dibaca.

Kelas ini secara umum berfungsi sebagai antarmuka untuk interaksi dengan data pengguna dalam aplikasi web.
