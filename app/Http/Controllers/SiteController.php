<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $site = Site::first();
        return view('admin.setting.site.index', compact('site'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'meta' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string|max:255',
            'footer' => 'nullable|string|max:255'
        ]);

        $site = Site::findOrFail($id);
        $site->title = $request->title;
        $site->meta = $request->meta;
        $site->deskripsi = $request->deskripsi;
        $site->footer = $request->footer;
        $site->save();

        return back()->withToastErrors('Data situs berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        //
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:5120|dimensions:max_width=512,max_height=512',
        ]);

        $site = Site::first();
        $oldIconPath = $site->icon;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . Str::random(10) . '.' . $extension;

            $file->move(public_path('assets/icon'), $filename);

            $site->icon = $filename;
            $site->save();

            if ($oldIconPath !== 'default.png') {
                if (file_exists(public_path('assets/icon/' . $oldIconPath))) {
                    unlink(public_path('assets/icon/' . $oldIconPath));
                }
            }
        }

        return back()->withToastSuccess('Berhasil mengubah icon');
    }
}
