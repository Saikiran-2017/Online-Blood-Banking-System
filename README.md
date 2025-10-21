# 🩸 Online Blood Banking System

The **Online Blood Banking System** is a simple web application built using **PHP and MySQL** to help connect blood donors and people in need of blood.
It provides a public-facing portal for donor registration and blood requests, along with an **admin dashboard** to manage all related data efficiently.

> ⚠️ This project is for learning and demonstration purposes only. It is **not intended for real-world medical use**.

---

## 🚀 Features

### 🧍 Public Users

* Register as a blood donor and create a profile
* Search for donors by blood group, country, state, city, or area
* Submit a **Blood Request** form with contact details
* View basic informational pages (Home, About, Contact)

### 🧑‍💼 Admin Panel

* Login and manage all registered donors
* Approve or deactivate donor profiles
* Manage master data (countries, states, cities, areas)
* View all donor and blood request lists
* Handle inbox messages and contact submissions

---

## 🛠 Tech Stack

| Layer        | Technology                            |
| ------------ | ------------------------------------- |
| **Frontend** | HTML5, CSS3, JavaScript, Font Awesome |
| **Backend**  | PHP (Procedural)                      |
| **Database** | MySQL / MariaDB                       |
| **Server**   | Apache (XAMPP / WAMP / LAMP)          |

---

## 📁 Project Structure

```
/css               → Stylesheets
/db                → Database SQL dump
/donor_image       → Uploaded donor photos
/js                → JavaScript files
/images            → Static images
/request_image     → Uploaded request images
admin_*.php        → Admin dashboard pages
index.php          → Home page
config.php         → Database configuration
functions.php      → Common helper functions
```

---

## ⚙️ Getting Started (Local Setup)

### 1️⃣ Prerequisites

Make sure you have:

* PHP 7 or higher
* MySQL / MariaDB
* Apache (XAMPP, WAMP, LAMP, or MAMP)

### 2️⃣ Clone the Repository

```bash
git clone https://github.com/Saikiran-2017/Online-Blood-Banking-System.git
```

### 3️⃣ Move Project to Web Root

* **XAMPP (Windows):** `C:\xampp\htdocs\Online-Blood-Banking-System`
* **WAMP:** `C:\wamp\www\Online-Blood-Banking-System`
* **LAMP (Linux):** `/var/www/html/Online-Blood-Banking-System`
* **MAMP (macOS):** `/Applications/MAMP/htdocs/Online-Blood-Banking-System`

### 4️⃣ Create Database

1. Start Apache and MySQL.
2. Open **phpMyAdmin** → Create a database named `blood_bank`.
3. Import the `.sql` file from the `/db` folder.

### 5️⃣ Update Database Configuration

Open `config.php` and update your credentials:

```php
<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";            // Default password is empty in XAMPP
$DB_NAME = "blood_bank";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
```

### 6️⃣ Run the Application

Open your browser and go to:

```
http://localhost/Online-Blood-Banking-System/
```

---

## 🔑 Admin Login

* **Admin Panel URL:** `/admin.php`
* If no admin credentials are available, you can manually create one in the database by inserting an admin record.

---

## 💡 Suggested Improvements

This project can be enhanced further with:

* Donor login and request history
* Email/SMS notifications
* Role-based user access
* Real-time inventory management
* API integration and mobile-friendly design
* Docker setup for easier deployment

---

## 🧪 Testing Tips

* Register a few donors with different blood groups.
* Search and filter donors by location.
* Submit a blood request and verify it appears in the admin panel.
* Test activation/deactivation of donor accounts.

---

## 🔒 Security Notes

If you plan to deploy this, please:

* Use prepared statements to prevent SQL injection.
* Validate and sanitize all inputs.
* Secure file uploads and limit allowed file types.
* Change default database credentials.
* Disable `display_errors` in production.

---

## 🤝 Contributing

Contributions are welcome!
If you’d like to improve this project:

1. Fork the repository
2. Create a new branch
3. Commit your changes
4. Submit a pull request

---

## 👨‍💻 Author

**Sai Kiran P**
📧 [saikiran.itcareer@gmail.com](mailto:saikiran.itcareer@gmail.com)
💻 [GitHub Profile](https://github.com/Saikiran-2017)
