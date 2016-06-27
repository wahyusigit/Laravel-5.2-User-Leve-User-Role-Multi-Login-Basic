<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	DB::table('roles')->insert([
            ['nama_role'=>'admin'],
            ['nama_role'=>'kepalasekolah'],
            ['nama_role'=>'guru'],
            ['nama_role'=>'siswa']
            ]);

        $id_role_admin = DB::table('roles')->where('nama_role','=','admin')->first();
        $id_role_kepalasekolah = DB::table('roles')->where('nama_role','=','kepalasekolah')->first();
        $id_role_guru = DB::table('roles')->where('nama_role','=','guru')->first();
        $id_role_siswa = DB::table('roles')->where('nama_role','=','siswa')->first();

        DB::table('users')->insert([
            [   'name'=>'admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'id_role'=>$id_role_admin->id,
                'password'=>Hash::make('admin') ],

            [   'name'=>'kepalasekolah',
                'username'=>'kepalasekolah',
                'email'=>'kepalasekolah@gmail.com',
                'id_role'=>$id_role_kepalasekolah->id,
                'password'=>Hash::make('kepalasekolah') ],

            [   'name'=>'guru',
                'username'=>'guru',
                'email'=>'guru@gmail.com',
                'id_role'=>$id_role_guru->id,
                'password'=>Hash::make('guru') ],

            [   'name'=>'siswa',
                'username'=>'siswa',
                'email'=>'siswa@gmail.com',
                'id_role'=>$id_role_siswa->id,
                'password'=>Hash::make('siswa') ]
            ]);
    }
}
