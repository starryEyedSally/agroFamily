<?php
namespace Agrofamily\Http\Controllers;

use Agrofamily\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            return redirect('demo');
        }

        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function demo()
    {
        /** @var User $user */
        $user = Auth::user();

        $products = $user->getProducts();

        //pass the products to the view
        return view('demo', [
            'products' => $products, 'user' => $user
        ]);
    }

    public function createUser(){
        $credentials = array('email' => 'vladokiller33@gmail.com', 'password' => 'vladimir','name' => 'vladimir');
        $credentials['password'] = bcrypt($credentials['password']);
        $credentials['opg_name'] = 'Agrofamily';

        try {
            $user = User::create($credentials);
        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }

        echo "user created.";
    }
}
