<?php

namespace App;

use App\Image;
use App\places_images;
use Illuminate\Database\Eloquent\Model;

class places extends Model
{
    //
    protected $table = 'places';
    protected $fillable = [ 'title', 'title_ar', 'desc', 'desc_ar', 'image_id', 'page_id'];

    public static function rules($request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'desc' => 'required|string',
            'desc_ar' => 'required|string',
            'page_id' => 'required|integer',
        ];
        return $rules;
    }

    public static function rules_update($request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'desc' => 'required|string',
            'desc_ar' => 'required|string',
            'page_id' => 'required|integer',
            //'image_id' => 'required|integer',

        ];
        return $rules;

    }

    public static function credentials($request)
    {
        $credentials = [
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'desc_ar' => $request->desc_ar,
            'desc' => $request->desc,
            'page_id' => $request->page_id,

        ];
        if ($request->file('img') != null) {
            $credentials['image_id'] = self::file($request->file('img'));
        }
        return $credentials;
    }


    public function page()
    {
        return $this->hasOne('App\pages', 'id', 'page_id');
    }

    public static function file($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/places_images/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }

    public function image()
    {
        return $this->hasOne('App\Image', 'id', 'image_id');
    }
}
