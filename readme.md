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

Method | URL   | Note 
--- | ---   |  --- 
GET | /api/categories   | untuk melihat semua kategori
POST | /api/categories/add   | untuk menambahkan kategori baru
PUT | /api/categories/<em>id</em>   | untuk update kategori
DELETE | /api/categories/<em>id</em>   | untuk hapus kategori


#### VIEW CATEGORIES
    url : http://localhsot:8000/api/categories
    
    method : GET

<img src="https://i.ibb.co/LzyWVHF/view-categories.jpg" alt="view-categories" border="0">

#### ADD CATEGORIES

    url : http://localhsot:8000/api/categories/
    
    method : POST

Pada Parameter Isikan Key dan Value berikut :

Key | Value | Ket
--- | --- | ---
name | String | -
enable | Boolean | 1=true, 0=false

Example : http://localhost:8000/api/categories?name="Peralatan%20Jaringan"&enable=1

<img src="https://i.ibb.co/HzZGBZp/add-categories.jpg" alt="add-categories" border="0">

#### UPDATE CATEGORIES
    url : http://localhsot:8000/categories/{id-category-yang-mau-diupdate}
    
    method : PUT

Pada Parameter Isikan Key dan Value berikut :

Key | Value | Ket
--- | --- | ---
name | String | -
enable | Boolean | 1=true, 0=false

Example : http://localhost:8000/api/categories/7?name=Networking&enable=1

<img src="https://i.ibb.co/p2fXXtv/update-categories.jpg" alt="update-categories" border="0">


#### DELETE CATEGORIES

    url : http://localhsot:8000/api/categories/{id-category-yang-mau-didelete}
    
    method : DELETE

Example : http://localhost:8000/api/categories/7

<img src="https://i.ibb.co/2nkY3Jy/delete-categories.jpg" alt="delete-categories" border="0">


### B. CRUD Table Images
**URL Request :**
Method | URL   | Note 
--- | ---   |  --- 
GET | /api/images   | untuk melihat semua images
POST | /api/images   | untuk menambahkan image baru
PUT | /api/<em>id</em>   | untuk update image
DELETE | /api/<em>id</em>   | untuk hapus image

#### VIEW IMAGES
    url : http://localhsot:8000/categories
    
    method : GET
Example : http://localhost:8000/api/images

<img src="https://i.ibb.co/RNbsWkZ/view-images.jpg" alt="view-images" border="0">

#### ADD IMAGES

    url : http://localhsot:8000/categories
    
    method : POST

Pada Parameter Isikan Key dan Value berikut :

Key | Value | Ket
--- | --- | ---
name | String | -
file | String | -
enable | Boolean | 1=true, 0=false

Example : http://localhost:8000/api/images?name="Printer%20HP%20230"&file="hp_260.jpg"&enable=1
<img src="https://i.ibb.co/ncWZbKP/add-image.jpg" alt="add-image" border="0">

#### UPDATE IMAGES
    url : http://localhsot:8000/categories/{id-category-yang-mau-diupdate}
    
    method : PUT

Pada Parameter Pilih Isikan Key dan Value berikut :

Key | Value | Ket
--- | --- | ---
name | String | -
file | String | -
enable | Boolean | 1=true, 0=false

Example : http://localhost:8000/api/images/4?name="Printer%20HP%202676"&file="hp_2676.png"&enable=1

<img src="https://i.ibb.co/BwXbzt8/update-image.jpg" alt="update-image" border="0">


#### DELETE IMAGES

    url : http://localhsot:8000/categories/{id-category-yang-mau-didelete}
    
    method : DELETE

<img src="https://i.ibb.co/hsZtN0X/delete-image.jpg" alt="delete-image" border="0">
