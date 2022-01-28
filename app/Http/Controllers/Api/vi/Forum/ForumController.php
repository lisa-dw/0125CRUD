<?php

namespace App\Http\Controllers\Api\vi\Forum;

use App\Http\Controllers\Controller;
use App\Http\Resources\Forum\ForumListResource;
use App\Http\Resources\Forum\ForumResource;
use App\Models\Forum\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$frm = Forum::all();
        $frm = Forum::where('id', '<=', 3);

        $frm->with('user');

        $frm->where('title', '!=', '');


        $frm = $frm->get();

        Log::info($frm);

        return json_encode($frm);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request);

        $frm = Forum::create($request->all());

        Log::info($frm);

        return $frm;




//        Forum::create([
//            // 어떤 요청이 왔는지 기재.
//        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //$forum->user; // $forum에 user 함수에 해당하는 것들을 함께 보여줘

        $forum->load('user');
//        $userName = $forum->user->name;
//        unset($forum->user);
//        $forum->userName = $userName;

        Log::info($forum);

        return $forum;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        Log::info($request);

        $frm = $forum->update($request->all());

        Log::info($frm);

        return $frm;




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        Log::info(__METHOD__);

      $frm = $forum->delete();

      return $frm;

      Log::info($frm);
    }
}
