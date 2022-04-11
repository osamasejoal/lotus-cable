<?php
use App\Models\Bill;




    /*
    |--------------------------------------------------------------------------
    |    DUPLICATE BILL CHECK    [ generate-monthly-bill.blade.php ]
    |--------------------------------------------------------------------------
    */
    function duplicate_bill_check($customer_id, $area_id, $year, $month){


        $exist_bill = Bill::where('area_id', $area_id)
                          ->where('year', $year)
                          ->where('month',  $month)
                          ->where('customer_id',  $customer_id)
                          ->select('id','customer_id')
                          ->exists();


        return $exist_bill;

    }

?>
