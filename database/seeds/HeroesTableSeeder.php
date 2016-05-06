<?php

use Illuminate\Database\Seeder;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Using api.steampowered.com API to get hero and item data
     * @return void
     */
    public function run()
    {
        /**
         * get Hero data
         */
        $hero_json_from_steam = file_get_contents('https://api.steampowered.com/IEconDOTA2_570/GetHeroes/v0001?key=866C486462F1FB0F82B9E1845E0DE56E');
        $heroes_name_for_pic_url = json_decode($hero_json_from_steam, true);
        $hero_name_array = [];
        foreach ($heroes_name_for_pic_url["result"]["heroes"] as $obj) {
            array_push($hero_name_array, substr($obj["name"], 14));
        }
        $hero_json_from_dota_site = file_get_contents('http://www.dota2.com/jsfeed/heropickerdata');
        $hero_pic_url = "http://cdn.dota2.com/apps/dota2/images/heroes/";
        $heroes = json_decode($hero_json_from_dota_site, true);
        $index = 0;
        foreach ($heroes as $obj) {
            $hero = new Dota2\Hero;
            $hero->name = $obj["name"];
            $hero->bio = $obj["bio"];
            $hero->atk_type = $obj["atk"];
            $hero->pic_url_lg = $hero_pic_url . $hero_name_array[$index] . "_lg.png";
            $hero->pic_url_sm = $hero_pic_url . $hero_name_array[$index] . "_sb.png";
            $hero->save();
            $index++;
        }

        /**
         * get item data
         */
        $item_json_from_dota_site = file_get_contents("http://www.dota2.com/jsfeed/itemdata");
        $items = json_decode($item_json_from_dota_site, true);
        $item_pic_url = "http://cdn.dota2.com/apps/dota2/images/items/";
        $index = 0;
        foreach ($items["itemdata"] as $obj) {
            if ($obj["cost"] == 0) {
                continue;
            }
            $item = new Dota2\Item;
            $item->name = $obj["dname"];
            $item->pic_url = $item_pic_url . $obj['img'];
            $item->qual = $obj["qual"];
            $item->cost = $obj["cost"];
            $item->desc = $obj["desc"];
            $item->notes = $obj["notes"];
            $item->attrib = $obj["attrib"];
            $item->mc = $obj["mc"];
            $item->cd = $obj["cd"];
            $item->lore = $obj["lore"];
            $item->qual = $obj["qual"];
            $item->save();
            $index++;
        }

    }

}
