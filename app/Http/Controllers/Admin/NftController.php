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


class NftController extends Controller
{
    //
    public function index()
    {
       
        $nfts = Nft::all();
        return view('admin.nfts.index', compact('nfts'));


    }

    public function create()
    {
        return view('admin.nfts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'external_url' => 'required',
            'attributes' => 'required',
            'collection' => 'required',
            'price' => 'required',
            'creator' => 'required',
            'owner' => 'required',
            'category' => 'required',
        ]);

        Nft::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('images/',$request->file('image')->getClientOriginalName());
            $nft->image = $request->file('image')->getClientOriginalName();
            $nft->save();
        }
        $request->file('image')->storeAs('public/itemImages', $filenameToStore);

        $mainPath = public_path('admin/images/' . $filenameToStore);
        Image::make($mainPath)->resize(450, 450)->save($mainPath);
  
        $formData['image'] = 'admin/images/' . $filenameToStore;
        return redirect()->route('admin.nfts.index')
            ->with('success', 'Nft created successfully.');
    }

    public function show(Nft $nft)
    {
        return view('admin.nfts.show', compact('nft'));
    }

    public function edit(int $id)
    {
        $nft = Nft::find($id);
        return view('admin.nfts.edit', compact('nft'));
    }
    

    public function update(Request $request, Nft $nft)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'external_url' => 'required',
            'attributes' => 'required',
            'collection' => 'required',
            'price' => 'required',
            'creator' => 'required',
            'owner' => 'required',
            'category' => 'required',
        ]);
        $nft->update($request->all());

        return redirect()->route('admin.nfts.index')
            ->with('success', 'Nft updated successfully');
    }

    public function destroy(Nft $nft)
    {
        $nft->delete();

        return redirect()->route('admin.nfts.index')
            ->with('success', 'Nft deleted successfully');
    }


}
