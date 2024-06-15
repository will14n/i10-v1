<?php

namespace App\Http\Controllers\Notice;

use App\Models\Category;
use App\Models\Notice;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class NoticeController
{
    public function index(Request $request, Notice $notice)
    {
        $notices = $notice->all();

        return view('notice/index', compact('notices'));
    }

    public function list(Request $request)
    {
        // $filter = $request->get('filter', '');
        $filters = ['filter'  => $request->get('filter', '')];

        if ($filters) {
            $notices = Notice::where('notices.title', 'like', '%' . $filters['filter'] . '%')->paginate(10);
        }
        else {
            $notices = Notice::where('notices.id', '>=', '0')->paginate(10);
        }

        $notices = $notices->toArray();

        return view('notice/list', compact('notices', 'filters'));
    }

    public function show(string|id $id)
    {
        if(!$notice = Notice::find($id)) {
            return back();
        }

        return view('notice/show', compact('notice'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('notice/create', compact('categories'));
    }

    public function store(Request $request, Notice $notice)
    {
        $data = $request->all();
        $notice->create($data);
        return redirect()->route('notice.index');
    }

    public function edit(string|id $id)
    {
        if (!$notice = Notice::find($id)) {
            return back();
        }

        $categories = Category::all();

        return view('notice/edit', compact('notice', 'categories'));
    }

    public function update(Request $request, string|id $id)
    {
        if(!$notice = Notice::find($id)) {
            return back();
        }

        $notice->update($request->all());
        return redirect()->route('notice.index');
    }

    public function destroy(string|id $id)
    {
        if(!$notice = Notice::find($id)) {
            return back();
        }

        $notice->delete();
        return redirect()->route('index');
    }
}


