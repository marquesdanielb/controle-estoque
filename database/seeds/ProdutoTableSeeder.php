<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)", [
            'Geladeira', 2, 5900.00, 'Side by side com gelo na porta',
        ]);

        DB::insert("INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)", [
            'Fogão', 5, 950.00, 'Painel automático e forno elétrico',
        ]);

        DB::insert("INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)", [
            'Microondas', 1, 1520.00, 'Manda SMS quando termina de esquentar',
        ]);
    }
}
