<?php

class NumberToWords
{
  public function convert($number = 0)
  {
	  if($number === 0)
	  {
		  return "ZERO";
	  }
	  $number_string = number_format($number);
	  $regroup = explode(",", $number_string);
	  $result = [];
	  $ones = ["", "ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX", "SEVEN", "EIGHT", "NINE", "TEN", "ELEVEN","TWELVE", "THIRTEEN", "FOURTEEN","FIFTEEN","SIXTEEN","SEVENTEEN","EIGHTEEN","NINETEEN"];
	  $tens = ["", "","TWENTY", "THIRTY", "FORTY", "FIFTY","SIXTY", "SEVENTY", "EIGHTY", "NINETY"];
	  $hundreds = ["", "THOUSAND", "MILLION", "BILLION", "TRILLION", "QUADRILLION"];
		$last_index = 0;
	  $hundreds_index = count($regroup) - 1;
	  for(; $last_index < count($regroup) ; $last_index++)
	  {
			if(intval($regroup[$last_index]) != 0)
		  {
				if(intval($regroup[$last_index]) > 99) {
					$hundred_val = intval(substr($regroup[$last_index], 0,1));
					$tens_val = intval(substr($regroup[$last_index], 1,2));

					$result[] = $ones[$hundred_val]." HUNDRED";
					if($tens_val > 19)
					{
						$result[] = $tens[intval(substr($regroup[$last_index], 1,1))];
						if(intval(substr($regroup[$last_index], 2,1)) != 0) {
							$result[] = $ones[intval(substr($regroup[$last_index], 2, 1))];
						}
					}
					else
					{
						if($tens_val != 0 ) {
							$result[] = $ones[$tens_val];
						}
					}
				}
			  if(intval($regroup[$last_index]) < 100)
			  {
				  if(intval($regroup[$last_index]) > 19)
				  {
					  $regroup[$last_index] = intval($regroup[$last_index]);
					  $result[] = $tens[intval(substr($regroup[$last_index], 0,1))];
					  if(intval(substr($regroup[$last_index], 1,1)) != 0) {
						  $result[] = $ones[intval(substr($regroup[$last_index], 1, 1))];
					  }
				  }
				  else
				  {
					  $result[] = $ones[intval($regroup[$last_index])];
				  }
			  }
			  if($hundreds_index != 0)
			  {
				  $result[] = $hundreds[$hundreds_index];
			  }
		  }

		  $hundreds_index--;
	  }
	  return trim(implode(" ", $result));
  }
}

