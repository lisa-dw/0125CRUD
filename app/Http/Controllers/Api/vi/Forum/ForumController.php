<?php

namespace App\Http\Controllers\Api\vi\Forum;

use App\Http\Controllers\Controller;
use App\Http\Resources\Forum\ForumListResource;
use App\Http\Resources\Forum\ForumResource;
use App\Models\Forum\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $outs = Forum::all();

        return ForumListResource::collection($outs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $outs = Forum::create($request->all());

        return $outs;


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
        $forum->user; // $forum에 user 함수에 해당하는 것들을 함께 보여줘

        return new ForumResource($forum);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
      //  $forum->delete();
    }
}
