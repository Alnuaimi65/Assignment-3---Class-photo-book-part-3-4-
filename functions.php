<?php
    function getAge($dob){
        $days = '365';
        $dob = new DateTime($dob.' 00:00:00');
        $today = new DateTime(date("Y/m/d",strtotime("+$days days")));
        $age = date_diff($dob,$today);
        return"$age->y";
    }
    
    function getDetailedAge($dob){
        $days = '365';
        $dob = new DateTime($dob.' 00:00:00');
        $today = new DateTime(date("Y/m/d",strtotime("+$days days")));
        $age = date_diff($dob,$today);
       return "$age->y Years, $age->m Months and $age->d Days";
    }
?>