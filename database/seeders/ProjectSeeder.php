<?php

namespace Database\Seeders;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-commerce API Platform',
                'description' => 'Developed a comprehensive RESTful API for an e-commerce platform using Laravel. This API features product catalog management, user authentication with JWT, order processing system, and payment gateway integration. Implemented a robust database design with optimized queries for high performance. The system includes extensive documentation using Swagger and comprehensive unit and integration tests.',
                'technologies' => 'Laravel,PHP,MySQL,RESTful API,JWT,Swagger',
                'start_date' => Carbon::now()->subMonths(10),
                'end_date' => Carbon::now()->subMonths(4),
                'is_featured' => true,
                'url' => 'https://github.com/ashraf-hany/e-commerce-api',
            ],
            [
                'title' => 'Task Management System',
                'description' => 'Built a task management application for team collaboration and project tracking. The system includes features like task assignments, deadline management, project hierarchies, and reporting dashboards. Implemented real-time notifications using Laravel Websockets and a responsive front-end using Bootstrap. The application also includes an administrative panel for managing users and permissions.',
                'technologies' => 'Laravel,PHP,MySQL,jQuery,AJAX,Bootstrap',
                'start_date' => Carbon::now()->subMonths(14),
                'end_date' => Carbon::now()->subMonths(8),
                'is_featured' => true,
                'url' => 'https://github.com/ashraf-hany/task-manager',
            ],
            [
                'title' => 'Educational Content Management System',
                'description' => 'Developed a content management system for educational institutions. The platform allows teachers to create courses, manage lessons, upload materials, and create assessments. Students can enroll in courses, track progress, submit assignments, and participate in discussion forums. The system includes an advanced permissions system and customizable reporting tools.',
                'technologies' => 'Laravel,PHP,MySQL,JavaScript,HTML5,CSS3',
                'start_date' => Carbon::now()->subMonths(18),
                'end_date' => Carbon::now()->subMonths(12),
                'is_featured' => false,
                'url' => 'https://github.com/ashraf-hany/education-cms',
            ],
            [
                'title' => 'API Integration Service',
                'description' => 'Designed and implemented a microservice that integrates multiple third-party APIs into a unified interface. The service handles authentication, rate limiting, data transformation, and error handling across various external services. Built with Laravel and integrated with Redis for caching to improve performance and reduce external API calls. The project includes comprehensive logging and monitoring features.',
                'technologies' => 'Laravel,PHP,Redis,API Integration,Microservices',
                'start_date' => Carbon::now()->subMonths(6),
                'end_date' => null, // Still ongoing
                'is_featured' => true,
                'url' => 'https://github.com/ashraf-hany/api-service',
            ],
            [
                'title' => 'Inventory Management System',
                'description' => 'Created a complete inventory management system for small businesses. Features include product tracking, supplier management, purchase ordering, stock alerts, and sales reporting. The system includes barcode integration, role-based access control, and a comprehensive dashboard with data visualization. Built with Laravel and MySQL with a responsive design for both desktop and mobile use.',
                'technologies' => 'Laravel,PHP,MySQL,JavaScript,Bootstrap,Chart.js',
                'start_date' => Carbon::now()->subMonths(8),
                'end_date' => Carbon::now()->subMonths(2),
                'is_featured' => false,
                'url' => 'https://github.com/ashraf-hany/inventory-system',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
