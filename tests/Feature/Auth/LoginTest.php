<?php

namespace Tests\Feature\Auth;

use App\Models\BackpackUser;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations;

    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/admin/login');
        $response->assertSuccessful();
        $response->assertViewIs('backpack::auth.login');
    }

    public function test_user_can_login_with_correct_credentials() {
        logger('123');
        $user = factory(BackpackUser::class)->create([
            'password' => bcrypt($password = self::PASSWD),
        ]);
        $response = $this->post('/admin/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        $response->assertRedirect('/admin/dashboard');
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_incorrect_password() {
        $user = factory(BackpackUser::class)->create([
            'password' => bcrypt(self::PASSWD),
        ]);

        $response = $this->from('/admin/login')->post('/admin/login', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);

        $response->assertRedirect('/admin/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    public function test_user_can_logout() {
        $user = factory(BackpackUser::class)->create([
            'password' => bcrypt($password = self::PASSWD),
        ]);
        $response = $this->post('/admin/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        $response->assertRedirect('/admin/dashboard');

        $response = $this->actingAs($user)->from('/admin/dashboard')->get('/admin/logout');
        $response->assertRedirect('/admin');
    }
}
