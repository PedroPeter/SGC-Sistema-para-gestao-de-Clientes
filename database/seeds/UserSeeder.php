<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];


        for ( $i = 0; $i <= 200; $i++){
        $row[] = [
            'nome' => 'Pedro' . $i,
            'factura' => $i,
            'contracto' => $i,
            'celular' => '123456' . $i,
        ];
    }

        foreach ($row as $user) {
            $users[] = [
                'nome' => $user['nome'],
                'factura' => $user['factura'],
                'contracto' => $user['contracto'],
                'celular' => $user['celular'],
            ];
        }

        DB::table('users')->insert($users);
    }


}
