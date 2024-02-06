<?php



class ImageHelper
{
    public static function image($image, $path)
    {
        $extension = $image->getClientOriginalExtension();
        $fileName = 'media_' . uniqid() . '.' . $extension;

        $image->move(public_path($path), $fileName);

        return  $path . '/' . $fileName;
    }



    public function truncate($text, $limit = 60)
    {
        return \Str::limit($text, $limit, '...');
    }
}
