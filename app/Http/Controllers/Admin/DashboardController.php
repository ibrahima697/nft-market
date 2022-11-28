<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nft;
use App\Models\Category;
use App\Models\Collection;
use App\Models\User;
use App\Repositories\UserRepository;
use App\Repositories\NftRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
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
      
       //$user = Auth()->user();
       $users = User::all();
       return view('admin.dashboard', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');  
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'wallet' => 'required',
        ]);

        User::create($request->all());

        return redirect()->route('admin.dashboard')
            ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'wallet' => 'required',
        ]);
        $user->update($request->all());

        return redirect()->route('admin.dashboard')
            ->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'User deleted successfully');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $users = DB::table('users')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.dashboard', ['users' => $users]);
    }
}
