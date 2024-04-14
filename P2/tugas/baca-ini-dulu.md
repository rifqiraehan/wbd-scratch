
### Requirement Wajib
- Sesuaikan struktur folder P2 sesuai struktur pada repository, jadi ambil semua folder dan file kecuali file `baak_pens_with_not_null_field.sql` dan file ini `baca-ini-dulu.md`

### Database Requirements
- buat database baru dengan nama `baak_pens_2`
- import file `baak_pens_with_not_null_field.sql`
- ubah kode pada functions.php yang semula:
`$conn = mysqli_connect("localhost", "root", "", "baak_pens");`
menjadi,
`$conn = mysqli_connect("localhost", "root", "", "baak_pens_2");`
"root" adalah username host dan "" adalah password host. Sesuaikan dengan preferensi masing-masing.
