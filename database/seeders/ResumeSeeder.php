<?php

namespace Database\Seeders;

use App\Models\Resume;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resume::create([
            'name' => 'ASHRAF HANY',
            'title' => 'Back End Developer (Laravel/PHP)',
            'summary' => 'I am a computer science graduate with a strong passion for web development using PHP and the Laravel framework. With 3 years of experience in databases (MySQL) and 2 years in Laravel, I am eager to contribute to a dynamic development team. My strengths include problem-solving, API development, and a keen ability to learn and adapt quickly.',
            'education' => "Mansoura University - Bachelor of Computer Science (2017-2022)\nUniversity of Engineering and Technology\n\nConsulting Of Computers And Information - Training Course of Back End Development (2020)",
            'experience' => "Software Engineer - BendariSoft (Feb 2023 - Present)\n- Developed and maintained Laravel-based back-end APIs and applications\n- Collaborated with front-end developers to integrate UI components with server-side logic\n- Implemented database schemas and optimized SQL queries\n- Integrated third-party services and APIs to enhance application functionality\n\nBack End Developer - Freelance (Jan 2022 - Feb 2023)\n- Created custom e-commerce websites using Laravel\n- Developed APIs for mobile applications and web services\n- Designed and implemented database architecture for web applications\n- Troubleshot and fixed bugs in existing systems\n\nSoftware Training - ICPC (Oct 2019 - Feb 2020)\n- Problem-solving and algorithm development training\n- Participated in competitive programming challenges\n- Enhanced skills in data structures and algorithms",
            'skills' => "Programming Languages: PHP, JavaScript, Python, HTML5, CSS3, SQL\nFrameworks & Libraries: Laravel, jQuery, AJAX, Bootstrap\nDatabases: MySQL, SQLite\nTools & Technologies: Git, GitHub, RESTful APIs, JSON, XML\nOther Skills: Object-Oriented Programming, MVC Architecture, API Development, Database Design",
            'certifications' => "- Back End Training Course - Consulting of Computers and Information (2020)\n- Web Development Training - Udemy Online Courses",
            'languages' => "- Arabic (Native)\n- English (Professional Working Proficiency)",
            'email' => 'ashrafhany283@gmail.com',
            'phone' => '+201099259725',
            'address' => 'nozha, Cairo, Egypt',
            'website' => 'https://ashraf-hany.com',
            'linkedin' => 'https://www.linkedin.com/in/ashraf-hany-080567247',
            'github' => 'https://github.com/ashraf-hany',
        ]);
    }
}
