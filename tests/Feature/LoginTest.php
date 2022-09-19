<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_login_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_wrong_data(){
        $response = $this->post('/login', [
            'email' => 'pastisalah@salah.com',
            'password' => 'salah'
        ]);

        $response->assertSeeText('Username atau Password Salah!');
    }

    public function test_login_admin(){
        $user = User::factory()->create([
            'username' => 'AdminDiza',
            'foto_profil' => 'images/admin.png',
            'email' => 'diza@admin.com',
            'password' => Hash::make('admindiza'),
            'status' => 'admin',
            'no_hp' => '085733447300',
            'jenis_kelamin' => 'P',
            'alamat' => 'Malang'
        ]);

        $response = $this->post('/postlogin', [
            'email' => 'diza@admin.com',
            'password' => 'admindiza'
        ]);

        $response->assertRedirect('/homeAdmin');

        $this->assertAuthenticatedAs($user);
    }
}
