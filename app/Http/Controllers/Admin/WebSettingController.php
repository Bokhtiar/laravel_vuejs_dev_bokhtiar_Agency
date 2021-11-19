<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebSetting;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{

    public function edit($id)
    {
        $web = WebSetting::find($id);
        return response()->json(['web'=>$web], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $web = new WebSetting();
        $web->website_name = $request->website_name;
        $web->email = $request->email;
        $web->phone = $request->phone;
        $web->location = $request->phone;
        $web->fb = $request->fb;
        $web->in = $request->insta;
        $web->tw = $request->tw;
        $web->li = $request->li;
        $web->save();
        return response()->json(['web'=>$web], 200);
    }
}
