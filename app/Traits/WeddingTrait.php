<?php

namespace App\Traits;

trait WeddingTrait
{
    public function saveFile($wdding, $file){
        // save  in folder
        $file_extentions = $wdding->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extentions;
        $path = $file;
        $wdding->move($path, $file_name);
        return $file_name;
    }

}
