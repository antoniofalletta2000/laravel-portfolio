<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                "nome" => "Booldog",
                "cliente" => "chi cerca qualità nel prodotto per il bene del proprio animale domestico.",
                "periodo" => "2026-06-19",
                "riassunto" => "Piattaforma e-commerce lato cliente dedicata alla vendita di accessori di qualità per cani e gatti."
            ],
            [
                "nome" => "Booroad",
                "cliente" => "Agenzia di Viaggi",
                "periodo" => "2026-05-30",
                "riassunto" => "Applicazione pensata per gli accompagnatori che gestiscono gruppi in viaggio. L'idea è semplice: avere a portata di mano tutti i contatti dei partecipanti, organizzati per viaggio, senza dover scartabellare fogli o aprire mille file diversi."
            ],
            [
                "nome" => "Boolflix",
                "cliente" => "Amanti del cinema e Serie TV",
                "periodo" => "2026-05-27",
                "riassunto" => "Sito pensato per coloro che ricercano intrattenimento mentre si condividono dei Pop Corn"
            ]
        ];

        foreach($projects as $project){
            $newProject = new Project();

            $newProject->nome = $project["nome"];
            $newProject->cliente = $project["cliente"];
            $newProject->periodo = $project["periodo"];
            $newProject->riassunto = $project["riassunto"];

            $newProject->save();
        }
    }
}
