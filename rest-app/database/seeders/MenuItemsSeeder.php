<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_items')->delete();

        $jsonfile = File::get("database/Data/menu_items.json");
        $data = json_decode($jsonfile, true);
        foreach ($data as $obj) {
            MenuItem::create([
                'hashID' =>  Str::substr(Str::slug(Hash::make($obj['menuItemName'].$obj['menuItemPrice'])), 0, 32),
                'menuItemName' => $obj['menuItemName'],
                'menuItemPrice' => $obj['menuItemPrice'],
                'menuItemDescription'  => $obj['menuItemDescription'],
                'menuItemType'  => $obj['menuItemType'],
            ]);
        }
    }
}
