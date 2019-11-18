<p align="center">
<h1>Built RESTful API with LARAVEL 6</h1>
</p>

## How To Use
1. Download project ini "https://github.com/ibnufaisal-27/RESTful-ibnu-faisal"
2. Letakkan dalam **htdocs** dalam server lokal masing-masing
3. Buat Database di server lokal
4. Edit File **<em>.env</em>** sesuaikan **database name** , **database user**, dan **database password**
5. Lakukan perintah **"php artisan migrate"** untuk memulai migrasi struktur database ke dalam server lokal
6. Lakukan perintah **"php artisan db:seed"** untuk memulai mengisikan data **dummy** ke dalam tabel
7. Aplikasi siap digunakan
8. Gunakan Postman untuk mengetes aplikasi RESTFull api ini
<p><em>NB : lakukan perintah di atas secara berurutan</em></p>

## Testing With Postman
<p>
#### CRUD Table Categories
**URL Request :**
1. /categories method GET            : untuk melihat semua kategori
2. /categories/add                   : untuk menambahkan kategori baru
3. /categories/update/<em>id</em>    : untuk update kategori
4. /categories/delete/<em>id</em>    : untuk hapus kategori

1. VIEW CATEGORIES
![View Categories - Postman](https://i.ibb.co/GvWJZgK/view-categories.png)
2. 
</p>
