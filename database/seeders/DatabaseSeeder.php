<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            [
                'name' => "Documente electrica",
                'path' => "documente_electrica_manageri_clienti.docx",
            ],
            [
                'name' => "Prestare servicii",
                'path' => "contract_prestare_servicii_manageri_clienti.docx",
            ],
            [
                'name' => "Serie invertor [AFM]",
                'path' => "serie_invertor_manageri_clienti.docx",
            ],
            [
                'name' => "Proces terminare [AFM]",
                'path' => "proces_terminare_manageri_clienti.docx",
            ],
        ]);
    }
}
