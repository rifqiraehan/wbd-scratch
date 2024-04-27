-- JANGAN IMPORT FILE SQL INI!!!

-- Memasukkan data tabel
-- jabatan id_jabatan nama_jabatan
-- 1001 Kepala Divisi
-- 1002 Manager
-- 1003 Karyawan

INSERT INTO jabatan VALUES (1001, 'Kepala Divisi');
INSERT INTO jabatan VALUES (1002, 'Manager');
INSERT INTO jabatan VALUES (1003, 'Karyawan');


-- Memasukkan data tabel divisi
-- id_divisi nama_divisi
-- 2001 Training
-- 2002 Sistem dan Jaringan
-- 2003 HRD

INSERT INTO divisi VALUES (2001, 'Training');
INSERT INTO divisi VALUES (2002, 'Sistem dan Jaringan');
INSERT INTO divisi VALUES (2003, 'HRD');
SELECT * FROM divisi;


-- Memasukkan data tabel data_pegawai
-- nik nama alamat id_jabatan id_divisi
-- 200000065 Aji Firmansyah Surabaya 1002 2003
-- 200000066 Rudi Hartono Bandung 1001 2002
-- 200000066 Aisyah Nila Semarang 1003 2001

INSERT INTO data_pegawai VALUES (200000065, 'Aji Firmansyah', 'Surabaya', 1002, 2003);
INSERT INTO data_pegawai VALUES (200000066, 'Rudi Hartono', 'Bandung', 1001, 2002);
INSERT INTO data_pegawai VALUES (200000067, 'Aisyah Nila', 'Semarang', 1003, 2001);
SELECT * FROM data_pegawai;

-- Menampilkan nik, nama, alamat, nama_jabatan (dari tabel jabatan), nama_divisi (dari tabel divisi)
SELECT data_pegawai.nik, data_pegawai.nama, data_pegawai.alamat, jabatan.nama_jabatan, divisi.nama_divisi FROM data_pegawai, jabatan, divisi WHERE data_pegawai.id_jabatan = jabatan.id_jabatan AND data_pegawai.id_divisi = divisi.id_divisi;


-- Update nama dan alamat
UPDATE data_pegawai set nama = 'Aji Irmansyah', alamat = 'Jakarta' where nik = 200000065;

-- Delete data dengan nik = 200000067
DELETE from data_pegawai where nik = 200000067;