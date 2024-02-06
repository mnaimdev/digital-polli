<?php



class ImageHelper
{
    public static function image($image, $path)
    {
        $extension = $image->getClientOriginalExtension();
        $fileName = 'media_' . uniqid() . '.' . $extension;

        $image->move(public_path($path), $fileName);

        return $fileName;
    }


    public static function removeImage($image, $path)
    {
        $deletedFrom = public_path($path . $image);
        unlink($deletedFrom);
    }



    public function truncate($text, $limit = 60)
    {
        return \Str::limit($text, $limit, '...');
    }
}
