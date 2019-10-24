# Ajaro Coding Day
aplikasi ini dibuat untuk mengikuti seleksi Ajaro Coding Day yang diadakan di klaten

### Tentang aplikasi
aplikasi ini dibuat menggunakan framework laravel dan menggunakan bootstrap untuk user interface-nya
aplikasi ini hanya memiliki fitur login dan crud untuk produk

### instalasi
saya menggunakan XAMPP untuk development servernya.

*dengan asumsi xampp sudah di install*. 

langkah instalasi: 

1. masuk ke directory htdocs 

```
C:/xampp/htdocs/
```

2. clone repository pada htdocs

```
git clone https://github.com/zidanlastone/ajaro-coding-day.git
```

3. lakukan instalasi depedencies

```
composer install
```
dan
```
npm install
```

4. buat database baru dan configurasi file .env project agar sesuai yang dibutuhkan.

5. jalankan perintah migrate database
```
php artisan migrate
```

6. jalankan aplikasi dengan perintah

```
php artisan serve
```

7. buka browser dan buka url yang ditampilkan di cmd