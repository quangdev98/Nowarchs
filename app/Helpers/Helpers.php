<?php
/** Created by quangdev */

namespace App\Helpers;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class Helpers
{

    public static function Slug($string){
        $slug = Str::slug($string,'-');
        return $slug;
    }

    public static function FormatDate($date)
    {
        return Carbon::create($date)->toFormattedDateString();
    }

    // create image
    public static function HandleStoreImage($imageName, $url)
	{
		if (!is_null($imageName))
		{
			$imageService = 'IMAGE-'.$url.time().'-'.$imageName->getClientOriginalName();
            $imageName->move(public_path('uploads/'.$url),$imageService);
            return $urlImage = '/uploads/'.$url.'/'.$imageService;
		}
        return $imageDefault = 'manager/images/user_default.png';
	}

    // update image
	public static function HandleUploadedImage($imageName, $table, $url, $id)
	{
		$img = DB::table($table)->where('id','=', $id)->first();
 		$imageOld = $img->images;
        //  dd(!is_null($imageName));
 		if (!is_null($imageName))
		{
			$imageService = 'IMAGE-'.$url.time().'-'.$imageName->getClientOriginalName();
            $imageName->move(public_path('uploads/'.$url),$imageService);
 			if(!empty($imageOld) && file_exists(public_path().$imageOld)){
                unlink(public_path().$imageOld);
            }
            return '/uploads/'.$url.'/'.$imageService;
		} else{
 			return $imageOld;
 		}
	}

    // delete image
	public static function HandleDeleteImage($table,$url, $id)
	{
        try {
            $img = DB::table($table)->where('id','=', $id)->first();
            $imageOld = $img->images;
            if(!empty($imageOld) && file_exists(public_path().$imageOld)){
               unlink(public_path().$imageOld);
               return true;
            }
        } catch (\Exception $e) {
            return false;
        }
	}
}
