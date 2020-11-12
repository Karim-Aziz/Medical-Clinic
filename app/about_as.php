<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about_as extends Model
{
    //
    protected $table = 'about_as';
    protected $fillable = [
        'about_company', 'mission', 'vission', 'about_company_ar', 'mission_ar', 'vission_ar'
    ];

    public static function rules($request)
    {
        $rules = [
            'about_company' => 'required',
            'mission' => 'required',
            'vission' => 'required',
            'about_company_ar' => 'required',
            'mission_ar' => 'required',
            'vission_ar' => 'required',
        ]; 
        return $rules;
    }

    public static function credentials($request)
    {
        $credentials = [
            'about_company' => $request->about_company,
            'mission' => $request->mission,
            'vission' => $request->vission,
            'about_company_ar' => $request->about_company_ar,
            'mission_ar' => $request->mission_ar,
            'vission_ar' => $request->vission_ar,
        ];
        return $credentials;
    }
}
