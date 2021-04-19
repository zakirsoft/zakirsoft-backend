<?php

namespace App\Actions\File;

class FileDelete
{
    public static function delete($image){
        $oldFile = file_exists(public_path($image));

        if ($oldFile) {
            @unlink(public_path($image));
        }
    }
}
