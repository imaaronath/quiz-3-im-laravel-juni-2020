<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Article
{
    public static function get_all()
        {
            $items = DB::table('artikel')->get();
            return $items;
        }
        public static function save($data)
        {
            unset($data['_token']);
            $new_item = DB::table('artikel')->insert($data);
            return $new_item;
        }
        public static function find_by_id($id)
        {
            $item = DB::table('artikel')->where('id',$id)->first();
            return $item;
        }

        public static function update($id,$request)
        {
            $item = DB::table('artikel')
                        ->where('id',$id)
                        ->update(
                            [
                                'judul' => $request["judul"],
                                'isi' => $request["isi"],
                                'tag' => $request["tag"],
                                'slug'=> $request["slug"]
                            ]
                        );
            return $item;
        }
        public static function destroy($id)
        {
            $deleted = DB::table('artikel')
                            ->where('id',$id)
                            ->delete();
            return $deleted;
        }
}