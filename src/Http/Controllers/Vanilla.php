<?php namespace GeneaLabs\LaravelCasts\Http\Controllers;

use GeneaLabs\LaravelCasts\Http\Requests\FormsExample;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class Vanilla extends Controller
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    public function index() : View
    {
        config(['genealabs-laravel-casts.framework' => 'vanilla']);

        return view('genealabs-laravel-casts::examples.vanilla');
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function store(FormsExample $request) : RedirectResponse
    {
        return redirect('genealabs/laravel-casts/examples/vanilla');
    }
}
