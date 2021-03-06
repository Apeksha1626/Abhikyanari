<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <title>Period Calculator</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="This free calculator estimates days in the future during which a person with a regular menstrual cycle is expected to undergo their period, based on information provided regarding previous periods. It also estimates the most probable ovulation days. Also, explore more health, fitness, or other calculators.">
        <script src="https://www.googletagservices.com/activeview/js/current/osd.js?cb=%2Fr20100101"></script>
        <script src="//d26tpo4cm8sb6k.cloudfront.net/js/common.js"></script>
        <link rel="stylesheet" href="//d26tpo4cm8sb6k.cloudfront.net/style2.css">
        <link rel="apple-touch-icon" sizes="180x180" href="//d26tpo4cm8sb6k.cloudfront.net/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="//d26tpo4cm8sb6k.cloudfront.net/icon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="//d26tpo4cm8sb6k.cloudfront.net/icon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <script type="text/javascript" src="//d26tpo4cm8sb6k.cloudfront.net/js/calendardateinput.js"></script>
        <meta http-equiv="origin-trial" content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
        <meta http-equiv="origin-trial" content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
        <meta http-equiv="origin-trial" content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
        <meta http-equiv="origin-trial" content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
        <meta http-equiv="origin-trial" content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
        <script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2021030901.js" async></script>
        <script type="text/javascript" async src="https://ssl.google-analytics.com/ga.js"></script>
        <link rel="preload" href="https://adservice.google.co.in/adsid/integrator.js?domain=www.calculator.net" as="script">
        <script type="text/javascript" src="https://adservice.google.co.in/adsid/integrator.js?domain=www.calculator.net"></script>
        <script type="text/javascript" src="https://adservice.google.co.in/adsid/integrator.js?domain=www.calculator.net"></script>
        <link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=www.calculator.net" as="script">
        <script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=www.calculator.net"></script>
        <link rel="prefetch" href="https://d697cd8???.safeframe.googlesyndication.com/safeframe/1-0-37/html/container.html">
        <link rel="prefetch" href="https://tpc.googlesyndication.com/safeframe/1-0-37/html/container.html">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <title>login system!</title> -->
  </head>


  <body style="background-color: #303d4d;">
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-family: 'Montez', cursive;">Abhikya Nari</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html" style="font-family: 'Montez', cursive;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" style="font-family: 'Montez', cursive;">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" style="font-family: 'Montez', cursive;">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-family: 'Montez', cursive;">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>
  <!-- <a class="navbar-brand" href="#">Login System</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3 style="font-family: 'Montez', cursive;" color="white" ><?php echo "Welcome ". $_SESSION['username']?>! You can now use this Period Calculator</h3>
<hr>

</div>
<p>
    <br>
</p>

