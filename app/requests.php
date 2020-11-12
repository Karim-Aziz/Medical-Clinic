<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    //
    protected $table = 'requests';
    protected $fillable = ['name', 'email', 'number', 'code', 'place_id'];

    public static function rules($request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'number' => 'required|string|max:255',
            'code' => 'nullable|string|max:255',
        ]; 
        return $rules;
    }

    public static function credentials($request)
    {
        
        $credentials = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'code' => $request->code,
        ];
        return $credentials;
    }

    public function place()
    {
        return $this->hasOne('App\places', 'id', 'place_id');
    }

}
