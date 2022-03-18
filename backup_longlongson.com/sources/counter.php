<?php
	
     //thong ke web counter     
    $domain_ref = trim($_SERVER['HTTP_REFERER']);
    $domain_ref = str_replace("https://", "", $domain_ref);
    $domain_ref = str_replace("http://", "", $domain_ref);
    $domain_ref = str_replace("www.", "", $domain_ref);
    $domain_ref = substr($domain_ref, 0, strpos($domain_ref, "/"));    
    $my_domain = $_SERVER['HTTP_HOST'];
    $my_domain = str_replace("www.", "", $my_domain);
    
    if (($domain_ref != $my_domain) && ($domain_ref != 'localhost') && ($domain_ref != ''))
    {
      //check
      $query= "SELECT id,num_click FROM counter_website WHERE domain='" . $domain_ref . "' ";
      $d->query($query);
      if ($d->num_rows()>0)
      {
        $row_ck = $d->fetch_array();
        $num_click = ($row_ck['num_click'] + 1);
        $date_click = time();               
        $idw=$row_ck['id'];

        $sql2="UPDATE counter_website SET num_click='$num_click',date_click='$date_click' WHERE id = '$idw'";
        $result2=$d->query($sql2);
 
      } else
      {                
        $num_click = 1;
        $date_click = time();       
        $query = "INSERT INTO counter_website (domain, num_click,date_click) VALUES ('$domain_ref','$num_click', ' $date_click')";
        $d->query($query);

      }
    } 


    $today            =    'Ngày hôm nay';
    $yesterday        =    'Ngày hôm qua';
    $x_month        =    'Tháng hiện tại';
    $x_week            =    'Tuần hiện tại';
    $all            =    'Tổng lượt truy cập';
    
    $locktime        =  15;
    $initialvalue    =    1;
    $records        =    100000;
    
    $s_today        =    1;
    $s_yesterday    =    1;
    $s_all            =    1;
    $s_week            =    1;
    $s_month        =    1;
    
    $s_digit        =    1;
    $disp_type        =     'Mechanical';
    
    $widthtable        =    '60';
    $pretext        =     '';
    $posttext        =     '';
    $locktime        =    $locktime * 60;
    // Now we are checking if the ip was logged in the database. Depending of the value in minutes in the locktime variable.
    $day             =    date('d');
    $month             =    date('n');
    $year             =    date('Y');
    $daystart         =    mktime(0,0,0,$month,$day,$year);
    $monthstart         =  mktime(0,0,0,$month,1,$year);
    // weekstart
    $weekday         =    date('w');
    $weekday--;
    if ($weekday < 0)    $weekday = 7;
    $weekday         =    $weekday * 24*60*60;
    $weekstart         =    $daystart - $weekday;

    $yesterdaystart     =    $daystart - (24*60*60);
    $now             =    time();
    $ip                 =    $_SERVER['REMOTE_ADDR'];
    
    $date_log = date("d/m/Y"); 
    $agent  = $_SERVER['HTTP_USER_AGENT'];
    $browser = getBrowser($agent);
    $os = getOs($agent);
    //$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
    $details = '';
    $country =  $details->geoplugin_countryName;

    
    $query             =    "SELECT MAX(id) AS total FROM counter";
    $t = $d->fetch_array($d->query($query));
    $all_visitors     =    $t['total'];
    
    if ($all_visitors !== NULL) {
        $all_visitors += $initialvalue;
    } else {
        $all_visitors = $initialvalue;
    }
    
    // Delete old records
    $temp = $all_visitors - $records;
    
    if ($temp>0){
        $query         =  "DELETE FROM counter WHERE id<'$temp'";
        $d->query($query);
    }
    
    $query             =    "SELECT COUNT(*) AS visitip FROM counter WHERE ip='$ip' AND (tm+'$locktime')>'$now'";
    $vip  = $d->fetch_array($d->query($query));
    $items             =    $vip['visitip'];
    
    if (empty($items))
    {
        $query = "INSERT INTO counter (tm, ip) VALUES ('$now', '$ip')";
        $d->query($query);

        //Cap nhat thong tin chi tiet        
        $query = "INSERT INTO counter_detail (date_log,agent,browser,ip,os,country,date_time) VALUES ('$date_log','$agent','$browser','$ip','$os','$country','$now')";
        $d->query($query);
    }
    
    $n                 =     $all_visitors;
    $div = 100000;
    while ($n > $div) {
        $div *= 10;
    }

    $query             =    "SELECT COUNT(*) AS todayrecord FROM counter WHERE tm>'$daystart'";
    $todayrec  = $d->fetch_array($d->query($query));
    $today_visitors     =    $todayrec['todayrecord'];
    
    $query             =    "SELECT COUNT(*) AS yesterdayrec FROM counter WHERE tm>'$yesterdaystart' and tm<'$daystart'";
    $yesrec  = $d->fetch_array($d->query($query));
    $yesterday_visitors     =    $yesrec['yesterdayrec'];
        
    $query             =    "SELECT COUNT(*) AS weekrec FROM counter WHERE tm>='$weekstart'";
    $weekrec = $d->fetch_array($d->query($query));
    $week_visitors     =    $weekrec['weekrec'];

    $query             =    "SELECT COUNT(*) AS monthrec FROM counter WHERE tm>='$monthstart'";
    $monthrec  = $d->fetch_array($d->query($query));
    $month_visitors     =    $monthrec['monthrec'];
	
	$query             =    "SELECT COUNT(*) AS usrec FROM counter_detail WHERE country='United States'";
    $usrec  = $d->fetch_array($d->query($query));
    $us_visitors     =    $usrec['usrec'];
	
	$query             =    "SELECT COUNT(*) AS vietnamrec FROM counter_detail WHERE country='Vietnam'";
    $vietnamrec  = $d->fetch_array($d->query($query));
    $vietnam_visitors     =    $vietnamrec['vietnamrec'];
    
    $counter ='';
   
       
  
    // Show today, yestoday, week, month, all statistic
    if($s_today)        $counter        .= '<li class="online">'.$today.': <strong>'.$today_visitors.'</strong></li>';
    if($s_yesterday)    $counter        .= '<li class="guest">'.$yesterday.': <strong>'.$yesterday_visitors.'</strong></li>';
   
    if($s_week)            $counter        .= '<li class="page">'.$x_week.': <strong>'.$week_visitors.'</strong></li>';
    if($s_month)        $counter        .=  '<li class="month">'. $x_month.': <strong>'.$month_visitors.'</strong></li>';
    if($s_all)            $counter        .=  '<li class="statistics">'. $all.': <strong>'.$all_visitors.'</strong></li>';

?> 