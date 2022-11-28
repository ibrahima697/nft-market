@extends('layouts.admin')

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
                                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Description
                                    </span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left">
                                <div class="flex items center">
                                    <span
                                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Price
                                    </span>
                                </div>
                            </th>
                            <th class="px-4 py-2 text-left">
                                <div class="flex items center">
                                    <span
                                        class="text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase">Image
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
                        @foreach ($nfts as $nft)
                            <tr>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap">{{ $nft->name ?? null }}</td>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap">{{ $nft->description ?? null }}</td>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap">{{ $nft->price ?? null }}</td>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap"><img src="images/.{{ $nft->image ??null }}" width="100px"></td>
                                <td class="w-4/12 px-3 py-4 whitespace-no-wrap text-right">
                                    <a href="{{ route('admin.nfts.edit', ['id' => $nft->id ?? null]) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin.nfts.destroy', ['id' => $nft->id ?? null]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