<div id="clear"></div>
        <div id="contentout">
             <div id="content">
                <h1 style="font-family: 'Montez', cursive;" class="text-light tex-left" >Period Calculator</h1>
            <p>
                "Use this calculator to estimate the future period days or the most probable ovulation days."
            </p>
            <div id="insmdc">
             <img src="//d26tpo4cm8sb6k.cloudfront.net/img/svg/insm.svg">
        </div>
        <table width="100%"  cellspacing="0" cellpadding="4" class="panel">
        <form name="calform"></form>
        <tbody>
             <tr>
            <td align="right" valign="middle" class="bigtext">
                <b>First Day "of Your Last Period:"</b>
            </td>
            <td valign="middle">
            <!-- <script>DateInput('today', true)</script> -->
            <input type="hidden" name="today" value="03/14/2021">
            <table cellpadding="0" cellspacing="2">
        <tbody>
        <tr>
        <td valign="middle">
        <select class="calendarDateInput" style="font-size:16px;" id="today_Month_ID" onchange="today_Object.changeMonth(this)">
        <option value="0">Jan</option>
        <option value="1">Feb</option>
        <option value="2" selected>Mar</option>
        <option value="3">Apr</option>
        <option value="4">May</option>
        <option value="5">Jun</option>
        <option value="6">Jul</option>
        <option value="7">Aug</option>
        <option value="8">Sep</option>
        <option value="9">Oct</option>
        <option value="10">Nov</option>
        <option value="11">Dec</option>
        </select>
        </td>
        <td valign="middle">
        <select class="calenderDataInput" style="font-size:16px;" id="today_Day_ID" onchange="today_Object.changeDay(this)">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option selected>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
        </select>
        </td>
        <td valign="middle">
    <td valign="middle">
        <input class="calendarDateInput" style="font-size:16px;" type="text" id="today_Year_ID" size="6" maxlength="6" title="Year" value="2021" onkeypress="return YearDigitsOnly(window.<td valign=middle>event)" onkeyup="today_Object.checkYear(this)" onblur="today_Object.fixYear(this)">
        </td>
        <td valign="middle">
        <a id="today_ID_Link" href="javascript:today_Object.show()" onmouseover="return today_Object.iconHover(true)" onmouseout="return today_Object.iconHover(false)">
        <img src="/img/svg/calendar.svg" align="baseline" title="Calendar">
        </a>
        "&nbsp;"
        <span id="today_ID" style="position:absolute;visibility:hidden;margin-top: 32px;margin-left:-189px;width:189px;background-color:white;border:1px solid dimgray;" onmouseover="today_Object.handleTimer(true)" onmouseout="today_Object.handleTimer(false)">
        <table width="189" cellspacing="0" cellpadding="1">
        
        <tbody>
        <tr style="background-color:buttonface;">
        <td id="today_Previous_ID" style="cursor:default" align="center" class="calendarDateInput" onclick="today_Object.previous.go()" onmousedown="VirtualButton(this,true)" onmouseup="VirtualButton(this,false)" onmouseover="return today_Object.previous.hover(this,true)" onmouseout="return today_Object.previous.hover(this,false)" title="February">
        <img src="/img/prev.gif">
        </td>
        <td id="today_Current_ID" style="cursor:pointer" align="center" class="calendarDateInput" colspan="5" onclick="today_Object.displayed.goCurrent()" onmouseover="self.status='Click to view March 2021';return true;" onmouseout="self.status='';return true;" title="Show Current Month">March 2021</td>
        
        <td id="today_Next_ID" style="cursor:default" align="center" class="calendarDateInput" onclick="today_Object.next.go()" onmousedown="VirtualButton(this,true)" onmouseup="VirtualButton(this,false)" onmouseover="return today_Object.next.hover(this,true)" onmouseout="return today_Object.next.hover(this,false)" title="April">
        
        <img src="/img/next.gif">
        </td>
        </tr>
        
        <tr>
        <td width="27" align="center" class="calendarDateInput" style="height:24;width:27;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;">S</td>
        <td width="27" align="center" class="calendarDateInput" style="height:24;width:27;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;">M</td>
        <td width="27" align="center" class="calendarDateInput" style="height:24;width:27;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;">T</td>
        <td width="27" align="center" class="calendarDateInput" style="height:24;width:27;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;">W</td>
        <td width="27" align="center" class="calendarDateInput" style="height:24;width:27;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;">T</td>
        <td width="27" align="center" class="calendarDateInput" style="height:24;width:27;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;">F</td>
        <td width="27" align="center" class="calendarDateInput" style="height:24;width:27;font-weight:bold;border-top:1px solid dimgray;border-bottom:1px solid dimgray;">S</td>
        </tr>
        </tbody>
        </table>
        <span id="today_DayTable_ID">
        <table width="189" cellspacing="0" cellpadding="1" style="cursor:default">
        <tbody>
        <tr>
        <td class="calendarDateInput" style="height:24">&nbsp;</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(1)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',1)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">1</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(2)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',2)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">2</td>
        
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(3)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',3)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">3</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(4)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',4)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">4</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(5)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',5)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">5</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(6)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',6)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">6</td>
        </tr>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:white;font-weight:bold;border:1px solid darkred;padding:0px;;background-color:lightgrey" onclick="today_Object.pickDay(14)" onmouseover="return today_Object.displayed.dayHover(this,true,'lightgrey',14)" onmouseout="return today_Object.displayed.dayHover(this,false,'lightgrey')">14</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(15)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',15)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">15</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(16)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',16)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">16</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(17)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',17)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">17</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(18)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',18)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">18</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(19)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',19)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">19</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(20)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',20)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">20</td>
        </tr>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(21)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',21)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">21</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(22)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',22)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">22</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(23)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',23)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">23</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(24)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',24)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">24</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(25)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',25)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">25</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(26)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',26)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">26</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(27)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',27)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">27</td>
        </tr>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(28)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',28)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">28</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(29)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',29)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">29</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(30)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',30)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">30</td>
        <td align="center" class="calendarDateInput" style="cursor:default;height:24;width:27;color:black;;background-color:white" onclick="today_Object.pickDay(31)" onmouseover="return today_Object.displayed.dayHover(this,true,'white',31)" onmouseout="return today_Object.displayed.dayHover(this,false,'white')">31</td>
        <td class="calendarDateInput" style="height:24">&nbsp;</td>
        <td class="calendarDateInput" style="height:24">&nbsp;</td>
        <td class="calendarDateInput" style="height:24">&nbsp;</td>
        </tr>
        </tbody>
        </table>
        </span>
        </span>
        </td>
        </tr>
        </tbody>
        </table>
        </td>
        </tr>
        <tr>
        <td align="right" valign="middle" class="bigtext"><b>How long did it last?</b></td>
        <td valign="middle">
        <select id="clength" name="clength">
        <option value="1">1 day</option>
        <option value="2">2 days</option>
        <option value="3">3 days</option>
        <option value="4">4 days</option>
        <option value="5" selected>5 days</option>
        <option value="6">6 days</option>
        <option value="7">7 days</option>
        <option value="8">8 days</option>
        <option value="9">9 days</option>
        
        <option value="10">10 days</option>
        </select>
        </td>
        <tr>
        <td align="right" valign="middle" class="bigtext"><b>Average Length of Cycles:</b></td>
        <td valign="middle">
        <select id="ccycle" name="ccycle">
        <option value="22">22 days</option>
        <option value="23">23 days</option>
        <option value="24">24 days</option>
        <option value="25">25 days</option>
        <option value="26">26 days</option>
        <option value="27">27 days</option>
        <option value="28">28 days</option>
        <option value="29">29 days</option>
        <option value="30">30 days</option>
        <option value="31">31 days</option>
        <option value="32">32 days</option>
        <option value="33">33 days</option>
        <option value="34">34 days</option>
        <option value="35">35 days</option>
        <option value="36">36 days</option>
        <option value="37">37 days</option>
        <option value="38">38 days</option>
        <option value="39">39 days</option>
        <option value="40">40 days</option>
        <option value="41">41 days</option>
        <option value="42">42 days</option>
        <option value="43">43 days</option>
        <option value="44">44 days</option>
        </select>
        </td>
        <tr>
        <td align="right" valign="middle">&nbsp;</td>
        <td valign="middle">
        <input name="printit" value="0" type="hidden">
        <button type="Calculate"  class="btn btn-outline-dark mt-4" ><a href="sum.html"  style="margin: top 10px;">Calculate</a></button>
        <!-- <input type="image" src="//d26tpo4cm8sb6k.cloudfront.net/img/svg/calculate.svg"  class="btn btn-outline-dark mt-4" value="Calculate" alt="Calculate" href="sum.html" style="margin-top:10px;"> -->
        <!-- <button type="Calculate"  class="btn btn-outline-dark mt-4"><a href="sum.html" style="margin-top:10px;">Calculate</a>-->
        </button> 
        <!--src="//d26tpo4cm8sb6k.cloudfront.net/img/svg/calculate.svg" -->
        </td>
        </tr>
        </tbody>
        </table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="row">
              <div class="col text-white">
      
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-5">

                  <div class="text-center">
                    <h6 style="margin-top: 40%;">abhikyanari@gmail.com</h6>
                  </div>

                  <div  class="text-center">
        
                    <h6  style=" margin-top: 65%;">
                 &copy; 2021 | SAFR</h6>
                  </div>
                </div>

              </div>
            </div>



  </body>
</html>
