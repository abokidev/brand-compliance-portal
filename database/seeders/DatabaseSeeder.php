<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Default super admin user
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@dsl.internal',
            'password' => Hash::make('changeme123'),
            'role' => 'super_admin',
            'can_publish' => true,
            'force_password_change' => true,
        ]);

        // Seed document types
        $types = [
            ['name' => 'Presentation Deck', 'slug' => 'presentation-deck'],
            ['name' => 'Proposal', 'slug' => 'proposal'],
            ['name' => 'Report', 'slug' => 'report'],
            ['name' => 'One-Pager', 'slug' => 'one-pager'],
        ];

        foreach ($types as $type) {
            DocumentType::create($type);
        }
    }
}
