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
### A. CRUD Table Categories
**URL Request :**
1. /api/categories                       : untuk melihat semua kategori  | method : GET 
2. /api/categories/add                   : untuk menambahkan kategori baru  | method : POST
3. /api/categories/update/<em>id</em>    : untuk update kategori | method : POST
4. /api/categories/delete/<em>id</em>    : untuk hapus kategori | method : POST

#### VIEW CATEGORIES
    url : http://localhsot:8000/api/categories
    
    method : GET

<img src="https://i.ibb.co/GvWJZgK/view-categories.png" alt="view-categories" border="0">

#### ADD CATEGORIES

    url : http://localhsot:8000/api/categories/add
    
    method : POST

Pada Body Pilih Isikan Key dan Value berikut :

Key | Value
--- | ---
name | String
enable | Boolean

<img src="https://i.ibb.co/hgJ2F6W/add-categories.png" alt="add-categories" border="0">

#### UPDATE CATEGORIES
    url : http://localhsot:8000/categories/update/{id-category-yang-mau-diupdate}
    
    method : POST

Pada Body Pilih Isikan Key dan Value berikut :

Key | Value
--- | ---
name | String
enable | Boolean

<img src="https://i.ibb.co/9h6QKP6/update-categories.png" alt="update-categories" border="0">


#### DELETE CATEGORIES

    url : http://localhsot:8000/api/categories/delete/{id-category-yang-mau-didelete}
    
    method : POST

<img src="https://i.ibb.co/Khq4bDj/delete-categories.png" alt="delete-categories" border="0">


### B. CRUD Table Images
**URL Request :**
1. /images                           : untuk melihat semua kategori  | method : GET 
2. /images/add                       : untuk menambahkan kategori baru  | method : POST
3. /images/update/<em>id</em>        : untuk update kategori | method : POST
4. /images/delete/<em>id</em>        : untuk hapus kategori | method : POST

#### VIEW IMAGES
    url : http://localhsot:8000/categories
    
    method : GET

<img src="https://i.ibb.co/GvWJZgK/view-categories.png" alt="view-categories" border="0">

#### ADD IMAGES

    url : http://localhsot:8000/categories/add
    
    method : POST

Pada Body Pilih Isikan Key dan Value berikut :

Key | Value
--- | ---
name | String
enable | Boolean

<img src="https://i.ibb.co/hgJ2F6W/add-categories.png" alt="add-categories" border="0">

#### UPDATE IMAGES
    url : http://localhsot:8000/categories/update/{id-category-yang-mau-diupdate}
    
    method : POST

Pada Body Pilih Isikan Key dan Value berikut :

Key | Value
--- | ---
name | String
enable | Boolean

<img src="https://i.ibb.co/9h6QKP6/update-categories.png" alt="update-categories" border="0">


#### DELETE IMAGES

    url : http://localhsot:8000/categories/delete/{id-category-yang-mau-didelete}
    
    method : POST

<img src="https://i.ibb.co/Khq4bDj/delete-categories.png" alt="delete-categories" border="0">
