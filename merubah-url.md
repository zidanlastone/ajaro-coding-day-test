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

3. buka xampp lalu klik tombol config milik apache
4. pilih browse APACHE
5. lalu cari file httpd-vhosts.conf yang berada di

```
C:\xampp\apache\conf\extra\httpd-vhosts.conf
```

6. tambahkan kode dibawah ke dalam file virtual host tadi

```
<VirtualHost ajaro-coding-day.test:80>
    DocumentRoot "C:/xampp/htdocs/ajaro-coding-day/public"
    ServerName ajaro-coding-day.test
    <Directory "C:/xampp/htdocs/ajaro-coding-day/">
    	Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

7. lalu edit juga host pc nya. buka notepad as admin

```
C:\Windows\System32\drivers\etc\hosts
```

8. lalu tambahkan kode di bawah ini.

```
127.0.0.1 	ajaro-coding-day.test
```

9. aplikasi bisa dibuka pada url ajaro-coding-day.test