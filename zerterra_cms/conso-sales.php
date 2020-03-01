<?php
session_start();
if(!isset($_SESSION["admin"]))
{
 header("location:../Log-in.php");
}
include '../PagesFunction/connection.php';

include 'Buttons/requestButtonFunction.php';

?>




<!DOCTYPE html>
<html>
<title>Consolidate/sales</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="icon" href="../images/plainlogo.png" type="image/x-icon" />
<link href="assets/css/bulma-calendar.min.css" rel="stylesheet">
<script src="/assets/js/bulma-calendar.min.js"></script>


<!-- <link rel="stylesheet" href="sass/request.css"> -->
<link rel="stylesheet" href="sass/conso.css">
<body>

  <?php
  include 'Pages/requestViewPage.php'; 
  include 'admin-header.php';
//   include 'Buttons/requestSearch.php'
  ?>



<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" id="close">&times;</button>
  <a href="index.php" class="w3-bar-item w3-button" id="item-hover" ><i class="fas fa-th-large"></i> &nbsp Dashboard</a>
  <a href="admin.php" class="w3-bar-item w3-button" id="item-hover"> <i class="fas fa-user-shield"></i> &nbsp Admin</a>
  <a href="users.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-user"></i> &nbsp Users</a>
  <a class="w3-bar-item w3-button w3-dropdown-hover modal-button" id="sendmodal" data-target="#ordersModal" aria-haspopup="true"><i class="fas fa-cubes"></i> &nbsp Orders</a>
  <a href="request.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-envelope-open-text"></i> &nbsp Request</a>
  <a href="sales.php" class="w3-bar-item w3-button" id="item-hover"><i class="fas fa-hand-holding-usd"></i> &nbsp Sales</a>
  <button onclick="document.getElementById('id01').style.display='block'" href="consolidate.php" class="w3-bar-item w3-button" id="dashboard" ><i class="fas fa-print"></i> &nbsp Consolidate</button>
