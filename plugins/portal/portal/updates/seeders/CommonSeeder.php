<?php namespace Portal\Portal\Updates\Seeders;

use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Portal\Portal\enums\CommonStatuses;
use Portal\Portal\Models\Article;
use Portal\Portal\Models\Category;
use Portal\Portal\Models\Course;
use Portal\Portal\Models\Task;
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
            Category::create([
                'title' => $f->text(20),
                'status' => CommonStatuses::ACTIVE
            ]);
        }

//        foreach ($categories as $category) {
//            Article::factory()->count(3)->create([
//                'category_id' => $category->id
//            ]);
//
//            Course::factory()->count(3)->create([
//                'category_id' => $category->id
//            ]);
//        }
//
//        $courses = Course::all();
//
//        foreach ($courses as $course) {
//            Task::factory()->count(12)->create([
//                'course_id' => $course->id
//            ]);
//        }

//        foreach (range(0, 50) as $item) {
//            \RainLab\User\Models\User::factory()->create([
//                'password' => Hash::make('user')
//            ]);
//        }
    }
}
