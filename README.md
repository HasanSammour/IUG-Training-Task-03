<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Task Solution

# Laravel Task 03 – Basic Database Operations

## 📋 Objective

Build a Laravel application demonstrating essential database operations using **Model**, **Migration**, and **Seeder** for a `products` table.

---

## 🚀 How to Install & Run the Application
## 🔧 Setup for XAMPP Users

### **1. Clone & Install**
```bash
git clone https://github.com/HasanSammour/IUG-Training-Task-03.git
cd IUG-Training-Task-03
composer install
```

### **2. Configure**
```bash
cp .env.example .env
```

Edit `.env` (XAMPP defaults):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_03
DB_USERNAME=root
DB_PASSWORD=
```

### **3. Initialize Database**
```bash
php artisan key:generate
# Make sure XAMPP MySQL is running!
php artisan migrate
php artisan db:seed --class=ProductSeeder
```

### **4. Run Application**
```bash
php artisan serve
```

## 🌐 Access URLs
- **Home**: `http://localhost:8000/`
- **Products**: `http://localhost:8000/products`
- **phpMyAdmin**: `http://localhost/phpmyadmin`

---

## 📂 Project Structure

```
app/Models/Product.php              # Product Model with $fillable property
database/migrations/                # Migration files for products table
database/seeders/ProductSeeder.php  # Seeder with 5 sample products
routes/web.php                      # Routes for home and products pages
resources/views/welcome.blade.php   # Home page (task steps)
resources/views/products.blade.php  # Products display page
```

---

## 🔍 Testing with Tinker

### **Open Tinker**

```bash
php artisan tinker
```

### **Test CRUD Operations**

```php
// CREATE
Product::create(['name' => 'Tablet', 'price' => 289.00])

// READ
Product::all()
Product::find(1)
Product::where('price', '>', 500)->get()

// UPDATE
Product::find(2)->update(['price' => 399.99])

// DELETE
Product::where('name', 'Tablet')->delete()

// COUNT
Product::count()
```

---

## 📊 Database Schema

```sql
products
├── id           (primary key, auto-increment)
├── name         (string)
├── price        (decimal:6,2)
├── created_at   (timestamp)
└── updated_at   (timestamp)
```

---

## ✅ Verification Checklist

* ✔ Ensure `products` table exists
* ✔ Verify 5 sample records inserted
* ✔ Visit `/` to view task solution
* ✔ Visit `/products` to view products table
* ✔ Test CRUD operations using Tinker

---

## 📝 Notes

* `$fillable` properly used in the Product Model
* Seeder includes 5 product entries
* Two Blade views created (home & products)
* Navigation added between pages
* Clean and simple UI
