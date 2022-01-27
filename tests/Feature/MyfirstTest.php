<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyfirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_get_home_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_available_only_one_news()
    {
        $id = mt_rand(1, 15);
        $response = $this->get("/news/$id");

        $response->assertStatus(200);
    }

    public function test_available_only_one_category()
    {
        $response = $this->get("/category/economy");

        $response->assertStatus(200);
    }

    public function test_asserting_a_json_category()
    {
        $data = [
            'title' => 'Политика',
            'slag' => 'politics'
        ];

        $response = $this->json('POST', '/admin/category', $data);

        $response->assertStatus(200)
            ->assertExactJson([
                'created' => 'запись прошла успешно',
            ]);
    }

    public function test_asserting_a_json_news()
    {
        $data = [
            'title' => 'Создан первый российский OLED-микродисплей',
            'description' => 'Холдинг «Росэлектроника», входящий в государственную корпорацию «Ростех», объявил о разработке первого полностью российского микродисплея на органических электролюминисцентных светодиодах (OLED).',
            'author' => '3dnews.ru',
        ];

        $response = $this->json('POST', '/admin/news', $data);

        $response->assertStatus(200)
            ->assertExactJson([
                'created' => 'запись прошла успешно',
            ]);
    }
}