</div>

  <div class="w3-main" style="margin-left:200px">
    <div class="w3-teal">
      <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
    </div>


    <div class="w3-container">
      <div class="columns">
        <div class="column">
          <h1 class="button-category">SALES</h1>
        </div>
      </div>

     <!--  -->


     <div id="datetimePicker4f8b9756-d822-4f77-b3fe-7eb7cb37547c">
    <div class="datetimepicker-dummy is-primary">
      <div class="datetimepicker-dummy-wrapper">
        <input placeholder="Check-in" readonly="readonly" class="datetimepicker-dummy-input is-datetimepicker-range" type="text">
        <input placeholder="Check-out" readonly="readonly" class="datetimepicker-dummy-input" type="text">
      <input id="datepickerDemoRangeLabels" class="input is-hidden" data-is-range="true" type="text"></div>
      <button class="datetimepicker-clear-button">＋</button>
    </div>
    <div class="dateimepicker-wrapper">
        <div class="modal-background is-hidden"></div>
        <div class="datetimepicker is-primary is-datetimepicker-default is-active" style="position: absolute;">
          <div class="datetimepicker-container"><div class="datetimepicker-header">
		<div class="datetimepicker-selection-details">
			<div class="datetimepicker-selection-from">Check-in</div>
			<div class="datetimepicker-selection-start">
				<div class="datetimepicker-selection-wrapper">
					<div class="datetimepicker-selection-day">01</div>
					<div class="datetimepicker-selection-date">
						<div class="datetimepicker-selection-month">March 2020</div>
						<div class="datetimepicker-selection-weekday">Sunday</div>
					</div>
				</div>
				<div class="datetimepicker-selection-time">
					<div class="datetimepicker-selection-time-icon">
						<figure class="image is-16x16">
							<svg version="1.1" x="0px" y="0px" viewBox="0 0 60 60" xml:space="preserve">
      <g>
        <path fill="currentcolor" d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"></path>
	      <path fill="currentcolor" d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"></path>
      </g>
    </svg>
						</figure>
					</div>
					<div class="datetimepicker-selection-hour">00:00</div>
				</div>
			</div>
		</div>
		
		<div class="datetimepicker-selection-details">
			<div class="datetimepicker-selection-to">Check-out</div>
			<div class="datetimepicker-selection-end">
				<div class="datetimepicker-selection-wrapper">
					<div class="datetimepicker-selection-day">--</div>
					<div class="datetimepicker-selection-date">
						<div class="datetimepicker-selection-month"></div>
						<div class="datetimepicker-selection-weekday is-hidden"></div>
					</div>
				</div>
				<div class="datetimepicker-selection-time">
					<div class="datetimepicker-selection-time-icon">
						<figure class="image is-16x16">
							<svg version="1.1" x="0px" y="0px" viewBox="0 0 60 60" xml:space="preserve">
      <g>
        <path fill="currentcolor" d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"></path>
	      <path fill="currentcolor" d="M30,6c-0.552,0-1,0.447-1,1v23H14c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V7C31,6.447,30.552,6,30,6z"></path>
      </g>
    </svg>
						</figure>
					</div>
					<div class="datetimepicker-selection-hour">23:59</div>
				</div>
			</div>
		</div>
	</div><div class="datepicker is-active">
    <div class="datepicker-nav">
        <button class="datepicker-nav-previous button is-small is-text"><svg viewBox="0 0 50 80" xml:space="preserve">
      <polyline fill="none" stroke-width=".5em" stroke-linecap="round" stroke-linejoin="round" points="45.63,75.8 0.375,38.087 45.63,0.375 "></polyline>
    </svg></button>
        <div class="datepicker-nav-month-year">
          <div class="datepicker-nav-month">March</div>
          &nbsp;
          <div class="datepicker-nav-year">2020</div>
        </div>
        <button class="datepicker-nav-next button is-small is-text"><svg viewBox="0 0 50 80" xml:space="preserve">
      <polyline fill="none" stroke-width=".5em" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "></polyline>
    </svg></button>
      </div>
      <div class="datepicker-body">
        <div class="datepicker-dates is-active"><div class="datepicker-weekdays">
		<div class="datepicker-date">Sun</div><div class="datepicker-date">Mon</div><div class="datepicker-date">Tue</div><div class="datepicker-date">Wed</div><div class="datepicker-date">Thu</div><div class="datepicker-date">Fri</div><div class="datepicker-date">Sat</div>
	</div><div class="datepicker-days"><div data-date="Sun Mar 01 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month datepicker-range-start">
      <button class="date-item is-today is-active" type="button">1</button>
  </div><div data-date="Mon Mar 02 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">2</button>
  </div><div data-date="Tue Mar 03 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">3</button>
  </div><div data-date="Wed Mar 04 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">4</button>
  </div><div data-date="Thu Mar 05 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">5</button>
  </div><div data-date="Fri Mar 06 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">6</button>
  </div><div data-date="Sat Mar 07 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">7</button>
  </div><div data-date="Sun Mar 08 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">8</button>
  </div><div data-date="Mon Mar 09 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">9</button>
  </div><div data-date="Tue Mar 10 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">10</button>
  </div><div data-date="Wed Mar 11 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">11</button>
  </div><div data-date="Thu Mar 12 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">12</button>
  </div><div data-date="Fri Mar 13 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">13</button>
  </div><div data-date="Sat Mar 14 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">14</button>
  </div><div data-date="Sun Mar 15 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">15</button>
  </div><div data-date="Mon Mar 16 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">16</button>
  </div><div data-date="Tue Mar 17 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">17</button>
  </div><div data-date="Wed Mar 18 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">18</button>
  </div><div data-date="Thu Mar 19 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">19</button>
  </div><div data-date="Fri Mar 20 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">20</button>
  </div><div data-date="Sat Mar 21 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">21</button>
  </div><div data-date="Sun Mar 22 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">22</button>
  </div><div data-date="Mon Mar 23 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">23</button>
  </div><div data-date="Tue Mar 24 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">24</button>
  </div><div data-date="Wed Mar 25 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">25</button>
  </div><div data-date="Thu Mar 26 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">26</button>
  </div><div data-date="Fri Mar 27 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">27</button>
  </div><div data-date="Sat Mar 28 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">28</button>
  </div><div data-date="Sun Mar 29 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">29</button>
  </div><div data-date="Mon Mar 30 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">30</button>
  </div><div data-date="Tue Mar 31 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date is-current-month">
      <button class="date-item" type="button">31</button>
  </div><div data-date="Wed Apr 01 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date">
      <button class="date-item" type="button">1</button>
  </div><div data-date="Thu Apr 02 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date">
      <button class="date-item" type="button">2</button>
  </div><div data-date="Fri Apr 03 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date">
      <button class="date-item" type="button">3</button>
  </div><div data-date="Sat Apr 04 2020 00:00:00 GMT+0800 (Australian Western Standard Time)" class="datepicker-date">
      <button class="date-item" type="button">4</button>
  </div></div></div>
        <div class="datepicker-months"><div class="datepicker-month" data-month="01">Jan</div><div class="datepicker-month" data-month="02">Feb</div><div class="datepicker-month is-active" data-month="03">Mar</div><div class="datepicker-month" data-month="04">Apr</div><div class="datepicker-month" data-month="05">May</div><div class="datepicker-month" data-month="06">Jun</div><div class="datepicker-month" data-month="07">Jul</div><div class="datepicker-month" data-month="08">Aug</div><div class="datepicker-month" data-month="09">Sep</div><div class="datepicker-month" data-month="10">Oct</div><div class="datepicker-month" data-month="11">Nov</div><div class="datepicker-month" data-month="12">Dec</div></div>
        <div class="datepicker-years"><div class="datepicker-year" data-year="1970"><span class="item">1970</span></div><div class="datepicker-year" data-year="1971"><span class="item">1971</span></div><div class="datepicker-year" data-year="1972"><span class="item">1972</span></div><div class="datepicker-year" data-year="1973"><span class="item">1973</span></div><div class="datepicker-year" data-year="1974"><span class="item">1974</span></div><div class="datepicker-year" data-year="1975"><span class="item">1975</span></div><div class="datepicker-year" data-year="1976"><span class="item">1976</span></div><div class="datepicker-year" data-year="1977"><span class="item">1977</span></div><div class="datepicker-year" data-year="1978"><span class="item">1978</span></div><div class="datepicker-year" data-year="1979"><span class="item">1979</span></div><div class="datepicker-year" data-year="1980"><span class="item">1980</span></div><div class="datepicker-year" data-year="1981"><span class="item">1981</span></div><div class="datepicker-year" data-year="1982"><span class="item">1982</span></div><div class="datepicker-year" data-year="1983"><span class="item">1983</span></div><div class="datepicker-year" data-year="1984"><span class="item">1984</span></div><div class="datepicker-year" data-year="1985"><span class="item">1985</span></div><div class="datepicker-year" data-year="1986"><span class="item">1986</span></div><div class="datepicker-year" data-year="1987"><span class="item">1987</span></div><div class="datepicker-year" data-year="1988"><span class="item">1988</span></div><div class="datepicker-year" data-year="1989"><span class="item">1989</span></div><div class="datepicker-year" data-year="1990"><span class="item">1990</span></div><div class="datepicker-year" data-year="1991"><span class="item">1991</span></div><div class="datepicker-year" data-year="1992"><span class="item">1992</span></div><div class="datepicker-year" data-year="1993"><span class="item">1993</span></div><div class="datepicker-year" data-year="1994"><span class="item">1994</span></div><div class="datepicker-year" data-year="1995"><span class="item">1995</span></div><div class="datepicker-year" data-year="1996"><span class="item">1996</span></div><div class="datepicker-year" data-year="1997"><span class="item">1997</span></div><div class="datepicker-year" data-year="1998"><span class="item">1998</span></div><div class="datepicker-year" data-year="1999"><span class="item">1999</span></div><div class="datepicker-year" data-year="2000"><span class="item">2000</span></div><div class="datepicker-year" data-year="2001"><span class="item">2001</span></div><div class="datepicker-year" data-year="2002"><span class="item">2002</span></div><div class="datepicker-year" data-year="2003"><span class="item">2003</span></div><div class="datepicker-year" data-year="2004"><span class="item">2004</span></div><div class="datepicker-year" data-year="2005"><span class="item">2005</span></div><div class="datepicker-year" data-year="2006"><span class="item">2006</span></div><div class="datepicker-year" data-year="2007"><span class="item">2007</span></div><div class="datepicker-year" data-year="2008"><span class="item">2008</span></div><div class="datepicker-year" data-year="2009"><span class="item">2009</span></div><div class="datepicker-year" data-year="2010"><span class="item">2010</span></div><div class="datepicker-year" data-year="2011"><span class="item">2011</span></div><div class="datepicker-year" data-year="2012"><span class="item">2012</span></div><div class="datepicker-year" data-year="2013"><span class="item">2013</span></div><div class="datepicker-year" data-year="2014"><span class="item">2014</span></div><div class="datepicker-year" data-year="2015"><span class="item">2015</span></div><div class="datepicker-year" data-year="2016"><span class="item">2016</span></div><div class="datepicker-year" data-year="2017"><span class="item">2017</span></div><div class="datepicker-year" data-year="2018"><span class="item">2018</span></div><div class="datepicker-year" data-year="2019"><span class="item">2019</span></div><div class="datepicker-year is-active" data-year="2020"><span class="item">2020</span></div><div class="datepicker-year" data-year="2021"><span class="item">2021</span></div><div class="datepicker-year" data-year="2022"><span class="item">2022</span></div><div class="datepicker-year" data-year="2023"><span class="item">2023</span></div><div class="datepicker-year" data-year="2024"><span class="item">2024</span></div><div class="datepicker-year" data-year="2025"><span class="item">2025</span></div><div class="datepicker-year" data-year="2026"><span class="item">2026</span></div><div class="datepicker-year" data-year="2027"><span class="item">2027</span></div><div class="datepicker-year" data-year="2028"><span class="item">2028</span></div><div class="datepicker-year" data-year="2029"><span class="item">2029</span></div><div class="datepicker-year" data-year="2030"><span class="item">2030</span></div><div class="datepicker-year" data-year="2031"><span class="item">2031</span></div><div class="datepicker-year" data-year="2032"><span class="item">2032</span></div><div class="datepicker-year" data-year="2033"><span class="item">2033</span></div><div class="datepicker-year" data-year="2034"><span class="item">2034</span></div><div class="datepicker-year" data-year="2035"><span class="item">2035</span></div><div class="datepicker-year" data-year="2036"><span class="item">2036</span></div><div class="datepicker-year" data-year="2037"><span class="item">2037</span></div><div class="datepicker-year" data-year="2038"><span class="item">2038</span></div><div class="datepicker-year" data-year="2039"><span class="item">2039</span></div><div class="datepicker-year" data-year="2040"><span class="item">2040</span></div><div class="datepicker-year" data-year="2041"><span class="item">2041</span></div><div class="datepicker-year" data-year="2042"><span class="item">2042</span></div><div class="datepicker-year" data-year="2043"><span class="item">2043</span></div><div class="datepicker-year" data-year="2044"><span class="item">2044</span></div><div class="datepicker-year" data-year="2045"><span class="item">2045</span></div><div class="datepicker-year" data-year="2046"><span class="item">2046</span></div><div class="datepicker-year" data-year="2047"><span class="item">2047</span></div><div class="datepicker-year" data-year="2048"><span class="item">2048</span></div><div class="datepicker-year" data-year="2049"><span class="item">2049</span></div><div class="datepicker-year" data-year="2050"><span class="item">2050</span></div><div class="datepicker-year" data-year="2051"><span class="item">2051</span></div><div class="datepicker-year" data-year="2052"><span class="item">2052</span></div><div class="datepicker-year" data-year="2053"><span class="item">2053</span></div><div class="datepicker-year" data-year="2054"><span class="item">2054</span></div><div class="datepicker-year" data-year="2055"><span class="item">2055</span></div><div class="datepicker-year" data-year="2056"><span class="item">2056</span></div><div class="datepicker-year" data-year="2057"><span class="item">2057</span></div><div class="datepicker-year" data-year="2058"><span class="item">2058</span></div><div class="datepicker-year" data-year="2059"><span class="item">2059</span></div><div class="datepicker-year" data-year="2060"><span class="item">2060</span></div><div class="datepicker-year" data-year="2061"><span class="item">2061</span></div><div class="datepicker-year" data-year="2062"><span class="item">2062</span></div><div class="datepicker-year" data-year="2063"><span class="item">2063</span></div><div class="datepicker-year" data-year="2064"><span class="item">2064</span></div><div class="datepicker-year" data-year="2065"><span class="item">2065</span></div><div class="datepicker-year" data-year="2066"><span class="item">2066</span></div><div class="datepicker-year" data-year="2067"><span class="item">2067</span></div><div class="datepicker-year" data-year="2068"><span class="item">2068</span></div><div class="datepicker-year" data-year="2069"><span class="item">2069</span></div></div>
      </div>
    </div><div class="timepicker">
   
