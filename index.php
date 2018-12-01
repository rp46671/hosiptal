<?php 

session_start();

date_default_timezone_set('Asia/Kolkata');
$con=mysql_connect("localhost" ,"root" ,"");
$db=mysql_select_db("hospital",$con);

$name=$_POST["n1"];
$lastname=$_POST["n2"];
$parentname=$_POST["n3"];
$phone=$_POST["n4"];
$dob=$_POST[n8];
$age=$_POST["n9"];
$city=$_POST["n5"];
$address=$_POST["a1"];
$state=$_POST["s1"];
$pincode=$_POST["p1"];
$country=$_POST["c1"];
$doctorname=$_POST["d1"];
$names=$_POST["search"];
$amount=$_POST["amount"];
$date=$_POST["d2"]." ". date('h:i:s A');
if(isset($_POST["b1"]))
{ 

 $sql=mysql_query("insert into personal values('','$name','$lastname','$parentname','$phone','$dob','$age','$city','$address','$state','$pincode','$country','$doctorname','$date','$amount')");
  if($sql)
  {
   echo"data inserted";
  }
	else
	{	
	echo"try again";
	}
	
}	
?>

<script>
	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("printHere").innerHTML = this.responseText;
		}
  };
  
  xhttp.open("GET", "calldata.php", true);
  xhttp.send();
</script>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title> Hospital Form </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta charset="utf-8"/>
      <meta name="keywords" content="Hospital Order Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500,600" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   </head>
   <body>
    <h1 >
      <div class="topnav">
	<a class="active" href="index.php">Home</a>
	<a href="#about.php">About</a>
	<a href="#contact.php">Contact</a>
	<a >totally rs<span id="printHere"></span></a>
	<div class="search-container">
		<form action="searchpage.php" method ="post">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit" name="sb1"><i class="fa fa-search"></i></button>
		</form>
  </div>
