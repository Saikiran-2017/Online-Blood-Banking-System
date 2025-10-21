Online Blood Banking System
Here’s a **ready-to-copy** README version — formatted cleanly for GitHub and tailored for **Apache/XAMPP setup**:

---

```markdown
# 🩸 Online Blood Banking System

A simple **PHP + MySQL** web application for managing donors, blood requests, and inventory through a public portal and admin dashboard.

> ⚠️ Built for learning/demo purposes — not for real clinical use.

---

## ✨ Features

### Public Portal
- Donor registration and profile management  
- Search donors by blood group, country, state, city, and area  
- Submit a “Request Blood” form  
- Static pages: About, Contact, etc.

### Admin Dashboard
- Approve / deactivate donor accounts  
- Manage master data (Countries, States, Cities, Areas)  
- View & search donors and blood requests  
- Inbox and message management  
- CRUD screens for all key entities  

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-------------|
| **Backend** | PHP (Procedural) |
| **Database** | MySQL / MariaDB |
| **Frontend** | HTML5, CSS3, JavaScript, Font Awesome |
| **Server** | Apache (XAMPP/WAMP/LAMP) |

---

## 📂 Project Structure (Overview)

```

/css               → Stylesheets
/db                → SQL dump for schema & seed data
/donor_image       → Uploaded donor photos
/font-awesome      → Font Awesome assets
/fonts             → Web fonts
/images            → Static assets
/js                → JavaScript helpers (dynamic selects, validation)
/request_image     → Uploaded request images

index.php          → Home page
Donor_reg.php      → Donor registration
Search_Donor.php   → Donor search
request_blood.php  → Blood request form
admin_*.php        → Admin pages
config.php         → Database connection
functions.php      → Common helper functions

````

---

## 🚀 Local Setup (Apache / XAMPP)

### 1️⃣ Prerequisites
- **XAMPP** or any Apache + MySQL stack  
- **PHP 7.4+**  
- **Web browser**

### 2️⃣ Clone the Repo
```bash
git clone https://github.com/Saikiran-2017/Online-Blood-Banking-System.git
````

### 3️⃣ Move Project to Web Root

Place the folder inside your XAMPP `htdocs` directory:

```
C:\xampp\htdocs\Online-Blood-Banking-System
```

### 4️⃣ Start Apache & MySQL

Open **XAMPP Control Panel** → Start **Apache** and **MySQL**.

### 5️⃣ Create Database & Import SQL

1. Visit: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Create a new database (e.g., `blood_bank`)
3. Import the `.sql` file from `/db` folder.

### 6️⃣ Update Database Connection

Open `config.php` and edit as needed:

```php
<?php
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = ""; // default empty in XAMPP
$DB_NAME = "blood_bank";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
```

### 7️⃣ Run the Application

Open browser and go to:
👉 [http://localhost/Online-Blood-Banking-System/](http://localhost/Online-Blood-Banking-System/)

**Public Portal:** Home, Search Donor, Request Blood
**Admin Panel:** `/admin.php` (default login — create manually in DB if needed)

---

## 🧠 Admin Login Setup

If the project has no default admin, insert one manually in phpMyAdmin:

```sql
INSERT INTO admin (username, password) VALUES ('admin', 'admin123');
```

Then log in at
👉 [http://localhost/Online-Blood-Banking-System/admin.php](http://localhost/Online-Blood-Banking-System/admin.php)

---

## 🔐 Security Notes

* Change default DB credentials.
* Sanitize all user inputs (server-side).
* Use prepared statements to avoid SQL injection.
* Validate uploaded image types and sizes.
* Disable `display_errors` in production.

---

## 💡 Future Enhancements

* Donor login dashboard
* Email/SMS notifications
* Role-based access control
* Real blood inventory tracking
* PDF/CSV report exports
* Dockerized deployment

---

## 🤝 Contributing

Pull requests are welcome!

1. Fork the repo
2. Create a new branch
3. Commit with clear messages
4. Submit a PR

---

## 📄 License

Currently unlicensed — for personal or educational use only.
(You can add MIT or Apache 2.0 if you plan to open-source.)

---

### 👨‍💻 Maintainer

**Sai Kiran P**
📧 [saikiran.itcareer@gmail.com](mailto:saikiran.itcareer@gmail.com)
💻 [GitHub Profile](https://github.com/Saikiran-2017)

