<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function index(){
        // $listFeedback = DB::table('feedback')->get();
        $listFeedback= Feedback::all();
        return response() ->json($listFeedback);
    }
}