<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{

    protected $table = 'settings';
    protected $fillable = ['phone', 'email', 'location', 'logo_id', 'YouTube', 'Instegram', 'Twitter', 'Facebook'];

    public function logo()
    {
        return $this->hasOne('App\Image', 'id', 'logo_id');
    }

    public function homeLogo()
    {
        return $this->hasOne('App\Image', 'id', 'homeLogo_id');
    }

    public static function rules($request)
    {
        $rules = [
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'location' => 'required|string|max:255',
            'YouTube' => 'required|string|max:255',
            'Instegram' => 'required|string|max:255',
            'Twitter' => 'required|string|max:255',
            'Facebook' => 'required|string|max:255',

        ];
        return $rules;
    }

    public static function credentials($request)
    {

        $credentials = [
            'phone' => $request->phone,
            'email' => $request->email,
            'location' => $request->location,
            'YouTube' => $request->YouTube,
            'Instegram' => $request->Instegram,
            'Twitter' => $request->Twitter,
            'Facebook' => $request->Facebook,
        ];
        if ($request->file('logo_id') != null) {
            $credentials['logo_id'] = self::file($request->file('logo_id'));
        }

        return $credentials;
    }

    public static function file($file)
    {

        $extension = $file->getClientOriginalExtension();
        $fileName = time() . rand(11111, 99999) . '.' . $extension;
        $destinationPath = public_path() . '/img/logo/';
        $file->move($destinationPath, $fileName);
        $Image = Image::create(['name' => $fileName]);
        return $Image->id;
    }
}
