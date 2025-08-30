<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Http\Requests\CommunityRequest;

/**
 * Class CommunityController
 * @package App\Http\Controllers
 */
class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function availableCommunity()
    {
        $communities = Community::all();
        return view('community', compact('communities'));
    }
    public function index()
    {
        $communities = Community::paginate();

        return view('community.index', compact('communities'))
            ->with('i', (request()->input('page', 1) - 1) * $communities->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $community = new Community();
        return view('community.create', compact('community'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommunityRequest $request)
    {
        Community::create($request->validated());

        return redirect()->route('communities.index')
            ->with('success', 'Community created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $community = Community::find($id);

        return view('community.show', compact('community'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $community = Community::find($id);

        return view('community.edit', compact('community'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommunityRequest $request, Community $community)
    {
        $community->update($request->validated());

        return redirect()->route('communities.index')
            ->with('success', 'Community updated successfully');
    }

    public function destroy($id)
    {
        Community::find($id)->delete();

        return redirect()->route('communities.index')
            ->with('success', 'Community deleted successfully');
    }
}
