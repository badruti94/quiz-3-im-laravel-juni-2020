<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{

    public static function get_all()
    {
        $items = DB::table('artikel')->get();
        return $items;
    }

    public static function get_by_id($id)
    {
        $item = DB::table('artikel')->where('id',$id)->first();
        return $item;
    }

    public static function save($data)
    {
        unset($data['_token']);
        $item = DB::table('artikel')->insert($data);
        return $item;
    }

    public static function update($data, $id)
    {
        $item = DB::table('artikel')->where('id',$id)
        ->update([
            'judul' => $data['judul'],
            'isi' => $data['isi'],
            'slug' => $data['slug'],
            'tag' => $data['tag']
        ]);
    }

    public static function delete($id)
    {
        $item = DB::table('artikel')->where('id',$id)->delete();
        return $item;
    }
}