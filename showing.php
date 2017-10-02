<!DOCTYPE html>
<html>
 <head>
    <link href="stylesheet.css" rel="stylesheet">
    
    <script>
     function populate(s1,s2)
{
var s1 = document.getElementById(s1);
var s2 = document.getElementById(s2);
s2.innerHTML ="";
if(s1.value=="AC")
{
var optionArray= ["|", "FullPrice|Wednesday 9pm", "FullPrice|Thursday 9pm", "FullPrice|Friday 9pm" , "FullPrice|Saturday 9pm", "FullPrice|Sunday 9pm"];
}

else if(s1.value=="RC")
{

var optionArray=  ["|", "Discount|Monday 9pm", "Discount|Tuesday 9pm", "Discount|Wednesday 1pm" , "Discount|Thursday 1pm", "Discount|Friday 1pm" , "FullPrice|Saturday 6pm", "FullPrice|Sunday 6pm"];

}


else if(s1.value=="CH")
{
var optionArray= ["|", "Discount|Monday 1pm", "Discount|Tuesday 1pm", "FullPrice|Wednesday 6pm" , "FullPrice|Thursday 6pm", "FullPrice|Friday 6pm" , "FullPrice|Saturday 12pm", "FullPrice|Sunday 12pm"];
}

else if(s1.value=="AF")
{
var optionArray= ["|", "Discount|Monday 6pm", "Discount|Tuesday 6pm", "FullPrice|Saturday 3pm", "FullPrice|Sunday 3pm"];
}




for(var loop1 in optionArray)
{
var pair = optionArray[loop1].split("|");
var newOption = document.createElement("option");
newOption.value=pair[0];
newOption.innerHTML = pair[1];
s2.options.add(newOption);
}


}
        
        function calculatePrice()
{

  var numSeats = parseInt(document.getElementById("seats[SF]").value);
    var numSeats2 = parseInt(document.getElementById("seats[SP]").value);
      var numSeats3 = parseInt(document.getElementById("seats[SC]").value);
   
  
  

  
  var tt = document.getElementById("Session").value;
  
  
  var seatPrice;
    var seatPrice2;
     var seatPrice3;
   



console.log("numseats =" + numSeats);



if(tt=="FullPrice")
{
seatPrice = 18.50;
    seatPrice2= 15.50;
     seatPrice3= 12.50;
   

}
else if(tt=="Discount")
{
seatPrice = 12.50;
    seatPrice2 = 10.50;
     seatPrice3= 8.50;
   

}


else
{
seatPrice =0;
        seatPrice2 = 0;
    seatPrice3 =0;
  

}
  var salePrice = (seatPrice * numSeats) + (seatPrice2 * numSeats2) + (seatPrice3 * numSeats3) ;
  
  document.getElementById("priceDisplay").innerHTML = salePrice.toFixed(2);
  document.getElementById("price").value = salePrice.toFixed(2);
  
  return true;



}
        
        
        
           function calculatePrice2()
{

  var numSeats = parseInt(document.getElementById("seats[FA]").value);
    var numSeats2 = parseInt(document.getElementById("seats[FC]").value);
      
  
  var tt = document.getElementById("Session").value;
  
  
  var seatPrice;
    var seatPrice2;
   
   



console.log("numseats =" + numSeats);



if(tt=="FullPrice")
{
seatPrice = 30;
    seatPrice2= 25;
    
   

}
else if(tt=="Discount")
{
seatPrice = 25;
    seatPrice2 = 20;
    
   

}


else
{
seatPrice =0;
        seatPrice2 = 0;
    
  

}
  var salePrice = (seatPrice * numSeats) + (seatPrice2 * numSeats2)  ;
  
  document.getElementById("priceDisplay2").innerHTML = salePrice.toFixed(2);
  document.getElementById("price2").value = salePrice.toFixed(2);
  
  return true;



}
        
        
              
        function calculatePrice3()
{

  var numSeats = parseInt(document.getElementById("seats[BA]").value);
    var numSeats2 = parseInt(document.getElementById("seats[BF]").value);
      var numSeats3 = parseInt(document.getElementById("seats[BC]").value);
   
  
  

  
  var tt = document.getElementById("Session").value;
  
  
  var seatPrice;
    var seatPrice2;
     var seatPrice3;
   



console.log("numseats =" + numSeats);



if(tt=="FullPrice")
{
seatPrice = 33;
    seatPrice2= 30;
     seatPrice3= 30;
   

}
else if(tt=="Discount")
{
seatPrice = 22;
    seatPrice2 = 20;
     seatPrice3= 20;
   

}


else
{
seatPrice =0;
        seatPrice2 = 0;
    seatPrice3 =0;
  

}
  var salePrice = (seatPrice * numSeats) + (seatPrice2 * numSeats2) + (seatPrice3 * numSeats3) ;
  
  document.getElementById("priceDisplay3").innerHTML = salePrice.toFixed(2);
  document.getElementById("price3").value = salePrice.toFixed(2);
  
  return true;



}
        


     
     </script>
     
     
     
     
     
    </head>
  
	
	<body>
        
        
        <div class="topBanner">
        <img class = "Banner" src="../img/logoFin.png" width=640 height=400 alt='Silverado logo' />
        </div>
        
        
		<nav>
			<ul>
				<li><a href="../a3/index.php" target="_blank">Home</a></li>
				<li><a href="../a3/showing.php" target="_blank">Now Showing</a></li>
			</ul>	
		</nav>
        
        
        
		<main>
            
    <h1><b>Now showing </b></h1>
      <hr>
      
