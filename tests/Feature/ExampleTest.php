<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_education_page_displays_its_guides(): void
    {
        $this->get('/edukasi')
            ->assertOk()
            ->assertSee('Memahami biaya pemasangan panel surya')
            ->assertSee('Langkah umum dari survei hingga sistem aktif')
            ->assertSee('Perawatan dan hal yang perlu diketahui')
            ->assertSee('Coba kalkulator estimasi');
    }

    public function test_the_service_estimator_explains_its_assumptions(): void
    {
        $this->get('/layanan')
            ->assertOk()
            ->assertSee('Bagaimana estimasi ini dihitung?')
            ->assertSee('1,2 kWp')
            ->assertSee('45% dari tagihan bulanan')
            ->assertSee('1,35 ton per kWp per tahun');
    }
}
