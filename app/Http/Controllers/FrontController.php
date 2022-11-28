<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;
use App\Models\Category;
use App\Models\Collection;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    //
    public function index()
    {
        $nfts = Nft::all();
        if (Auth::check()) {
            $user = Auth::user();
            return view('front.index', compact('nfts', 'user'));
        } else {
            return view('front.index', compact('nfts'));
        }
    }

    public function show(Nft $nft)
    {
     
        $nfts = Nft::all();
        return view('front.show', compact('nfts', 'nft'));
    }

    public function showCollection(Collection $collection)
    {
        $nfts = Nft::all();
        $collections = Collection::all();
        $users = User::all();
        return view('front.collection', compact('nfts', 'collection', 'collections', 'users'));
    }

    public function sellNft()
    {
        if ($nft->owner == Auth()->user()->id) {
            return view('front.sellNft', compact('nft'));
        } else {
            return redirect()->route('front.index');
        }

        return view('front.sellNft');
    }

    public function buyNft(Nft $nft)
    {
        if ($nft->owner_id == Auth::id()) {
            return redirect()->route('front.index')->with('error', 'You cannot buy your own NFT');
        } else {
            $nft->owner_id = Auth::id();
            $nft->save();
            return redirect()->route('front.index')->with('success', 'NFT bought successfully');
        }
        if ($user->id == Auth::id()) {
            return redirect()->route('front.index')->with('error', 'You cannot buy your own NFT');
        } else {
            $nft->owner_id = Auth::id();
            $nft->save();
            return redirect()->route('front.index')->with('success', 'NFT bought successfully');
        }
        if($user->wallet < $nft->price){
            return redirect()->route('front.index')->with('error', 'You do not have enough money to buy this NFT');
        } else {
            $user->wallet = $user->wallet - $nft->price;
            $user->save();
            $nft->owner_id = Auth::id();
            $nft->save();
            return redirect()->route('front.index')->with('success', 'NFT bought successfully');
        }
    }
}