<div class="image123">
    <div class="imgContainer">
        <!-- Original image below sourced for educational purposes: http://www.joblo.com/movie-posters/2017/baby-driver -->
        <img src="../img/photo2.jpg"  alt='my photo' />
         <figcaption>Baby driver</figcaption>
            <figcaption><font size="3" color = "red">Comedy</font></figcaption>
            <p class ='hello'>Monday: 9pm</p>
            <p class ='hello'>Tuesday: 9pm</p>
            <p class ='hello'>Wednesday: 1pm</p>
            <p class ='hello'>Thursday: 1pm</p>
            <p class ='hello'>Friday: 1pm</p>
            <p class ='hello'>Saturday: 6pm</p>
            <p class ='hello'>Sunday: 6pm</p>
    </div>
    
    
    
    <div class="imgContainer">
          <!-- Original image below sourced for educational purposes: https://www.universalpictures.com/movies/despicable-me-3/posters -->
        <img src="../img/photo3.jpg" alt='my photo' />
        <figcaption>Despicable Me 3</figcaption>
        <figcaption><font size="3" color = "red">Children</font></figcaption>
            <p class ='hello'>Monday: 1pm</p>
            <p class ='hello'>Tuesday: 1pm</p>
            <p class ='hello'>Wednesday: 6pm</p>
            <p class ='hello'>Thursday: 6pm</p>
            <p class ='hello'>Friday: 6pm</p>
            <p class ='hello'>Saturday: 12pm</p>
            <p class ='hello'>Sunday: 12pm</p>
    </div>
    
    
    
    
    <div class="imgContainer">
          <!-- Original image below sourced for educational purposes: http://www.joblo.com/movie-posters/2017/spider-man-homecoming#image-34151 -->
         <img src="../img/photo4.jpg"  alt='my photo' />
         <figcaption>Spider-man: Homecoming</figcaption>
            <figcaption><font size="3" color = "red">Action</font></figcaption>
            <p class ='hello'>Monday: -</p>
            <p class ='hello'>Tuesday: -</p>
            <p class ='hello'>Wednesday: 9pm</p>
            <p class ='hello'>Thursday: 9pm</p>
            <p class ='hello'>Friday: 9pm</p>
            <p class ='hello'>Saturday: 9pm</p>
            <p class ='hello'>Sunday: 9pm</p>
    </div>
    
    
    
    <div class="imgContainer">
          <!-- Original image below sourced for educational purposes: http://www.rogerebert.com/reviews/the-battleship-island-2017 -->
         <img src="../img/photo5.jpg"  alt='my photo' />
         <figcaption>Battleship Island</figcaption>
        <figcaption><font size="3" color = "red">Foreign</font></figcaption>
            <p class ='hello'>Monday: 6pm</p>
            <p class ='hello'>Tuesday: 6pm</p>
            <p class ='hello'>Wednesday: -</p>
            <p class ='hello'>Thursday: -</p>
            <p class ='hello'>Friday: -</p>
            <p class ='hello'>Saturday: 3pm</p>
            <p class ='hello'>Sunday: 3pm</p>
    </div>
    
    
</div>
     
      
  <h1>Prices</h1>
      <div class = "Standard">
      <h3>Standard</h3>
       <img class ="seat" src="../img/StandardSeat.jpg" width= 500px; alt='my photo' />
      <table style="width:100%">
  <tr>
    <th>Seat option</th>
    <th>Mon - Tue(All day) Mon-Fri(1pm only)</th> 
    <th>Wed - Fri(after 1pm) Sat-Sun(All Day)</th>
  </tr>
  <tr>
    <td>Full</td>
    <td>$12.50</td>
    <td>$18.50</td>
  </tr>
  <tr>
    <td>Concession</td>
    <td>$10.50</td>
    <td>$15.50</td>
  </tr>
  <tr>
    <td>Child</td>
    <td>$8.50</td>
    <td>$12.50</td>
  </tr>
