<?php
class Rili{
    public $year;
    public $month;
   public $firstday;
    public $mdays;
    public function __construct(){
        $this->year=$_GET['year']?$_GET['year']:date('Y');
        $this->month=$_GET['month']?$_GET['month']:date('m');
        $this->firstday=date('w',mktime(0,0,0,$this->month,1, $this->year));
        $this->mdays=date('t',mktime(0,0,0,$this->month,1, $this->year));

    }
    public function out(){
        echo "<table align='center'>";
        $this->head();
       $this->week();
        $this->day();




        echo "</table>";
    }
   public function head(){
    echo "<tr>";
       echo "<td><a href=?".$this->prevyear($this->year,$this->month)."><<</a></td>";
       echo "<td><a href=?".$this->prevmonth($this->year,$this->month)."><</a></td>";
       echo "<td colspan='3'>".$this->year."年".$this->month."月</td>";
       echo "<td><a href=?".$this->nextmonth($this->year,$this->month).">></a></td>";
       echo "<td><a href=?".$this->nextyear($this->year,$this->month).">>></a></td>";
       echo "</tr>";
    }
    public function prevyear($year,$month){
        if($year==1970){
            $year=$year;
        }else{
            $year=$year-1;
        }
        return "year=$year&month=$month";
    }
    public function prevmonth($year,$month){
        if($month==1){
            $month=12;
            $year=$year-1;
        }else{
            $month=$month-1;
        }
        return "year=$year&month=$month";
    }
    public function nextyear($year,$month){
        if($year==2038){
            $year=$year;
        }else{
            $year=$year+1;
        }
        return "year=$year&month=$month";

    }
    public function nextmonth($year,$month){
        if($month==12){
            $month=1;
            $year=$year+1;
        }else{
            $month=$month+1;
        }
        return "year=$year&month=$month";
    }
   public function week(){
       echo "<tr>";
       $arr=array('日','一','二','三','四','五','六');
       for($i=0;$i<count($arr);$i++){
           echo "<th class='select'>";
           echo "$arr[$i]";
           echo "</th>";
       }
       echo "</tr>";
   }
    public function day(){

        echo "<tr>";
        for($j=0;$j<$this->firstday;$j++){

            echo "<td>&nbsp;</td>";

        }
        for($k=1;$k<$this->mdays;$k++){
            $j++;
            if($k==date('d')){
                echo "<td class='select'>$k</td>";
            }else{
                echo "<td>";
                echo $k;
                echo "</td>";
            }

            if($j%7==0){
                echo "</tr><tr>";
            }
        }

            echo "</tr>";
    }


}








?>