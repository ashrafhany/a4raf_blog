# Ashraf's Personal Blog & Portfolio

A modern personal blog and portfolio website built with Laravel, showcasing my professional experience, projects, and blog posts.

## Project Overview

This is a personal website designed to showcase my work as a Laravel/PHP Back End Developer. The site includes:

- **Blog Section:** Articles and posts about web development, Laravel, PHP, and related technologies
- **Projects Portfolio:** Showcase of my professional and personal projects
- **Resume/CV:** My professional background, skills, and experience
- **Contact Information:** Easy ways to reach me for professional opportunities

## Features

- Responsive design for all devices
- Blog posts with categories and tags
- Project portfolio with detailed project pages
- Resume/CV presentation
- Contact information and social links
- English language interface

## Technical Stack

- **Framework:** Laravel
- **Database:** MySQL
- **Frontend:** HTML, CSS (TailwindCSS), JavaScript
- **Environment:** XAMPP (PHP, MySQL, Apache)

## Project Structure

- **Models:** Post, Project, Resume
- **Controllers:** HomeController, PostController, ProjectController, ResumeController
- **Views:** Blade templates organized by section (home, posts, projects, resume)
- **Database:** Migrations and seeders for all content types

## Installation

1. Clone the repository
```bash
git clone https://github.com/ashraf-hany/personal-blog.git
```

2. Navigate to the project directory
```bash
cd personal-blog
```

3. Install PHP dependencies
```bash
composer install
```

4. Copy the environment file and configure your database
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Run migrations and seed the database
```bash
php artisan migrate --seed
```

7. Start the development server
```bash
php artisan serve
```

## Database Seeding

The project includes seeders for:
- Blog posts
- Projects
- Resume information

To refresh all data, run:
```bash
php artisan migrate:refresh --seed
```

To run a specific seeder:
```bash
php artisan db:seed --class=PostSeeder
php artisan db:seed --class=ProjectSeeder
php artisan db:seed --class=ResumeSeeder
```

## Contact Information

- **Email:** [ashraf.hany.1720@gmail.com](mailto:ashraf.hany.1720@gmail.com)
- **LinkedIn:** [linkedin.com/in/ashraf-hany-080567247](https://www.linkedin.com/in/ashraf-hany-080567247)
- **GitHub:** [github.com/ashraf-hany](https://github.com/ashraf-hany)

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
