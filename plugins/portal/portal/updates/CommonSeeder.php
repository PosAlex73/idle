<?php namespace Portal\Portal\Updates;

use Faker\Factory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Portal\Portal\enums\CommonStatuses;
use Portal\Portal\enums\CourseStatuses;
use Portal\Portal\enums\CourseTypes;
use Portal\Portal\enums\TaskTypes;
use Portal\Portal\Models\Article;
use Portal\Portal\Models\Course;
use Portal\Portal\Models\CourseCategory;
use Portal\Portal\Models\Task;
use RainLab\User\Models\User;
use Seeder;

/**
 * CommonSeeder
 */
class CommonSeeder extends Seeder
{
    /**
     * run the database seeds.
     */
    public function run()
    {
        $f = Factory::create();

        foreach (range(0, 30) as $_) {
            CourseCategory::create([
                'title' => $f->realText(20),
                'image' => $f->imageUrl(),
                'status' => CommonStatuses::ACTIVE
            ]);
        }

        $categories = CourseCategory::all();

        foreach (range(0, 50) as $_) {
            Article::create([
                'title' => $f->realText(20),
                'image' => $f->imageUrl(),
                'text' => $f->realText(500),
                'status' => CommonStatuses::ACTIVE,
                'category_id' => $categories->random()->id
            ]);
        }

        foreach (range(0, 20) as $_) {
            Course::create([
                'title' => $f->realText(20),
                'text' => $f->realText(500),
                'status' => CourseStatuses::ACTIVE,
                'category_id' => $categories->random()->id,
                'type' => CourseTypes::FREE
            ]);
        }

        $courses = Course::all();

        foreach ($courses as $course) {
            foreach (range(0, 12) as $_) {
                Task::create([
                    'title' => $f->realText(20),
                    'text' => $f->realText(500),
                    'status' => CommonStatuses::ACTIVE,
                    'course_id' => $course->id,
                    'type' => TaskTypes::THEORY
                ]);
            }
        }

        foreach (range(0, 50) as $_) {
            DB::table('users')->insert([
                'name' => $f->firstName,
                'email' => $f->safeEmail,
                'password' => Hash::make('useruser')
            ]);
        }
    }
}
