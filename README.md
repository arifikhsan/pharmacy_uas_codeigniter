# Pharmacy Codeigniter

Dibuat untuk tugas UAS.

## Alat yang dibutuhkan

1. MySQL 15.1 Distrib 10.4.14-MariaDB
2. PHP 7.3
3. Composer
4. Git

## Cara install

1. Download atau clone repository ini ke folder `htdocs` atau dimana saja.
2. Tambah _dependency_ dengan menggunakan composer.

```bash
composer update
```

3. Salin file `development.env` menjadi `.env`.
4. Buat database mysql dengan nama `codeigniter_pharmacy`.
5. Jika username dan password database bukan `root` dan `""` (kosong), sesuaikan pengaturan di `app/config/Database.php`.

## Cara menjalankan

1. Buat semua tabel dengan cara migrasi.

```bash
php spark migrate
```

2. Isi semua tabel dengan data sembarang menggunakan _seeder_ (opsional).

```bash
php spark db:seed DatabaseSeeder
```

3. Jalankan server.

```bash
php spark serve
```

4. Kunjungi http://localhost:8080/.
