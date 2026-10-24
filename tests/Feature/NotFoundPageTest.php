<?php

namespace Tests\Feature;

use Tests\TestCase;

class NotFoundPageTest extends TestCase
{
    public function test_unknown_pages_show_the_custom_not_found_page(): void
    {
        $response = $this->get('/halaman-yang-tidak-ada');

        $response->assertNotFound()
            ->assertSee('Halaman ini tidak ditemukan')
            ->assertSee('Kembali ke Beranda')
            ->assertSee('Jelajahi Layanan')
            ->assertSee('Hubungi tim kami');
    }

    public function test_unknown_service_slugs_show_the_custom_not_found_page(): void
    {
        $response = $this->get('/layanan/layanan-yang-tidak-ada');

        $response->assertNotFound()
            ->assertSee('Halaman ini tidak ditemukan');
    }
}
