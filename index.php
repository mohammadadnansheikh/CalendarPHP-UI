
<?php
  require 'calendar.php';
   

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body> 
    <div id="show"></div>
   <div class="container mt-4">
        <form action="">
            <label for="">Choose Year</label>
            <select name="year" id="year" onchange="myfunYear(this.value)">
            <?php foreach ($calendar->getEachYears() as $year): ?>
                <option>
                    <?php echo $year?>
                 </option>
                 <?php endforeach; ?>
            </select>
       </form>

       <form action="">
           <label for="">Choose Month</label>
            <select name="" id="month" onchange="myfunMonth(this.value)">
            <?php foreach ($calendar->getEachMonths() as $eachmonth): ?>
                <option>
                    <?php echo $eachmonth?>
                 </option>
                 <?php endforeach; ?>
            </select>
       </form>
       <h1 class="text-center">Calendar</h1>
       <table class="table table-bordered mt-4">
        <thead>
            
            <tr>
                  <?php foreach ($calendar->getWeekDays() as $dayName): ?>
                <th>
                    <?php echo $dayName?>
                 </th>
                 <?php endforeach; ?>

            </tr>
        </thead>
         <tbody>
         <?php foreach ($calendar->getWeeks() as $week): ?>
                <tr>
                <?php foreach ($week as $dayNumber): ?>
                <td>
                    <?php echo $dayNumber;?>
                 </td>
                 <?php endforeach; ?>
                 </tr>
                 <?php endforeach; ?>
         </tbody>
       </table>
       <form action="">
         <input type="text" name="date" placeholder="Enter Any Date">
         <button>Date</button>
       </form>
   </div>

   <script type="text/javascript">
      // function myfunMonth(month){
      //   {
      //      alert(month)
      //       var req = new XMLHttpRequest();
      //       req.open("GET", "http://localhost/first/index.php?monthvalue="+month, true)
      //       req.send();

      //       req.onreadystatechange = function(){
      //           if(req.readyState == 4 && req.status == 200){
      //             document.getElementById('show').innerHTML = req.responseText;
      //           }
      //       }
      //   }
      // }


      // function myfunYear(year){
      //   {
      //      alert(year)
      //       var req = new XMLHttpRequest();
      //       req.open("GET", "http://localhost/first/calendar.php?yearvalue="+year, true)
      //       req.send();

      //       req.onreadystatechange = function(){
      //           if(req.readyState == 4 && req.status == 200){
      //             document.getElementById('show').innerHTML = req.responseText;
      //           }
      //       }
      //   }
      // }
   </script>

</body>
</html>

