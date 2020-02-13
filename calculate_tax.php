<?php
	
	$cess;
	$sis;
	$income_tax;
	$sum_tax1;
	$sum_tax2;
	$sum_tax3;
	$sum_tax4;
	$sum_tax5;
	$sum_tax6;
	$sum_tax7;
	
	$year=$_GET["year"];
	$age=$_GET["age"];
	$salary=$_GET["salary"];
	$interest_income=$_GET["interest_income"];
	$interest_homeloan=$_GET["interest_homeloan"];
	$rental_income=$_GET["rental_income"];
	$ed_from_salary=$_GET["ed_from_salary"];
	$other_income=$_GET["other_income"];

	
	$interest_paid_on_loan=$_GET["interest_paid_on_loan"];
	$deduction_80c=$_GET["deduction_80c"];
	$deduction_80d=$_GET["deduction_80d"];
	$deduction_80e=$_GET["deduction_80e"];
	$deduction_80ccd=$_GET["deduction_80ccd"];
	$deduction_80tta=$_GET["deduction_80tta"];
	$deduction_80g=$_GET["deduction_80g"];
	$deduction_80eea=$_GET["deduction_80eea"];
	
	$deduction_sum=$deduction_80c+$deduction_80d+$deduction_80e+$deduction_80ccd+$deduction_80tta+$deduction_80g+$deduction_80eea;
	$tax_sal_new=$salary+$rental_income+$interest_income+$other_income-$interest_homeloan-$interest_paid_on_loan-$ed_from_salary;
	echo "according to new slab your taxable income is: $tax_sal_new<br>";
	echo "Including cess ";
	
	
	for($var=1;$var<=1;$var++){
	$sum_tax_1=0;
	if($tax_sal_new<=250000)
	{
		$sum_tax1=0;
		echo "your tax acoording to new slab is 0Rs";
	}
	if($tax_sal_new>250000)
	{
	$sum_tax2=((1/20)*(500000-250000));
	if($tax_sal_new>250000&&$tax_sal_new<=500000)
	{
	$sis=((1/20)*($tax_sal_new-250000));
	$cess=(1/25)*($sum_tax1+$sis);
	$income_tax=$sum_tax2+$cess;
					echo "your tax according to new slab is : $income_tax";
					break;
	}
	}
	if($tax_sal_new>500000)
	{
	$sum_tax3=((1/10)*(750000-500000));
	if($tax_sal_new>500000&&$tax_sal_new<=750000){
	$sis=((1/10)*($tax_sal_new-500000));
	$cess=(1/25)*($sum_tax2+$sis);
	$income_tax=$sum_tax2+$sum_tax3+$cess;
					echo "your tax according to new slab is : $income_tax";
					break;
	}
	}
	if($tax_sal_new>750000)
	{
				$sum_tax4=((3/20)*(1000000-750000));
				 if($tax_sal_new>750000&&$tax_sal_new<=1000000){
				 $sis=((3/20)*($tax_sal_new-750000));
				 $cess=(1/25)*($sum_tax2+$sum_tax3+$sum_tax4);
				 $income_tax=$sum_tax2+$sum_tax3+$sis+$cess;
					echo "your tax according to new slab is : $income_tax";
					break;
				 }
	}
	if($tax_sal_new>1000000)
	{
					$sum_tax5=((1/5)*(1250000-1000000));
					if($tax_sal_new>1000000&&$tax_sal_new<=1250000){
					$sis=((1/5)*($tax_sal_new-1000000));
					$cess=(1/25)*($sum_tax2+$sum_tax3+$sum_tax4+$sis);
					$income_tax=$sum_tax2+$sum_tax3+$sum_tax4+$sis+$cess;
					echo "your tax according to new slab is : $income_tax";
					break;

					}
	}
	if($tax_sal_new>1500000)
	{
					$sum_tax6=((1/4)*(1500000-1250000));
					//echo "tax for slab 1500000-125000 $sum_tax6<br>";
					if($tax_sal_new>1250000&&$tax_sal_new<=1500000){
					$sis=((1/4)*($tax_sal_new-125000));
					$cess=(1/25)*($sum_tax1+$sum_tax2+$sum_tax3+$sum_tax4+$sum_tax5+$sis);
					$income_tax=$sum_tax1+$sum_tax2+$sum_tax3+$sum_tax4+$sum_tax5+$sis+$cess;
					echo "your tax according to new slab is : $income_tax";
					break;
					}
	}
	if($tax_sal_new>1500000)
	{
					$sum_tax7=((3/10)*($tax_sal_new-1500000));
					//echo "tax slab for more than 1500000 $sum_tax7<br>";
					//$sis=((3/10)*($sal_tax_new-250000));
					$cess=(1/25)*($sum_tax2+$sum_tax3+$sum_tax4+$sum_tax5+$sum_tax6+$sum_tax7);
					$income_tax=$sum_tax2+$sum_tax3+$sum_tax4+$sum_tax5+$sum_tax6+$sum_tax7+$cess;
					echo "your tax according to new slab is : $income_tax";
	}
	
}

echo "<br> Your task is completed";
	
	
?>