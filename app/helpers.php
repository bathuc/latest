<?php

use Illuminate\Contracts\Routing\UrlGenerator;

/**
 * @param $filename
 * @return UrlGenerator|string
 * @throws Exception
 */
function app_asset($filename)
{
    $cacheKey = 'app_assets_map';
    $assetsMap = cache($cacheKey);

    // Only try to refresh cache on development
    if (config('app.env') !== 'production' && $assetsMap != null && $assetsMap['manifest_timestamp'] != filemtime(public_path() . '/dist/manifest.json')) {
        $assetsMap = null;
    }

    if ($assetsMap == null) {
        $jsonString = file_get_contents(public_path() . '/dist/manifest.json'); // Read file generated from webpack

        $assetsMap = [
            'data' => json_decode($jsonString, true),
            'manifest_timestamp' => filemtime(public_path() . '/dist/manifest.json'),
        ];

        cache([$cacheKey => $assetsMap], now()->addHours(24));
    }

    if (empty($assetsMap['data'][$filename])) {
        throw new Exception('Invalid asset file ' . $filename);
    }

    return url('/dist/' . $assetsMap['data'][$filename]);
}

/**
 * Spilt keyword into array of word with "space" (Include space in Japanese)
 *
 * @param $keyword
 * @return array|false|string[]
 */
function split_with_whitespace($keyword) {
    return preg_split('/\s+/u', trim($keyword), -1, PREG_SPLIT_NO_EMPTY);
}