</div>
      </h1>
      <div class="art-bothside">
         <form method="POST" action="">
            <div class="info-agile-persnal">
               <h3>Personal Details</h3>
               <div class="form-group">
                  <div class="form-left-w3ls">
                     <input type="text" class="form-control" placeholder="Name" name="n1" id="n1">
                  </div>
                  <div class="form-right-w3ls">
                     <input type="text" class="form-control" placeholder="Last Name"name="n2" id="n2">
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="form-group">
                  <div class="form-left-w3ls">
                     <input type="text" class="form-control" placeholder="Parent Name"name="n3" id="n3">
                  </div>
                  <div class="form-right-w3ls">
                     <input type="text" class="form-control" placeholder="Phone"name="n4" id="n4">
                  </div>
                  <div class="clear"></div>
               </div>
			   <div class="form-group">
                  <div class="form-left-w3ls">
                     <input type="date" class="form-control" placeholder="Date of birthday"name="n8" id="n8">
                  </div>
                  <div class="form-right-w3ls">
                     <input type="number" class="form-control" placeholder="Age"name="n9" id="n9">
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="form-group">
                  <div class="form-mid-w3ls">
                     <input type="text" placeholder="City" required=""name="n5" id="n5">
                  </div>
                  <div class="form-mid-w3ls">
                     <input type="text" placeholder="Address" required=""name="a1" id="a1">
                  </div>
				
                  
				  <div class="form-mid-w3ls">
                     <select class="form-control country-buttom" name ="s1" id="s1">
                        <option value="">Select State</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
						<option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
						<option value="Jammu & Kashmir">Jammu & Kashmir</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Karnataka">Karnataka</option>
						<option value="Kerala">Kerala</option>
						<option value="Madhya Pradesh">Madhya Pradesh</option>
						<option value="Maharashtrav">Maharashtrav</option>
						<option value="Manipur">Manipur</option>
						<option value="Meghalaya">Meghalaya</option>
						<option value="Mizoram">Mizoram</option>
						<option value="Nagaland">Nagaland</option>
						<option value="Odisha">Odisha</option>
						<option value="Punjab">Punjab</option>
						<option value="Rajasthan">Rajasthan</option>
						<option value="Sikkim">Sikkim</option>
						<option value="Tamil Nadu">Tamil Nadu</option>
						<option value="Telangana">Telangana</option>
						<option value="Tripura">Tripura</option>
						<option value="Uttarakhand">Uttarakhand</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="West Bengal">West Bengal</option>
						
						
					 </select>                  
					 </div>
                  <div class="clear"></div>
               </div>
               <div class="form-group">
                  <div class="form-left-w3ls">
                     <input class="pin-bottom" type="text" placeholder="Pin code" required=""name="p1" id="p1">
                  </div>
                  <div class="form-right-w3ls">
                     <select class="form-control country-buttom" name="c1" id="c1">
                        <option value="">Select Country</option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="Andorra">Andorra</option>
						<option value="Angola">Angola</option>
						<option value="Antigua and Barbuda">Antigua and Barbuda</option>
						<option value="Argentina">Argentina</option>
						<option value="Armenia">Armenia</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Bangladesh">Bangladesh</option>
						<option value="Barbados">Barbados</option>
						<option value="Belarus">Belarus</option>
						<option value="Belgium">Belgium</option>
						<option value="Belize">Belize</option>
						<option value="Benin">Benin</option>
						<option value="Bhutan">Bhutan</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="Brunei">Brunei</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cabo Verde">Cabo Verde</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Central African Republic">Central African Republic</option>
						<option value="Chad">Chad</option>
						<option value="Chile">Chile</option>
						<option value="China">China</option>
						<option value="Colombia">Colombia</option>
						<option value="Comoros">Comoros</option>
						<option value="Congo">Congo</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Côte d’Ivoire">Côte d’Ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Cuba">Cuba</option>
						<option value="Cyprus">Cyprus</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Djibouti">Djibouti</option>
						<option value="Dominica">Dominica</option>
						<option value="Dominican">Dominican Republicv
						<option value="East Timor">East Timor</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Equatorial Guinea">Equatorial Guinea</option>
						<option value="Eritrea">Eritrea</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Fiji">Fiji</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="Gabon">Gabon</option>
						<option value="The Gambia">The Gambia</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Greece">Greece</option>
						<option value="Grenada">Grenada</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Guinea">Guinea</option>
						<option value="Guinea-Bissau">Guinea-Bissau</option>
						<option value="Guyana">Guyana</option>
						<option value="Haiti">Haiti</option>
						<option value="Honduras">Honduras</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Iraq">Iraq</option>
						<option value="Ireland">Ireland</option>
						<option value="Israel">Israel</option>
						<option value="Italy">Italy</option>
						<option value="Jamaica">Jamaica</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Kiribati">Kiribati</option>
						<option value="Korea, North">Korea, North</option>
						<option value="Korea, South">Korea, South</option>
						<option value="Kosovo">Kosovo</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Lesotho">Lesotho</option>
						<option value="Liberia">Liberia</option>
						<option value="Libya">Libya</option>
						<option value="Liechtenstein">Liechtenstein</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Madagascar">Madagascar</option>
						<option value="Malawi">Malawi</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Maldives">Maldives</option>
						<option value="Mali">Mali</option>
						<option value="Malta">Malta</option>
						<option value="Marshall Islands">Marshall Islands</option>
						<option value="Mauritania">Mauritania</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mexico">Mexico</option>
						<option value="Micronesia">Micronesia</option>
						<option value="Moldova">Moldova</option>
						<option value="Monaco">Monaco</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Myanmar">Myanmar</option>
						<option value="Namibia">Namibia</option>
						<option value="Nauru">Nauru</option>
						<option value="Nepal">Nepal</option>
						<option value="Netherlands">Netherlands</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Niger2">Niger</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Palau">Palau</option>
						<option value="Panama">Panama</option>
						<option value="Papua New Guinea">Papua New Guinea</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Philippines">Philippines</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Qatar">Qatar</option>
						<option value="Romania">Romania</option>
						<option value="Russia">Russia</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Saint Kitts and Nevisv">Saint Kitts and Nevisv</option>
						<option value="Saint Lucia">Saint Lucia</option>
						<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
						<option value="Samoa">Samoa</option>
						<option value="San Marino">San Marino</option>
						<option value="Sao Tome and Principe2">Sao Tome and Principe</option>
						<option value="Saudi Arabia">Saudi Arabia</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Seychelles">Seychelles</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="olomon Islands">Solomon Islands</option>
						<option value="Somalia">Somalia</option>
						<option value="South Africa">South Africa</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sudan">Sudan</option>
						<option value="Sudan,South">Sudan, South</option>
						<option value="Suriname">Suriname</option>
						<option value="Swaziland">Swaziland</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Syria">Syria</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Togo">Togo</option>
						<option value="Tonga">Tonga</option>
						<option value="Trinidad and Tobago">Trinidad and Tobago</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Turkmenistan">Turkmenistan</option>
						<option value="Tuvalu">Tuvalu</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="United Arab Emirates">United Arab Emirates</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Uzbekistan">Uzbekistan</option>
						<option value="Vanuatu">Vanuatu</option>
						<option value="Vatican City">Vatican City</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Yemen">Yemen</option>
						<option value="Zambia">Zambia</option></option>
						<option value="Zimbabwe">Zimbabwe</option>
					 </select>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="info-agile-persnal">
               <h3>Docter Details</h3>
               <div class="form-group">
                  <div class="info-agile-persnal">
                    <b><b><font color="green"> Select the Docter name:</font></b></b>
                  </div>
                  <div class="form-right-w3ls">
                     <input type="text" class="form-control" placeholder="doctor Name"name="d1" id="d1">
                  </div>
                  <div class="clear"></div>
               </div>
 
			</div>
			<div class="form-group">
                  <div class="info-agile-persnal">
                    <b><b><font color="green">Today Date:</font></b></b>
                  </div>
					
				  <div class="form-left-w3ls">
                     <input type="text" class="form-control" placeholder="Today date" name="d2" id="d2">
                  </div>
                  <div class="form-mid-w3ls">
                     <input type="text" placeholder="amount" required=""name="amount" id="amount">
                  </div>
                  <div class="clear"></div>
               </div>
           
            <div class="set-reset">
               <input type="submit" value="Submit" name="b1"  id="b1">
               <input type="reset" value="Clear Form" name="b2" id="b2">
            </div>
         </form>
      </div>
      <div class="copy">
          </div>
	  </form>
	  <script>
	  var da = new Date();
	  var dd = da.getDate();
	  var mm = da.getMonth()+1;
	  var yy = da.getFullYear();
	  
	  var d=yy + '-' + mm + '-' + dd;
	  
		document.getElementById("d2").defaultValue = d ;
	  </script>
   </body>
</html>