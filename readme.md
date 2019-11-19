<p align="center">
<h1>Built RESTful API with LARAVEL 6</h1>
</p>
## Requirement
1. Memiliki CLI/Command Line Interface berupa Command Prompt (CMD) atau Power Shell atau Git Bash ( terminal).
2. Memiliki Web Server (misal XAMPP) dengan PHP minimal versi 7.
3. Composer telah ter-install, cek dengan perintah composer -V melalui terminal.
4. Memiliki koneksi internet (untuk proses installasi).

## How To Use
1. Download project ini "https://github.com/ibnufaisal-27/RESTful-ibnu-faisal"
2. Letakkan dalam **htdocs** dalam server lokal masing-masing. Misal **htdocs/RESTful-ibnu-faisal**
3. Buat Database di server lokal
4. Melalui terminal, cd ke direktori **htdocs/RESTful-ibnu-faisal**.
5. Pada terminal, berikan perintah **composer install** (Perlu koneksi internet). Composer akan menginstall dependency paket dari source code tersebut hingga selesai.
6. Duplikat file **.env.example**, lalu rename menjadi **.env**
7. Edit File **<em>.env</em>** sesuaikan **database name** , **database user**, dan **database password**
8. Lakukan perintah **"php artisan migrate"** untuk memulai migrasi struktur database ke dalam server lokal
9. Lakukan perintah **"php artisan db:seed"** untuk memulai mengisikan data **dummy** ke dalam tabel
10. Aplikasi siap digunakan
11. Gunakan Postman untuk mengetes aplikasi RESTFull api ini
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
PUT | /api/images/<em>id</em>   | untuk update image
DELETE | /api/images/<em>id</em>   | untuk hapus image

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


### B. CRUD Table Products
**URL Request :**

Method | URL   | Note 
--- | ---   |  --- 
GET | /api/products   | untuk melihat semua products
GET | /api/products/<em>id</em>    | untuk melihat product berdasarkan ID tertentu
POST | /api/products   | untuk menambahkan product baru
PUT | /api/products/<em>id</em>   | untuk product image
DELETE | /api/products/<em>id</em>   | untuk product image

#### VIEW PRODUCTS
    url : http://localhsot:8000/products
    
    method : GET
    
Example : http://localhost:8000/api/products

<img src="https://i.ibb.co/SN5Q0vv/view-products.jpg" alt="view-products" border="0">

#### VIEW PRODUCTS BY ID
    url : http://localhsot:8000/products/{id}
    
    method : GET
    
Example : http://localhost:8000/api/products/1

<img src="https://i.ibb.co/H7XxYK1/view-products-by-id.jpg" alt="view-products-by-id" border="0">

#### ADD PRODUCT

    url : http://localhsot:8000/products
    
    method : POST

Pada Parameter Isikan Key dan Value berikut :

Key | Value | Ket
--- | --- | ---
name | String | -
description | String | -
enable | Boolean | 1=true, 0=false
category_id | Integer | Reference ke tabel Category
image_id | Integer | Reference ke tabel Image

Example : http://localhost:8000/api/products?name="Printer%20HP%20Laser%20Jet%206265"&description="Printer%20HP%20Laser%20Jet%206265%20All%20in%20One"&enable=1&category_id=6&image_id=1

<img src="https://i.ibb.co/svGvc3S/add-product.jpg" alt="add-product" border="0">

#### UPDATE PRODUCT
    url : http://localhsot:8000/products/{id-product-yang-mau-diupdate}
    
    method : PUT

Pada Parameter Pilih Isikan Key dan Value berikut :

Key | Value | Ket
--- | --- | ---
name | String | -
description | String | -
enable | Boolean | 1=true, 0=false
category_id | Integer | Reference ke tabel Category
image_id | Integer | Reference ke tabel Image

Example : http://localhost:8000/api/products/4?name="Printer%20HP%20Laser%20Jet%206000"&description="Printer%20HP%20Laser%20Jet%206000%20Scan%20Print%20Copy"&enable=1&category_id=6&image_id=2

<img src="https://i.ibb.co/WfXmx5z/update-product.jpg" alt="update-product" border="0">


#### DELETE PRODUCT

    url : http://localhsot:8000/products/{id-product-yang-mau-didelete}
    
    method : DELETE

Example : http://localhost:8000/api/products/4
<img src="https://i.ibb.co/89Q9jvW/delete-product.jpg" alt="delete-product" border="0">


## ERROR HANDLING
Dalam Aplikasi ini sudah dilengkapi dengan penanganan sejumlah error, antara lain :

### VIEW PRODUCT BY ID NOT FOUND

Ketika akan menampilkan product, dengan product ID nya tidak ada, maka akan muncul pesan "Product Not Found" dengan status 404

<img src="https://i.ibb.co/Z84Wdh8/product-not-found.jpg" alt="product-not-found" border="0">

### ADD PRODUCT CATEGORY ID NOT FOUND

Ketika akan menambahkan product, tetapi Category ID nya belum ada, maka akan muncul pesan "Category ID Not Found" dengan status 404

<img src="https://i.ibb.co/8Kr1mvw/add-product-category-not-found.jpg" alt="add-product-category-not-found" border="0">

### ADD PRODUCT IMAGE ID NOT FOUND

Ketika akan menambahkan product, tetapi Image ID nya belum ada, maka akan muncul pesan "Image ID Not Found" dengan status 404

<img src="https://i.ibb.co/x2NN2F4/add-product-image-not-found.jpg" alt="add-product-image-not-found" border="0">

### UPDATE PRODUCT, ID PRODUCT NOT FOUND

Ketika akan update product, tetapi product ID nya belum ada, maka akan muncul pesan "Product ID Not Found" dengan status 404

<img src="https://i.ibb.co/GcVWKxt/update-product-not-found.jpg" alt="update-product-not-found" border="0">

### DELETE PRODUCT, ID PRODUCT NOT FOUND

Ketika akan delete product, tetapi product ID nya belum ada, maka akan muncul pesan "Product ID Not Found" dengan status 404

<img src="https://i.ibb.co/zJSTZGk/delete-product-not-found.jpg" alt="delete-product-not-found" border="0">
