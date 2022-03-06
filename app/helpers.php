<?php
use App\Models\Brandaccount;



if(!function_exists('isBrandaccountActive'))
{
    function isBrandaccountActive($email) : bool
    {
        $brandaccount = Brandaccount::whereEmail($email)->IsActive()->exists();
        if($brandaccount)
        {
            return true;
        }
        return false;
    }
}

if(!function_exists('Uploadimage'))
{
    function uploadimages($folder,$image)
        {
        $image->store('/',$folder);
        $filename = $image->hashName();
        return  $filename;
        }
}
// if(!function_exists('Uploadfile'))
// {
//     function uploadimages($folder,$image)
//         {
//         $image->store('/',$folder);
//         $filename = $image->hashName();
//         return  $filename;
//         }
// }
