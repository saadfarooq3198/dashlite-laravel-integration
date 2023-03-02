<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


function addEllipsis($text, $max = 30)
{
    return strlen($text) > $max ? mb_substr($text, 0, $max, "UTF-8") . "..." : $text;
}

function getFullName($user)
{
    return ucwords($user->first_name . ' ' . $user->last_name);
}

function GetUserRole($user)
{
    $userRole = $user->roles;
    return count($userRole) > 0 ? $userRole[0]->name : '';
}

function convertDateTime($timestamp, $only_date = false)
{
    if ($timestamp !== null) {
        return $only_date ? Carbon::parse($timestamp)->format('d M, Y') : Carbon::parse($timestamp)->format('d M, Y g:i A');
    }
}

function getImage($image, $isAvatar = false, $withBaseurl = false)
{
    $errorImage = $isAvatar ? url('/assets/no_avatar.png') : url('/assets/no_image.png');
    return !empty($image)  ? ($withBaseurl ?  url('/storage/' .$image) : Storage::url($image)) : $errorImage;
}

function saveResizeImage($file, $directory, $width, $type = 'jpg')
{
    if (!Storage::exists($directory)) {
        Storage::makeDirectory("$directory");
    }
    $is_preview = strpos($directory, 'previews') !== false;
    $filename = Str::random() . time() . '.' . $type;
    $path = "$directory/$filename";
    $img = \Image::make($file)->orientate()->encode($type, $is_preview ? 40 : 85)->resize($width, null, function ($constraint) {
        $constraint->aspectRatio();
        $constraint->upsize();
    });
    if ($width == $is_preview) {
        $img = $img->blur(60);
    }
    $resource = $img->stream()->detach();
    //add public
    Storage::disk('public')->put($path, $resource, 'public');
    return $path;
}

function settings($page,$key){
    $setting = \App\Models\Setting::where([
        'page' => $page,
        'key' => $key
        ])->first();
    return $setting ? $setting->value : null;
}