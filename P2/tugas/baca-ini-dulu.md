#### Untuk XAMPP
- Buat folder baru di `xampp/htdocs` dengan nama terserah (misal: P2), Masuk ke dalam folder yang baru dibuat dan buat 2 folder baru lagi dengan nama `tugas` dan `percobaan`. Tambahkan file lainnya sesuai dengan struktur dan penamaan file pada github.

#### Untuk WAMPP
- Buat folder baru di `wampp/www` dengan nama terserah (misal: P2), Masuk ke dalam folder yang baru dibuat dan buat 2 folder baru lagi dengan nama `tugas` dan `percobaan`. Tambahkan file lainnya sesuai dengan struktur dan penamaan file pada github.

### Requirement Wajib
- Sesuaikan struktur folder P2 sesuai struktur pada repository, jadi ambil semua folder dan file kecuali file `baak_pens_with_not_null_field.sql` dan file ini `baca-ini-dulu.md`. Lalu, samakan juga penamaan filenya.

### Database Requirements
- buat database baru dengan nama `baak_pens_2`
- import file `baak_pens_with_not_null_field.sql`
- ubah kode pada functions.php yang semula:
`$conn = mysqli_connect("localhost", "root", "", "baak_pens");`
menjadi,
`$conn = mysqli_connect("localhost", "root", "", "baak_pens_2");`
"root" adalah username host dan "" adalah password host. Sesuaikan dengan preferensi masing-masing.

### Untuk /percobaan
- Sesuaikan hasil percobaan dengan membuka dan menutup komentar (ctrl + /)

Hasil tugas bisa dilihat di link berikut:
[Tugas](https://rifqiraehan-db.000webhostapp.com/P2-tugas/siswa)

Link Laporan:
[Laporan](https://www.dropbox.com/scl/fo/m0i4f5ab28qjmclqya2cf/AE3tOHNjORq24w8YvMVC_Ek?rlkey=mrf19zs5c8hyne2vyrdo9fwch&dl=0)

### Referensi Belajar yang juga digunakan pada referensi tugas kali ini:
- [Youtube Playlist](https://www.youtube.com/playlist?list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6)
Tonton video dari bagian 11. PHP & MySQL s/d bagian 13. Update, atau tonton semua list videonya dan ikuti tutorialnya biar makin paham materi ini.

- [Desain Sidebar](https://www.w3schools.com/w3css/w3css_sidebar.asp#Collapsible%20Responsive%20Side%20Navigation) Desain navigasi menu berupa sidebar menggunakan model `Slide the Page Content to the Right`