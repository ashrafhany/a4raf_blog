<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a user if it doesn't exist
        $user = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        // Create blog posts
        $posts = [
            [
                'title' => 'React.js Fundamentals for Beginners',
                'content' => '<p>In this article, we will explore the fundamentals of React.js, one of the most popular libraries for building interactive user interfaces.</p><h2>What is React.js?</h2><p>React is an open-source JavaScript library developed by Facebook for building user interfaces. It is based on the concept of components that make it easy to build reusable pieces of UI.</p><h2>Key Features</h2><ul><li>Virtual DOM for improved performance</li><li>Component-based architecture</li><li>Unidirectional data flow</li><li>Can be used on the server-side (Server-Side Rendering)</li></ul><p>Start your journey with React today and join the community of developers building modern web applications!</p>',
                'excerpt' => 'Learn the fundamentals of React.js and how to build interactive user interfaces with it.',
                'published' => true,
                'published_at' => Carbon::now()->subDays(5),
                'user_id' => $user->id,
            ],
            [
                'title' => 'Using Laravel and Vue.js to Build Modern Web Applications',
                'content' => '<p>In this article, we\'ll learn how to integrate Laravel with Vue.js to build modern and fast web applications.</p><h2>Why Laravel with Vue.js?</h2><p>Laravel is a PHP framework that provides a robust application structure with features like routing, authentication, and database management. Vue.js is a progressive JavaScript framework that makes it easy to build interactive user interfaces.</p><h2>Getting Started</h2><ol><li>Setting up a new Laravel project</li><li>Installing and configuring Vue.js</li><li>Creating Vue components</li><li>Connecting data between server and client</li></ol><p>Combining Laravel and Vue.js gives you the best of both worlds: a strong backend structure with a fast, interactive user interface!</p>',
                'excerpt' => 'Learn how to combine Laravel and Vue.js to build modern web applications with interactive user interfaces.',
                'published' => true,
                'published_at' => Carbon::now()->subDays(10),
                'user_id' => $user->id,
            ],
            [
                'title' => 'Best Practices for Writing Clean and Organized Code',
                'content' => '<p>In this article, we\'ll explore best practices for writing clean and organized code that is easier to maintain and extend.</p><h2>Why is Clean Code Important?</h2><p>Clean code makes collaboration between developers easier, reduces errors, facilitates adding new features, and improves application performance in the long run.</p><h2>Tips for Writing Clean Code</h2><ul><li>Use descriptive names for variables and functions</li><li>Keep functions small and focused</li><li>Avoid repetition by using the DRY (Don\'t Repeat Yourself) principle</li><li>Write helpful and clear comments</li><li>Use consistent formatting</li></ul><p>Adopting these practices will make your life as a developer easier and improve the quality of the projects you work on!</p>',
                'excerpt' => 'Learn the best practices for writing clean and organized code that is easier to maintain and extend.',
                'published' => true,
                'published_at' => Carbon::now()->subDays(15),
                'user_id' => $user->id,
            ],
            [
                'title' => 'Introduction to Backend Programming with Node.js',
                'content' => '<p>In this article, we\'ll learn about Node.js fundamentals and how to use it to develop powerful and scalable backend applications.</p><h2>What is Node.js?</h2><p>Node.js is a JavaScript runtime environment that runs on the server-side, using Google\'s V8 engine. It allows developers to use JavaScript to write server-side code.</p><h2>Node.js Features</h2><ul><li>High performance thanks to the asynchronous event model</li><li>Rich NPM library with packages and tools</li><li>Ideal for web applications and real-time APIs</li></ul><h2>Building a Simple HTTP Server</h2><pre><code>const http = require(\'http\');\nconst server = http.createServer((req, res) => {\n  res.statusCode = 200;\n  res.setHeader(\'Content-Type\', \'text/plain\');\n  res.end(\'Hello World\\n\');\n});\nserver.listen(3000, () => {\n  console.log(\'Server running on port 3000\');\n});</code></pre><p>Explore the world of Node.js and start building fast and efficient web applications today!</p>',
                'excerpt' => 'Learn about Node.js fundamentals and how to use it to develop powerful and scalable backend applications.',
                'published' => true,
                'published_at' => Carbon::now()->subDays(20),
                'user_id' => $user->id,
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
