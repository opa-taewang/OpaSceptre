<?php

namespace App;

use Image;
use Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    public static function ImageUpload($data = [], $uploads = [], $path)
    {
        foreach ($uploads as $value) {
            if (request($value)) {
                $newPath = request($value)->getRealPath();
                $imageUploaded = Cloudinary\Uploader::upload($newPath, array(
                    "width" => 300,
                    "height" => 300,
                    "crop" => "pad",
                    "use_filename" => false,
                    "folder" => $path . "/"
                ));
                // Merge with $data
                $data = array_merge($data, [$value => $imageUploaded['public_id']]);
            }
        }
        return $data;
    }

    public static function ImageUpdate($data = [], $uploads = [], $path)
    {
        foreach ($uploads as $key => $oldLink) {
            if (request($key)) {
                $ch = curl_init('https://res.cloudinary.com/opasceptre/image/upload/v1600627348/' . $oldLink);
                curl_exec($ch);
                curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200 ? Cloudinary\Uploader::destroy($oldLink) : '';
                $newPath = request($key)->getRealPath();
                $imageUploaded = Cloudinary\Uploader::upload($newPath, array(
                    "width" => 300,
                    "height" => 300,
                    "crop" => "pad",
                    "use_filename" => false,
                    "folder" => $path."/"
                ));
                // // Merge with $data
                $data = array_merge($data, [$key => $imageUploaded['public_id']]);
            }
        }
        // dd($uploads);
        return $data;
    }

    public static function ImageDelete($uploads = [])
    {
        foreach ($uploads as $oldLink) {
            $ch = curl_init('https://res.cloudinary.com/opasceptre/image/upload/v1600627348/'.$oldLink);
            curl_exec($ch);
            curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200 ? Cloudinary\Uploader::destroy($oldLink) : '';
        }
    }
}
