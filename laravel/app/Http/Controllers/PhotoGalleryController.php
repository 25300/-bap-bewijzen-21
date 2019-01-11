<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function listPhotos()
    {
        $photos=Photo::all();

        return view('gallery.index', ['photos' => $photos]);
    }

    public function showPhotoForm()
    {
        return view('gallery.add_photo_form');
    }

    public function savePhotoForm(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'min:10',
            'photo' => 'required|image'
        ]);

        $targetfolder = public_path('photos');
        $fileName     = str_random(16). '.' . $validData['photo']->getClientOriginalExtension();

        $validData['photo']->move($targetfolder, $fileName);

        $photo = new Photo();
        $photo->fill(
            [
                'title'          => $validData['title'],
                'description'    => $validData['description'],
                'photo'          => $fileName,
            ]
        );

        $photo->save();
        return redirect()->route('gallery.index');
    }
}
