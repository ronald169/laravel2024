<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (!function_exists('generateRandomDateInRange')) {
    function generateRandomDateInRange($startDate, $endDate)
    {
        $start = Carbon::parse($startDate);
        $end = Carbon::parse($endDate);

        $differences = $end->timestamp - $start->timestamp;

        $randomSeconds = rand(0, $differences);

        return $start->copy()->addSeconds($randomSeconds);
    }
}

if (!function_exists('generateFakeImage')) {
    function generateFakeImage()
    {
        // URL d'une image factice
        $imageUrl = fake()->imageUrl();
        $imageContent = file_get_contents($imageUrl);

        if ($imageContent) {
            // Générer un nom de fichier unique
            $fileName = Str::random(10) . '.png'; // Exemple : "a1b2c3d4e5.png"
            $path = 'images/' . $fileName;

            // Sauvegarder le fichier
            Storage::disk('public')->put($path, $imageContent);

            // Obtenir le chemin public
            $publicPath = Storage::url($path);

            return $publicPath;
            // Résultat : "/storage/images/a1b2c3d4e5.jpg"
        } else {
            echo "/storage/images/fake.jpg";
        }
    }
}
