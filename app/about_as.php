<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about_as extends Model
{
    //
    protected $table = 'about_as';
    protected $fillable = [
        'hold_1',
        'hold_2',
        'hold_3',
        'hold_4',
        'hold_5',
        'hold_1_ar',
        'hold_2_ar',
        'hold_3_ar',
        'hold_4_ar',
        'hold_5_ar',
        'hold_6',
        'hold_6_ar',
    ];

    public static function rules($request)
    {
        $rules = [
            'hold_1' => 'required|string|max:255',
            'hold_2' => 'required|string|max:255',
            'hold_3' => 'required|string|max:255',
            'hold_4' => 'required|string|max:255',
            'hold_5' => 'required|string|max:255',
            'hold_6' => 'required|string|max:255',
            'hold_1_ar' => 'required|string|max:255',
            'hold_2_ar' => 'required|string|max:255',
            'hold_3_ar' => 'required|string|max:255',
            'hold_4_ar' => 'required|string|max:255',
            'hold_5_ar' => 'required|string|max:255',
            'hold_6_ar' => 'required|string|max:255',

        ];
        return $rules;
    }

    public static function credentials($request)
    {

        $credentials = [
            'hold_1'                => $request->hold_1,
            'hold_2'                => $request->hold_2,
            'hold_3'                => $request->hold_3,
            'hold_4'                => $request->hold_4,
            'hold_5'                => $request->hold_5,
            'hold_6'                => $request->hold_6,
            'hold_1_ar'             => $request->hold_1_ar,
            'hold_2_ar'             => $request->hold_2_ar,
            'hold_3_ar'             => $request->hold_3_ar,
            'hold_4_ar'             => $request->hold_4_ar,
            'hold_5_ar'             => $request->hold_5_ar,
            'hold_6_ar'             => $request->hold_6_ar,
        ];
        return $credentials;
    }
}
