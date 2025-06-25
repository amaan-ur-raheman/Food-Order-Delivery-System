# Food Order & Delivery System

A modern, responsive web application for restaurant food ordering, built with PHP and MySQL. This project allows users to browse food categories, search for dishes, place orders, and provides an admin dashboard for managing categories, foods, and orders.

---

## Table of Contents

- [Features](#features)
- [Screenshots](#screenshots)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Usage](#usage)
- [Admin Panel](#admin-panel)
- [Database Schema](#database-schema)
- [Customization](#customization)
- [Contributing](#contributing)
- [Authors](#authors)
- [License](#license)

---

## Features

- **User-Facing Website**
  - Browse food categories and menu items
  - Search for foods by keyword
  - View food details and images
  - Place orders with delivery details
  - Responsive design for mobile and desktop

- **Admin Dashboard**
  - Secure login/logout for admins
  - Manage admins (add, update, delete, change password)
  - Manage food categories (add, update, delete, upload images)
  - Manage food items (add, update, delete, upload images)
  - View and manage customer orders
  - Dashboard statistics: categories, foods, orders, revenue

- **Security & Best Practices**
  - Session-based authentication for admin panel
  - Input validation and sanitization
  - Prepared statements for order placement
  - Image upload with auto-renaming and safe deletion

---

## Screenshots

> _Add screenshots here for homepage, food menu, order form, and admin dashboard for a more attractive README._

---

## Project Structure

```
Food-Order-System/
│
├── admin/                  # Admin dashboard and management scripts
│   ├── Partials/           # Admin partials (menu, footer, login-check)
│   ├── add-admin.php
│   ├── add-category.php
│   ├── add-food.php
│   ├── delete-admin.php
│   ├── delete-category.php
│   ├── delete-food.php
│   ├── index.php
│   ├── login.php
│   ├── logout.php
│   ├── manage-admin.php
│   ├── manage-category.php
│   ├── manage-food.php
│   ├── manage-order.php
│   ├── update-admin.php
│   ├── update-category.php
│   ├── update-food.php
│   ├── update-order.php
│   ├── update-password.php
│   └── admin.css
│
├── config/
│   └── constants.php       # Database connection and site constants
│
├── css/
│   └── style.css           # Main frontend styles
│
├── images/                 # Uploaded images (logo, food, categories)
│
├── partials-front/         # Frontend partials (menu, footer)
│
├── categories.php          # List all food categories
├── category-foods.php      # Foods in a selected category
├── food-search.php         # Search results for foods
├── foods.php               # List all foods
├── index.php               # Homepage
├── order.php               # Place an order
└── .vscode/                # VSCode configuration
```

---

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/yourusername/Food-Order-System.git
   ```

2. **Set up the database:**
   - Create a MySQL database named `food-order`.
   - Import the provided SQL schema (not included here; create tables: `admin`, `category`, `food`, `order`).

3. **Configure the project:**
   - Update database credentials in [`config/constants.php`](config/constants.php) if needed.

4. **Set up your web server:**
   - Place the project in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Ensure PHP and MySQL are running.

5. **Access the application:**
   - Open [http://localhost/Food-Order-System/](http://localhost/Food-Order-System/) in your browser.

---

## Usage

- **Homepage:** Browse categories and featured foods, search for dishes, and place orders.
- **Order:** Click "Order Now" on any food item to fill out the order form.
- **Admin Panel:** Visit [http://localhost/Food-Order-System/admin/login.php](http://localhost/Food-Order-System/admin/login.php) to log in as admin and manage the site.

---

## Admin Panel

- **Login:** Default admin credentials are set in the database (`admin` table).
- **Dashboard:** View statistics for categories, foods, orders, and revenue.
- **Manage Admins:** Add, update, delete admins, and change passwords.
- **Manage Categories:** Add, update, delete categories, and upload images.
- **Manage Foods:** Add, update, delete foods, and upload images.
- **Manage Orders:** View all orders, update their status.

---

## Database Schema

> _You need to create the following tables:_

- `admin` (id, full_name, username, password)
- `category` (id, title, image_name, featured, active)
- `food` (id, title, description, price, image_name, category_id, featured, active)
- `order` (id, food, price, qty, total, order_date, status, customer_name, customer_contact, customer_email, customer_address)

> _Refer to the SQL code in your project or export from your local database._

---

## Customization

- **Branding:** Replace `images/logo.png` with your restaurant's logo.
- **Theme:** Edit [`css/style.css`](css/style.css) and [`admin/admin.css`](admin/admin.css) for custom styles.
- **Social Links:** Update social media URLs in [`partials-front/footer.php`](partials-front/footer.php).
- **Admin Users:** Add or remove admins via the admin panel.

---

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

---

## Authors

- [Amaan Ur Raheman](#)
- [Soham Vaidya](#)
- [Abhijit Raut](#)

---

## License

This project is for educational purposes. For commercial use, please contact the authors.

---

**Enjoy managing your restaurant with the Food Order System!**