<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RickAndMortyApiController extends Controller
{
    public function getCharactersInfoFromApi($page) {
        $characters = json_decode(file_get_contents("https://rickandmortyapi.com/api/character/?page=".$page), true);

        $links = self::paginateCharacters($page, $characters['info']['pages']);

        return view('rickAndMorty', ['characters' => $characters, 'links' => $links]);
    }

    private static function paginateCharacters($current_page, $last_page) {
        if($current_page != 1 AND $current_page != $last_page) {
            return [$current_page-1, $current_page, $current_page+1];
        } elseif ($current_page == 1) {
            return [1, 2, 3];
        } else {
            return [$last_page-2, $last_page-1, $last_page];
        }
    }
}