</table>
      </div>
      
      
      <div class = "Standard">
      <h3>First Class</h3>
       <img class ="seat2" src="../img/FirstClassSeat.jpg"  alt='my photo' />
       <table style="width:100%">
  <tr>
    <th>Seat option</th>
    <th>Mon - Tue</th> 
    <th>Wed - Fri</th>
  </tr>
  <tr>
    <td>Adult</td>
    <td>$25</td>
    <td>$30</td>
  </tr>
  <tr>
    <td>Child</td>
    <td>$20</td>
    <td>$25</td>
  </tr>
  
</table>
      </div>
      
      
      <div class = "Standard">
      <h3>Bean Bag</h3>
       <img class ="seat" src="../img/BeanBag.jpg"  alt='my photo' />
       <table style="width:100%">
  <tr>
    <th>Seat option</th>
    <th>Mon - Tue</th> 
    <th>Wed - Fri</th>
  </tr>
  <tr>
    <td>Adult</td>
    <td>$22</td>
    <td>$33</td>
  </tr>
  <tr>
    <td>Family</td>
    <td>$20</td>
    <td>$30</td>
  </tr>
    <tr>
    <td>Child</td>
    <td>$20</td>
    <td>$30</td>
  </tr>
  
</table>
      </div>
    
            <form method='post' action= "reservation.php">
      
    <fieldset><legend>Booking Form</legend>
      <p><label>Movie</label>
          <select id="Movie-List" name="Movie-List" onchange = "populate('Movie-List', 'Session'); calculatePrice(); calculatePrice2();">
          <option value= "" selected>Select movie</option>
          <option value= "RC" >Baby Driver</option>
          <option value= "CH" >Despicable Me 3</option>
          <option value= "AC" >Spider-man: Homecoming</option>
          <option value= "AF" >Battleship Island</option>
          </select></p>
        
        
   
        
      <p>
          <label>Session</label>
          <select id="Session" name="Session" onchange = "calculatePrice(); calculatePrice2(); calculatePrice3();">
         
          
      </select></p>
        
        
   
        
      <fieldset><legend>Seats</legend>
        <fieldset><legend>Standard</legend>
          <p><label>Adult</label>
              <select name="seats[SF]" id = "seats[SF]" onchange = "calculatePrice();" >
              
    <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
        
              </select></p>
          <p><label>Concession</label>
              <select id = "seats[SP]" name="seats[SP]"  onchange="calculatePrice();">
              
       <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
        
              
              
              </select></p>
            
            
          <p><label>Child</label>
              <select id ="seats[SC]"name= "seats[SC]"  onchange= "calculatePrice();">
                <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
        
              </select></p>
            
            <br/><br/>

Price: $
<span id = "priceDisplay"> ... </span><br/>
<input type ="hidden" id="price" name = "price"/>



        </fieldset>
        <fieldset><legend>First Class</legend>
          <p><label>Adult</label>
              <select id = "seats[FA]" name=seats[FA]  onchange= "calculatePrice2();">
              
                     <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
              </select></p>
            
            
          <p><label>Child</label>
              <select id ="seats[FC]" name=seats[FC]  onchange= "calculatePrice2();">
              
                      
                    <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
              </select></p>
            
              Price: $
<span id = "priceDisplay2"> ... </span><br/>
<input type ="hidden" id="price2" name = "price2"/>

        </fieldset>
          
        
 
          
    
        <fieldset><legend>Bean Bags</legend>
          <p><label>Adult</label>
              <select  id="seats[BA]" name="seats[BA]" onchange="calculatePrice3();">
              
                                 <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
              
              
              
              </select></p>
            
          <p><label>Family</label>
              <select id="seats[BF]" name=seats[BF] onchange="calculatePrice3();">
                                         <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
              
              
              </select></p>
          <p><label>Child</label>
              <select id="seats[BC]" name= "seats[BC]" onchange="calculatePrice3();">
                                                    <option value="0">...</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
              
              </select></p>
                     Price: $
<span id = "priceDisplay3"> ... </span><br/>
<input type ="hidden" id="price3" name = "price2"/>

        </fieldset>
      </fieldset>
        
        
        
                           Total 
        Price: $
<span id = "priceDisplay4"> ... </span><br/>
<input type ="hidden" id="price4" name = "price2"/>

      <p><button>Book</button></p>
    </fieldset>
                
                
  </form>
   
   
  
            
            
            
		</main>
        
	<footer>
		
       
			 &copy; Adib Sazali (s3630616) & &copy; Maxwell (s3668048)
             <script>
        document.write(new Date().getFullYear());
      </script>.
      All rights reserved. 
	</footer>	

	</body>
</html>