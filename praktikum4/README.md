## Kegiatan 1
#### Apakah kegunaan dari function fopen()? Dan jelaskan maksud dari parameter yang ada di dalam function fopen() tersebut!
Berfungsi untuk membuka file dengan parameter pertama sebagai nama atau direktori file dan parameter kedua sebagai mode. Untuk membaca menggunakan `r` yang artinya read mode
#### Apa kegunaan dari function die()?
Digunakan jika function fopen gagal maka memberikan pesan yang dapat kita sesuaikan dan menghentikan script yang sedang dijalankan
#### Apa kegunaan dari function fread()? Jelaskan maksud maksud dari parameter yang ada di dalam function fread() tersebut!
Membaca file yang berasal dari file yang sudah dibuka dengan parameter pertama adalah file dan parameter kedua adalah jumlah byte maksimum untuk dibaca
#### Apa kegunaan dari function fclose()? Bagaimana jika tidak menggunakan function ini setelah operasi file selesai?
Digunakan untuk menutup file yang sudah dibuka dengan `fopen()`. Jika tidak digunakan maka file tidak tertutup hingga script selesai dan tetap memakan memory

## Kegiatan 2
#### Jalankan script di atas, dan amati hasilnya! Apakah output yang dihasilkan sama dengan script bacafile.php? Jika sama, apa kesimpulannya? Dan jelaskan apa perbedaan cara kerja dari kedua script tersebut!
Hasilnya sama. Kesimpulannya kita bisa menggunakan `fread()` di `bacafile.php` atau cara di `bacafile2.php`. Perbedaannya pada `bacafile.php` kita membaca file dengan ukuran bytes penuh menggunakan `filesize()` jika pada `bacafile2.php` membaca file baris per baris
#### Jelaskan kegunaan dari function berikut ini
* **`feof()`** membaca hingga batas garis (line per line) hingga baris terakhir. Returns `False` jika belum berakhir, `True` jika sudah berakhir
* **`fgets()`** melakukan return terhadap garis yang sudah dibaca dari file yang sudah dibuka

## Kegiatan 3
#### Apa kegunaan dari function fwrite()?
Menulis data string pada akhir baris di file yang dibuka
#### Apa yang terjadi jika perintah fopen($namaFile, 'a') diganti dengan fopen($namaFile, 'w')?
Mode `w` adalah write mode yang akan mereplace isi file yang sudah ada sebelumnya sehingga data yang sudah ada akan hilang