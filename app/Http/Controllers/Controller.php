<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Session('alert_success')) {
                alert()->success('SuccessAlert', Session('alert_success'));
            } else if (Session('alert_error')) {
                alert()->error('ErrorAlert', Session('alert_error'));
            } else if (Session('toast_success')) {
                toast(Session('toast_success'), 'success');
            } else if (Session('toast_success')) {
                toast(Session('toast_error'), 'error');
            }

            return $next($request);
        });
    }
}
