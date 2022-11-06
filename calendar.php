<!-- git init
git add -A
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/mohammadadnansheikh/CalendarPHP-UI.git
git push -u origin main -->
<?php 


$everyMonth = 1;
// $everyYear = 2022;
// if(isset($_GET['monthvalue'])){
//     $monthofOption =  $_GET['monthvalue'];
//      echo  $monthofOption;
//    // $everyMonth =  $monthofOption;
// }else{
//     $everyMonth = 1;
// }

if(isset($_GET['yearvalue'])){
    $yearofOption =  $_GET['yearvalue'];
    
    $everyYear = $yearofOption;
}else{
    $everyYear = 2022;
}





 class Calendar extends DateTime
 {  

    protected $year;
    protected $monthNumber;
    protected $weekDays = [
        'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
    ];
    protected $months = [
        "January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "December"
    ];

    protected  $arrYear = [];
    protected $weeks = [];

    public function getEachYears(){
        return $this-> arrYear;
    }

    
    
    public function getEachMonths(){
        return $this->months;
    }
    public function getWeekDays(){
        return $this->weekDays;
    }
    public function getYear() 
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }    
    
    public function getMonthNumber()
    {
        return $this->monthNumber;
    }

    public function setMonthNumber($monthNumber){
        $this->monthNumber = $monthNumber;
    }

    public function getWeeks()
    {
        return $this->weeks;
    }

    public function create()
    {
        $date = $this->setDate($this->getYear(),$this->getMonthNumber(), 1);
        $daysInMonth = $date->format('t');
        $dayMonthStarts = $date->format('N');
        $days = array_fill(0, ($dayMonthStarts -  1), '');
        $eachYears = $date->format('Y');
    
       


        for($x = 1; $x <= $daysInMonth; $x++){
            $days[]  = $x;
        }

        for($x = $eachYears; $x >= 1970; $x--){
            $this->arrYear[]  = $x;
        }

        $this->weeks = array_chunk($days, 7);
    }
    
 }

 



    $calendar = new Calendar();
 
    $calendar->setYear($everyYear);
    $calendar->setMonthNumber($everyMonth);
    $calendar->create();
 ?>

