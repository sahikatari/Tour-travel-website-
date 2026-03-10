# Tours and Travel Website (Database-Driven Web Application)

A dynamic **Tours and Travel website** that allows users to browse tour packages and submit inquiries for bookings.  
The application is deployed on an **Ubuntu server using the Nginx web server** and connected to a **MySQL database** to manage inquiry data.

---

## 📌 Project Overview

This project demonstrates how to build and deploy a **database-driven web application** using HTML, CSS, PHP, and MySQL.  
Users can explore travel packages and submit inquiry forms that are stored in the database for further processing.

---

## 🚀 Features

- Dynamic travel website with multiple pages
- Tour package browsing interface
- User inquiry form for booking requests
- Data storage using MySQL database
- Responsive frontend design
- Deployment on Ubuntu with Nginx web server

---

## 🛠️ Technologies Used

- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL  
- **Server:** Nginx  
- **Operating System:** Ubuntu Linux  

---
## 📂 Project Structure

```
travel-website/
│
├── index.html           # Home page
├── about.html           # About page
├── package.html         # Tour packages page
├── book.html            # Booking form page
├── payment.html         # Payment page
├── contact.html         # Contact page
├── enquire-submit.php   # Handles form submission
└── database/
    └── travel_agency.sql   # Database schema
```



## ⚙️ Setup Instructions

### 1️⃣ Install Required Packages

```bash
sudo apt update
sudo apt install nginx mysql-server php-fpm php-mysql
```

### 2️⃣ Create Database
Login to MySQL:

```bash
CREATE USER 'traveluser'@'localhost' IDENTIFIED BY 'Travel@123';
```
Grant Privileges:
```bash
GRANT ALL PRIVILEGES ON travel_agency.* TO 'traveluser'@'localhost';
```
Flush Privileges:
```bash
FLUSH PRIVILEGES;

```sql
CREATE DATABASE travel_agency;
USE travel_agency;
exit

mysql -u traveluser -p(Travel@123 is pass)
USE travel_agency;

CREATE TABLE bookings (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
phone VARCHAR(20),
destination VARCHAR(100),
travel_date DATE,
persons INT,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE payments (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
amount INT,
payment_method VARCHAR(50),
card_number VARCHAR(50),
expiry VARCHAR(10),
cvv VARCHAR(10),
payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE inquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100),
         email VARCHAR(100),
         phone VARCHAR(15),
        destination VARCHAR(100),
         message TEXT,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );

## ⚙️ Nginx Configuration

The website is deployed on an Ubuntu server using the Nginx web server.  
PHP processing is enabled through **PHP-FPM** by modifying the default Nginx configuration file.

Project files are placed inside:

```
/var/www/html
```
Configuration file edited:

```
sudo nano /etc/nginx/sites-enabled/default
```

### Nginx PHP Configuration

![Nginx PHP Configuration](screenshots/nginx-config.png)

This configuration enables Nginx to process `.php` files using **FastCGI (PHP-FPM)**.

---
Restart Nginx:

```bash
sudo systemctl restart nginx
```
---
### 4️⃣ Access the Website

Open in browser:

```
http://your-server-ip
```
---
## 🎯 Learning Outcomes

- Building a database-driven web application
- Connecting PHP with MySQL
- Deploying a website on Ubuntu using Nginx
- Handling user input through forms

---

```






