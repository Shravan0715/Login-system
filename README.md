# Responsive Login & Registration Form with HTML, CSS, and PHP

## 📌 Project Overview
The **Responsive Login & Registration Form** is a web-based application that allows users to securely **register and log in** to a restricted area of a website. Built using **HTML, CSS, JavaScript, PHP, and MySQL**, this project focuses on **modern UI, form validation, and secure user authentication**.

## ✨ Features
- **Modern & Responsive UI**: Works across all screen sizes (desktop, tablet, and mobile).
- **User Registration Form**: Allows users to create an account and store credentials securely in a database.
- **Secure Login System**: Verifies user credentials against stored database records.
- **Show Password Toggle**: Users can view or hide their password using JavaScript.
- **Form Validation (PHP & JavaScript)**:
  - Ensures fields are not empty.
  - Validates email format.
  - Checks password length (minimum 6 characters).
- **Database-Driven Authentication**: Uses **MySQL** to store and verify user credentials securely.
- **Forgot Password Option (Future Enhancement)**: A link for password recovery.

## 🛠️ Technologies Used
- **Frontend**:
  - HTML5 (Structure)
  - CSS3 (Styling & Responsive Design)
  - JavaScript (Form Interactivity & Show Password Toggle)
- **Backend**:
  - PHP (Server-side Scripting & Form Validation)
  - MySQL (Database for Storing User Credentials)
- **Development Tools**:
  - XAMPP (Apache, MySQL, PHP, and phpMyAdmin) for local server setup
  - VS Code (Code Editor)

## 🚀 Installation Guide
### Step 1: Install XAMPP
1. Download and install [XAMPP](https://www.apachefriends.org/index.html).
2. Start **Apache** and **MySQL** from the XAMPP Control Panel.

### Step 2: Configure the Database
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`).
2. Create a new database named `user_authentication`.
3. Import the provided **SQL file** (`database.sql`) to set up the required tables.

### Step 3: Setup Project Files
1. Clone or download the project and move it to `htdocs` inside the XAMPP installation folder.
2. Open the `config.php` file and update the database credentials if necessary:
   ```php
   <?php
   $servername = "localhost";
   $username = "root"; // Default username in XAMPP
   $password = ""; // Default password is empty
   $dbname = "user_authentication";
   ?>
   ```

### Step 4: Run the Project
1. Open a browser and go to:
   ```
   http://localhost/your_project_folder/
   ```
2. Register a new user and log in to test the authentication system.

## 📂 Project Structure
```
/project-folder
│── index.php        # Login Page
│── register.php     # User Registration Page
│── home.php         # Dashboard (Restricted Page)
│── config.php       # Database Connection
│── styles.css       # CSS Styles
│── script.js        # JavaScript (Show Password)
│── database.sql     # SQL File for Database Setup
└── images/          # UI Assets (Optional)
```

## 🔐 Security Considerations
- **Password Hashing**: Use `password_hash()` to store encrypted passwords.
- **SQL Injection Prevention**: Use **prepared statements** in SQL queries.
- **Session Management**: Use PHP sessions to maintain user login state.

## 📌 Future Enhancements
- Implement **password recovery** using email verification.
- Add **session expiration** for better security.
- Improve UI with **better animations and themes**.

## 🏆 Learnings & Experience
✅ Hands-on experience with **frontend & backend development**.
✅ Built a **secure authentication system** with **PHP & MySQL**.
✅ Gained knowledge in **database management using phpMyAdmin**.
✅ Debugged and resolved **CSS file loading issues**.

## 📢 Feedback & Contributions
Feel free to fork this project, contribute, or suggest improvements. Your feedback is welcome! 🚀

---
💡 **Developed with ❤️ using HTML, CSS, PHP, JavaScript, and MySQL**

