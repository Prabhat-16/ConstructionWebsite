# ConstructionWebsite

A comprehensive web application for a construction company, featuring a public-facing website and an advanced admin panel for content and service management.

## Features

### Public Website
- **Home Page:** Dynamic slider, featured services, and company introduction.
- **About Us:** Company mission, team, and service highlights.
- **Services:** Detailed listing of construction, renovation, and related services.
- **Blog:** Category-based blog with detail pages and author info.
- **Gallery:** Filterable project gallery by service type.
- **Contact:** Contact form with email and phone, stores inquiries in the database.

### Admin Panel (`admin-pro/`)
- **Dashboard:** Overview of blogs, galleries, services, and clients.
- **Blog Management:** Create, edit, view, and delete blog posts with images and categories.
- **Gallery Management:** Upload and manage project images, link to services.
- **Service Management:** Add, edit, and organize offered services.
- **Slider Management:** Manage homepage slider images and content.
- **Client & Review Management:** Manage client profiles and customer reviews.
- **Contact & Inquiry Management:** View and delete contact form submissions.
- **User Authentication:** Login/logout for admin users.
- **Advanced UI:** Includes calendar, chat, email compose, and more (see `admin-pro/main/`).

### Technology Stack
- **Backend:** PHP (procedural, MySQLi)
- **Frontend:** HTML5, CSS3, Bootstrap, jQuery, FontAwesome, Animate.css, and various JS plugins
- **Database:** MySQL (see `DB_script/form_06_02_2024.sql` for schema)

## Project Structure

- `/` — Main public website (PHP pages, assets)
- `/admin-pro/` — Admin panel (management interfaces, assets, photos)
- `/css/`, `/js/`, `/img/`, `/fonts/` — Frontend assets
- `/DB_script/` — Database schema and sample data
- `/news/` — News/blog section (alternative or legacy)

## Setup Instructions

1. **Clone or Download** the repository to your web server directory (e.g., `www/` for WAMP).
2. **Database Setup:**
   - Create a MySQL database (e.g., `form`).
   - Import the SQL script from `DB_script/form_06_02_2024.sql` using phpMyAdmin or the MySQL CLI.
3. **Configure Database Connection:**
   - Update database credentials in all PHP files that connect to MySQL (typically `connection.php` or `connect.php` in `admin-pro/`).
4. **Access the Site:**
   - Public site: `http://localhost/ConstructionWebsite/`
   - Admin panel: `http://localhost/ConstructionWebsite/admin-pro/login.php`

## Dependencies
- PHP 7.0+
- MySQL 5.7+
- Apache/Nginx web server
- [phpMyAdmin](https://www.phpmyadmin.net/) (optional, for database management)


## Credits
- Admin panel UI based on [Admin Pro by WrapPixel](https://wrappixel.com/demos/admin-templates/admin-pro/)
- Various open-source JS/CSS plugins (see `/admin-pro/assets/plugins/`)

## License
Specify your license here (e.g., MIT, proprietary, etc.).
