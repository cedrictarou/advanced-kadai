<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form.index');
    }

    public function post(ContactRequest $request)
    {
        // contactページからcontact内容を受け取る
        $input = $request->all();
        // 受け取った値をsessionに保存
        $request->session()->put("form_input", $input);
        // confirmへ移動
        return redirect()->route('form.confirm');
    }

    public function confirm(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        // confirmページの表示
        return view('form.confirm', compact('input'));
    }

    public function store(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->get("form_input");
        if ($request->has('back')) {
            // 修正ボタンを押された時
            return redirect()->route('form.index')->withInput($input);
        }
        // セッションのデータを元にcontactの内容をDBへ登録する
        $contact_data = [
            "fullname" => $input['last_name'] . $input['first_name'],
            "gender" => $input['gender'],
            "email" => $input['email'],
            "postcode" => $input['postcode'],
            "address" => $input['address'],
            "building_name" => $input['building_name'] ?? null,
            "opinion" => $input['opinion']
        ];
        Contact::create($contact_data);
        // seccionデータを空にする
        $request->session()->forget("form_input");
        // 問題なければthanksページへ
        return redirect()->route('form.thanks');
    }

    public function thanks()
    {
        // thanksページの表示
        return view('form.thanks');
    }
}
