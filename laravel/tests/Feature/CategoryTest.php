<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]
    public function test_if_we_can_access_get_all_categories_api()
    {
        $response = $this->get('/api/categories');
        $response->assertStatus(200);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function test_can_create_category() //post
    {
        $response = $this->postJson('/api/categories', [
            'name' => 'Test Category'
        ]);

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Test Category']);

        $this->assertDatabaseHas('categories', ['name' => 'Test Category']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function test_can_get_single_category() //create
    {
        $category = Category::create(['name' => 'Single Category']);
        // Creates a category directly in the database.

        $response = $this->get("/api/categories/{$category->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Single Category']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function test_can_update_category() //patch
    {
        $category = Category::create(['name' => 'Old Name']);

        $response = $this->patchJson("/api/categories/{$category->id}", [
            'name' => 'Updated Name'
        ]);
        // Sends a PATCH request to update the category's name.

        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Updated Name']);
        // Asserts that the response contains the updated name.
        
        $this->assertDatabaseHas('categories', ['id' => $category->id, 'name' => 'Updated Name']);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function test_can_delete_category()
    {
        $category = Category::create(['name' => 'To Be Deleted']);

        $response = $this->delete("/api/categories/{$category->id}");

        $response->assertStatus(200)
            ->assertJsonFragment(['message' => 'Category deleted successfully']);

        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}