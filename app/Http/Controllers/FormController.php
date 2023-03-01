<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contact()
    {
        // contactページの表示
        return view('form.contact');
    }

    public function post(Request $reuqest)
    {
        // contactページからcontact内容を受け取る
        // 受け取った値をsessionに保存
        // confirmへ移動
        return redirect('/form/confirm');
    }

    public function confirm()
    {
        // confirmページの表示
        return view('form.confirm');
    }

    public function store(Request $reuqest)
    {
        // 確認を終えてcontactの内容をDBへ登録する
        // seccionデータを空にする

        // 問題なければthanksページへ
        return redirect('/form/thanks');
    }

    public function thanks()
    {
        // thanksページの表示
        return view('form.thanks');
    }
}