</div>
    </div>
  </div>





    <!--  -->

      <section class = "section">
        <div class = "container"> 

         <table class = "table">
          <thead>
           <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Amount</th>

   
        </tr>
      </thead>

            <td></td>
            <td></td>
            <td></td>
            <td></td>

            </tr>
                       

      </tbody>
    </table>
    <nav class="pagination is-small" role="navigation" aria-label="pagination">
      <a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=".($page - 1); } ?>" class="pagination-previous" >Previous</a>
      <a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=".($page + 1); } ?>" class="pagination-next">Next page</a>
      <ul class="pagination-list">
        <li><a href="?page=1" class="pagination-link" >1</a></li>
        <li>
          <span class="pagination-ellipsis">&hellip;</span>
        </li>
        <li><a href="?page=<?php echo $total_pages; ?>" class="pagination-link"><?php echo $total_pages; ?></a></li>
      </ul>
    </nav>
  </div>
</section>

</div>


<!-- modal transaction -->

<div class="container" id="modal-container">

  <div id="ordersModal" class="modal  modal-fx-slideTop">
    <div class="modal-background"></div>
    <div class="modal-content1">
     <div class="modal-card1">

      <section class="modal-card-body1" id="modal-card-body">
        <!-- Content ... -->
        <div class="field">
          <div class="control">
            <div class="card" id="modal-card">
              <div class="card-content" id="trans-content">
                <button class="modal-close" id="close9"></button>
                <div class="columns is-mobile">
                  <div class="column is-6">
                    <a href="pending.php">
                      <div class="card" id="card-pending" style="background:url(images/pendingicon.png);  background-size: 100% 100%; background-repeat: no-repeat; background-size: cover;">
                       <!-- PENDING -->
                     </div>
                   </a>
                 </div>
                 <div class="column is-6">
                  <a href="approved.php">
                    <div class="card" id="card-approve" style="background:url(images/approvedicon.png);  background-size: 100% 100%; background-repeat: no-repeat; background-size: cover;">
                        <!-- <div class="card-content" >
                          <a href="approved.php" id="pending">
                            APPROVED
                          </a>
                        </div> -->
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- <button class="button is-success is-medium"  aria-label="close" id="close9">Close</button> -->
          </div>
        </section>

      </div>
    </div>
  </div>





