<?php

class BinaryToDecimal
{
    public function convert($argument1 = '')
    {
	    if($argument1 == "")
	    {
		    return FALSE;
	    }
	    if(preg_match('/[2-9]+/', $argument1))
	    {
		    return 'INVALID. Not a binary digit';
	    }
	    $last_index = strlen($argument1) - 1;
	    $dec_values = 1;
	    $result = 0;
			for(; $last_index >= 0 ; $last_index--)
			{
				if(intval($argument1[$last_index]) == 1 )
				{
					$result += $dec_values;
				}
				$dec_values *= 2;
			}
	    return $result;
    }


}
