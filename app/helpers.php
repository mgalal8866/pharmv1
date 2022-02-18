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
