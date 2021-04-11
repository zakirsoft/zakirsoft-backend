<?php
namespace Modules\Blog\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Category\Entities\Category;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Blog\Entities\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = rand(1, 300);
        $image = 'https://picsum.photos/id/'.$id.'/700/600';
        $title = $this->faker->sentence($nbWords = 5, $variableNbWords = true);
        return [
            'title' => $title,
            'image' => $image,
            'description' => $this->faker->paragraph,
        ];
    }
}

