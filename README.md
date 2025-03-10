# ScheDo-Web
My trial To-Do list web app
=======

ScheDo-Web is a web application designed to help users manage their tasks efficiently in the form of a to-do list. Built with modern web development tools, it provides a clean and intuitive interface for organizing tasks, setting priorities, and tracking progress.

This project is ideal for programmers looking to explore a functional task management system or contribute to an open-source web application.



## Setup Instructions for Windows

To set up ScheDo-Web on your local machine, follow these steps. This guide assumes you are using **XAMPP** (Apache and MySQL) as your local server environment.

### Prerequisites
1. **XAMPP** installed and running (Apache and MySQL).
2. **Composer** installed (for dependency management).
3. **Git** installed (for cloning the repository).



### Step 1: Clone or Download the Repository
Clone the repository to your local machine using Git:
```bash
git clone https://github.com/your-username/ScheDo-Web.git
```
Alternatively, download the repository as a ZIP file and extract it to your desired location.



### Step 2: Navigate to the Project Folder
Open Command Prompt and navigate to the project folder:
```bash
cd path\to\ScheDo-Web
```



### Step 3: Install Dependencies
Run the following command to install the required vendor components:
```bash
composer install
```



### Step 4: Set Up Environment Configuration
1. Create a `.env` file by copying the `.env.example` file:
   ```bash
   cp .env.example .env
   ```
2. Generate an application key for secure encryption and decryption:
   ```bash
   php artisan key:generate
   ```



### Step 5: Create a Database
1. Open **phpMyAdmin** (or your preferred MySQL client).
2. Create a new database for the project (e.g., `schedo_web`).



### Step 6: Configure the `.env` File
1. Open the `.env` file in a text editor.
2. Update the database configuration settings:
   ```env
   DB_DATABASE=schedo_web
   DB_USERNAME=root
   DB_PASSWORD=
   ```
   - Replace `schedo_web` with the name of the database you created.
   - If your database has a username and password, update `DB_USERNAME` and `DB_PASSWORD` accordingly.



### Step 7: Run the Application
1. Start the development server:
   ```bash
   php artisan serve
   ```
   This will start the application at `http://localhost:8000`.

2. Run the database migrations to set up the required tables:
   ```bash
   php artisan migrate
   ```



### Step 8: Access the Application
Open your browser and navigate to `http://localhost:8000`. You should now see the ScheDo-Web application running locally.



## Contributing
Contributions are welcome! If you'd like to contribute to ScheDo-Web, please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Commit your changes and push to your branch.
4. Submit a pull request with a detailed description of your changes.



## License
This project is open-source and available under the [MIT License](LICENSE).



## Support
If you encounter any issues or have questions, feel free to open an issue on the GitHub repository.



Thank you for using ScheDo-Web! Happy task management! 🚀

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
