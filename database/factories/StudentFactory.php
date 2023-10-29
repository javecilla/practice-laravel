<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		return [
			'user_id' => 1,
			'name' => 'Jerome Avecilla',
			'year' => '1st year',
			'course' => 'BS in Boybestfriend Execution',
			'section' => 'Di kita gaganunin',
		];
	}
}
