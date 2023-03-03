<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query();
        // 検索条件をセッションに保存
        $request->session()->put("search_query", $search);

        if ($search) {
            // 検索機能
            $contacts = Contact::search($search)->select('id', 'fullname', 'gender', 'email', 'opinion')->get();
        } else {
            $contacts = null;
        }

        return view('admin.index', compact('contacts'));
    }
}
