<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Image;

class ImageModel extends Model
{
    public static function ImageUpload($data = [], $uploads = [], $path)
    {
        foreach ($uploads as $value) {
            if (request($value)) {
                $newPath = request($value)->store($path, 'public');
                Image::make(public_path("storage/{$newPath}"))->resize(300, 300)->save();
                // Merge with $data
                $data = array_merge($data, [$value => $newPath]);
            }
        }
        return $data;
    }

    public static function ImageUpdate($data = [], $uploads = [], $path)
    {
        foreach ($uploads as $key => $oldLink) {
            if (request($key)) {
                $image = 'storage/' . $oldLink;
                // dd($image);
                // file_exists($image) ? dd('yes') : dd('No');
                file_exists($image) ? unlink($image) : '';
                $newPath = request($key)->store($path, 'public');
                Image::make(public_path("storage/{$newPath}"))->resize(300, 300)->save();
                // // Merge with $data
                $data = array_merge($data, [$key => $newPath]);
            }
        }
        // dd($uploads);
        return $data;
    }

    public static function ImageDelete($uploads = [])
    {
        foreach ($uploads as $oldLink) {
            $image = 'storage/' . $oldLink;
            file_exists($image) ? unlink($image) : '';
        }
    }
}
