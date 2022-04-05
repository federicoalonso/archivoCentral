<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FichaPersonal;

class FichasPersonalesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fichasPer = FichaPersonal::all();
        return view('mvc.fichasPersonales.index',compact('fichasPer'));
    }
}