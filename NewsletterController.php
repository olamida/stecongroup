<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Campaign;

//Newsletter for users subscription
//use \DrewM\MailChimp\MailChimp;
use Newsletter;

class NewsletterController extends Controller
{
    protected function validator(Request $request)
    {
        //'name', 'description', 'image', 'slug'
        return Validator::make($request->all(), [
            'title' => 'required|max:350|min:5|string',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        ErrorException
        Object of class DrewM\MailChimp\MailChimp could not be converted to string
        */

        $api = Newsletter::getApi();
        $lists = $$api->get('lists');
        //dd($result);
        //print_r($result);
        foreach($lists['lists'] as $list){
            $this_list_id = $list['id'];
            $this_list_name = $list['name'];
        }
        print_r($lists);
    }


}
