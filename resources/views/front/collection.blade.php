@extends('layouts.front')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
    <h2> {{ session('status') }}</h2>
    </div>
@endif

<div class="py-6">
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">
            <div class="mt-4 overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left">
                                <div class="flex items center">
                                    <span
                                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Name
                                    </span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left">
                                <div class="flex items
                                    center">
                                    <span
                                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">NFT's purchased
                                    </span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left">
                                <div class="flex items center">
                                    <span
                                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Wallet
                                    </span>
                                </div>
                            </th>
                            
                            <th class="px-4 py-2 text-left">
                                <div class="flex items center">
                                    <span
                                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Actions
                                    </span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($collections as $collection)
                            <tr>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap">{{ $collection->name ?? null }}</td>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap">{{ $collection->nfts->count() ?? null }}</td>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap">{{ $collection->users->wallet ?? null }}</td>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap text-right">
                                    <a href='{{ route('front.sellNFT', $collection->id) }}' class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">
                                        Sell
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

