<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/hs', function () {
    return view('homescreen');
});

Route::get('/seeder-maker', function () {
    $jurus = scandir(public_path('/img/jurus'));

    $jurus = array_slice($jurus, 2);

    $jurusBaru = [];

    for ($i=1; $i < 15; $i++) {
        $description = '';

        foreach ($jurus as $j => $k) {
            if (str_contains($k, 'jurus' . $i . '_')) {
                $jurusBaru[$i]['name'] = 'Jurus Tunggal IPSI (' . $i . ')';
                $jurusBaru[$i]['parent_id'] = 26;
                $jurusBaru[$i]['images'][] = 'jurus/' . $jurus[$j];

                $description .= '|';
            }
        }

        $jurusBaru[$i]['youtube_url'] = '';
        $jurusBaru[$i]['view'] = 'multiple';
        $jurusBaru[$i]['description'] = $description;
    }

    $returnValue = '';

    foreach ($jurusBaru as $jB) {
        $returnValue .= "Form::create([
    'name' => '{$jB['name']}',
    'parent_id' => 26,
    'images' => json_encode(".json_encode($jB['images'], JSON_UNESCAPED_SLASHES)."),
    'youtube_url' => '',
    'view' => 'multiple',
    'description' => '{$jB['description']}',
]);

";
    }

    return response($returnValue, 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/download', function () {
    return response()
        ->download(public_path('files/app-release.apk'));
});

Route::get('/', HomeController::class);

Route::resource('/forms', FormController::class)->only(['show']);
