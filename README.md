# Algeo02-19048

Kelompok 14, Our waifu is za best.
Anggota Kelompok :
1. 13519048 - Ariya Adinatha
2. 13519093 - Wisnu Aditya Samiadji
3. 13519143 - Hokki Suwanda


---------------------------------------------------------------------------------------------
# How to run :
0. Gunakan Operating System Linux untuk menjalankan website ini
1. Download dan install Composer ver 1.10 dari https://getcomposer.org/download/
    - Pastikan perintah "composer -v" dapat dijalankan pada terminal
2. Download dan install PHP ver 7.3 dari https://www.php.net/downloads.php
    - Pastikan perintah "php -v" dapat dijalankan pada terminal
3. Download dan install NPM ver 6.14 melalui nodejs.org/en/download/
    - Pastikan perintah "npm -v" dapat dijalankan pada terminal
4. Download dan install Mysql dan pastikan dapat berjalan
5. Install Github dan masukkan perintah "git clone https://github.com/hokkyss/Algeo02-19048.git" pada terminal
6. Masuk ke direktori Algeo02-19048 dengan cara menginput "cd Algeo02-19048" pada terminal
7. Kemudian masuk ke directory src dengan cara menginput "cd src"
8. Pada directory src, install composer dan npm dengan cara menginput
    "composer install" dan "npm install"
9. Copy file ".env.example" dan rename hasil copynya menjadi ".env"
    pada bagian database isi DB database dengan algeosearch dan ubah usernam dan password sesuai dengan user mysql di computer Anda
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=algeosearch
    DB_USERNAME=#ganti_ke_username_Anda
    DB_PASSWORD=#ganti_ke_password_Anda

10. jalankan "php artisan key:generate" pada terminal
11. Pada Mysql buat database dengan nama algeosearch
    "mysql -u #usernameAnda -p" kemudian masukkan password
    pada mysql masukkan "create database algeosearch;"
12. Pada terminal jalankan "php artisan migrate" untuk membuat table pada database
13. Untuk menjalankan server gunakan "php artisan serve"

Troubleshoot
1. Pastikan modul NLTK sudah diinstall
2. Jika script tidak berjalan, ganti /usr/bin/python3
    pada steiap pemanggilan script new Process(['/usr/bin/python3', ''. public_path() .'/script/similarity.py',"{$search}","{$post->document_title}"]);
    dengan sumber path python
3. Jika database tidak berjalan, pastikan database dengan nama algeosearch ada
4. Jika masih tidak berjalan, import Algeo02-19048/src/database/algeodb.sql ke dalam database algeosearch
5. Jika masih tetap tidak berjalan silahkan hubungi pembuat dengan id Line : aadinatha21 atau hubungi salah satu teman Anda