<!-- Modal -->

<div id="id01" class="w3-modal">
    <div class="w3-modal-content" id="content">
      <div class="w3-container" style="border-radius:8px" >
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>

        <div class="w3-container" >
            <!-- <h2>Card Content</h2>
            <p>Add containers inside the card to create different sections:</p> -->

            <div class="columns">
                <div class="column  is-3">
                <a href="conso-sales.php">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con"  style="background-color: #99cc67;">
                    <center><p id="text1">SALES</p></center>
                    </div>
                    </div></a>
                </div>

                <div class="column  is-3">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con" style="background-color: #7cd0de;">
                       <center><p id="text1">USERS</p></center>
                        
                    </div>
                    </div>
                </div>

                <div class="column  is-3">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con" style="background-color: #f7de62;">
                    <center><p id="text1">TRANSACTION HISTORY</p></center>
                    </div>
                    </div>
                </div>

                <div class="column  is-3">
                    <div class="w3-card-4" >
                    <div class="w3-container" id="card-con" style="background-color: #fcc174;">
                    <center><p id="text1">ACTIVITY LOG</p></center>
                    </div>
                    </div>
                </div>
            </div>



           
    </div>

      </div>
    </div>


  



  <!-- modal script -->

  <!-- end script -->

  <script>
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
    }
    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
    }
    document.querySelectorAll('.modal-button').forEach(function(el) {
      el.addEventListener('click', function() {
        var target = document.querySelector(el.getAttribute('data-target'));

        target.classList.add('is-active');

        target.querySelector('.modal-close').addEventListener('click', function(){
          target.classList.remove('is-active');
        });
      });
    });
  </script>


</body>
</html>
