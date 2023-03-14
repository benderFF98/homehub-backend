<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PassportSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('oauth_clients')->updateOrInsert(['id' => '1'], [
            'id' => '1',
            'name' => 'Laravel Personal Access Client',
            'secret' => 'Gns3peXTaa8Fu7yHDMfAySYhOPZ5D9hiw4EvbYSe',
            'provider' => null,
            'redirect' => 'http://localhost',
            'personal_access_client' => 1,
            'password_client' => 0,
            'revoked' => 0,
        ]);

        DB::table('oauth_clients')->updateOrInsert(['id' => '2'], [
            'id' => '2',
            'name' => 'Laravel Password Grant Client',
            'secret' => 'eapLLXEFmZpNpPZmSbqzvhnL8t5cbcO7LZr7nbvf',
            'provider' => 'users',
            'redirect' => 'http://localhost',
            'personal_access_client' => 0,
            'password_client' => 1,
            'revoked' => 0,
        ]);
    }
}
