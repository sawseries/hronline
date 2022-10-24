<?php

namespace verify\controller;

use verify\base\Base;
use verify\base\redirect;
use verify\base\view;
use verify\base\request as request;

class RegistController extends Base
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    
    
    public function employee(){
          return view('verify.index');
    }
    
}
