<html>
  <head>
    <title>Student feedback </title>
    <style>
      body{
      background-image: linear-gradient(to left,  #5dade2
, #58d68d );
      text-align:center;
      }
input[type=text], select {
  width: 200px;
  padding: 12px 20px;
  margin: 4px 0;
  display: inline-block;
  border: 2px solid  blue ;
  border-radius: 4px;
  box-sizing: border-box;
 
}
input[type=date],select {
  width: 200px;
  padding: 12px 20px;
  margin: 4px 0;
  display: inline-block;
  border: 2px solid   blue  ;
  border-radius: 4px;
  box-sizing: border-box;
}
marquee {
text-shadow: 2px 2px 5px white;
}
.wrapper {
  display: inline-block;
  margin-right:10px;
}
.wrapper * {
  float: right;
}

label {
  font-size: 50px;
}

input:checked ~ label {
  color:  #DFFF00 ;
}
input[type="radio"]{
display:none;
}
.wrapper
 {
padding-left:5px;
 }
fieldset
{
  border: 1px solid brown;
}

 
     </style>
  </head>
  <body>  
  <form action="newout.php" method="post">
<marquee style:color="color:Pink;"><i>All the fields are mandatory to be filled</i></marquee>
  Faculty Name:<input type="text" name="faculty_name"></input>
  <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "ME" :
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Amarjit Prasad");
                        document.getElementById("subcategory").options[2]=new Option("Chanchal Gupta");
                        document.getElementById("subcategory").options[3]=new Option("Manish Kumar Sanadhya");
                        document.getElementById("subcategory").options[4]=new Option("Netraj Vyankatesh Surnis");
                        document.getElementById("subcategory").options[5]=new Option("Patel Harshal Bharat");
                        document.getElementById("subcategory").options[6]=new Option("Rishabh Kumar");
                        break;
                   
                    case "CE" :
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Sabarish R");
                        document.getElementById("subcategory").options[2]=new Option("Sreeram C H");
                        break;

                    case "E&I":
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Himanshu Kathuria ");
                        break;
                       
                    case "FRTM" :
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Ashish Gupta");
                        document.getElementById("subcategory").options[2]=new Option("Deepak Yadav");
                        document.getElementById("subcategory").options[3]=new Option("Vinay Joshi");
                        break;

                    case"FRTE" :
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Shaik Vasim Basha ");
                        document.getElementById("subcategory").options[2]=new Option("Vishal Kumawat ");
                        break;
                    case "NFCC" :
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Arkaprava Layek");
                        document.getElementById("subcategory").options[2]=new Option("Bikash Kumar Nath");
                        document.getElementById("subcategory").options[3]=new Option("Khushboo Varshney ");
                        document.getElementById("subcategory").options[4]=new Option("Pankaj","Pankaj");
                        document.getElementById("subcategory").options[5]=new Option("Shuvam Majumder ");
                        document.getElementById("subcategory").options[6]=new Option("Suvra Sil");
                        break;

                    case "Chem":
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Raghavendra Y.");
                        break;
                       
                    case "JChe":
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Bala Parandhma Raju M");
                        break;

                    case "JMat" :
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Munukuti Venkataraman");
                        document.getElementById("subcategory").options[2]=new Option("Srisai sambitha.G");
                        break;
                       
                    case "JMec" :
                        document.getElementById("subcategory").options[0]=new Option("Please select student","");
                        document.getElementById("subcategory").options[1]=new Option("Arvinth Davinci.M");
                        break;
                }
                return true;
            }
       </script>
    </head>
    <title>Dynamic Drop Down List</title>
    <body>
        <div class="category_div" id="category_div">Please specify Discipline:
            <select name="category" class="required-entry" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                <option value="">Select Discipline</option>
                <option value="ME">ME</option>
                <option value="CE">CE</option>
                <option value="E&I">E&I</option>
                <option value="FRTM">FRTM</option>
                <option value="FRTE">FRTE</option>
                <option value="NFCC">NFCC</option>
                <option value="Chem">Chem</option>
                <option value="JChe">JChe</option>
                <option value="JMat">JMat</option>
                <option value="JMec">JMec</option>

            </select>
        </div>
        <div class="sub_category_div" id="sub_category_div">Please select Student:
            <script type="text/javascript" language="JavaScript">
                document.write('<select name="subcategory" id="subcategory"><option value="">Please select framework</option></select>')
            </script>
            <noscript>
                <select name="subcategory" id="subcategory" >
                    <option value="">Please select Student</option>
                </select>
            </noscript>
        </div>

<fieldset>
<legend><b><center>1.Personality</center></b> </legend>
<br>
<div class="wrapper">
  <input type="radio" id="r1" name="rg1" value="5">
  <label for="good">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r2" name="rg1" value="4">
  <label for="r2">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r3" name="rg1" value="3">
  <label for="r3">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r4" name="rg1" value="2">
  <label for="r4">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r5" name="rg1" value="1">
  <label for="r5">&#9752;&nbsp;&nbsp;</label>
</div>


<br><br>
</fieldset>
<br> <br>
<fieldset>

<legend><b><center>2.Subjective Knowledge</center></b> </legend>
<br>
<div class="wrapper">
  <input type="radio" id="r6" name="rg2" value="5">
  <label for="r6">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r7" name="rg2" value="4">
  <label for="r7">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r8" name="rg2" value="3">
  <label for="r8">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r9" name="rg2" value="2">
  <label for="r9">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r10" name="rg2" value="1">
  <label for="r10">&#9752;&nbsp;&nbsp;</label>
</div>

<br><br>
</fieldset>


<br><br>
<fieldset>

<legend><b><center>3.Attitute towards listening to class</center></b> </legend>
<br>
<div class="wrapper">
  <input type="radio" id="r11" name="rg3" value="5">
  <label for="r11">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r12" name="rg3" value="4">
  <label for="r12">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r13" name="rg3" value="3">
  <label for="r13">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r14" name="rg3" value="2">
  <label for="r14">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r15" name="rg3" value="1">
  <label for="r15">&#9752;&nbsp;&nbsp;</label>
</div>

<br><br>
</fieldset>
<br><br>
<fieldset>
<legend><b><center>4.Performance of the student</center></b></legend>
<br>

<div class="wrapper">
  <input type="radio" id="r16" name="rg4" value="5">
  <label for="r16">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r17" name="rg4" value="4">
  <label for="r17">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r18" name="rg4" value="3">
  <label for="r18">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r19" name="rg4" value="2">
  <label for="r19">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r20" name="rg4" value="1">
  <label for="r20">&#9752;&nbsp;&nbsp;</label>
</div>
<br><br>
</fieldset>
<br><br>
<fieldset>
<legend><b><center>5.Puntuality in coming class</center></b></legend>
<br>
<div class="wrapper">
  <input type="radio" id="r21" name="rg5" value="5">
  <label for="r21">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r22" name="rg5" value="4">
  <label for="r22">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r23" name="rg5" value="3">
  <label for="r23">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r24" name="rg5" value="2">
  <label for="r24">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r25" name="rg5" value="1">
  <label for="r25">&#9752;&nbsp;&nbsp;</label>
</div>


<br><br>
</fieldset>
<br><br>
<fieldset>
<legend><b><center>6.Interaction with the Faculty</center></b></legend>
<br>
<div class="wrapper">
  <input type="radio" id="r26" name="rg6">
  <label for="r26">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r27" name="rg6">
  <label for="r27">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r28" name="rg6">
  <label for="r28">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r29" name="rg6">
  <label for="r29">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r30" name="rg6">
  <label for="r31">&#9752;&nbsp;&nbsp;</label>
</div>
<br><br>
</fieldset>
<br><br>
<fieldset>
<legend><b><center> 7.Oral Communication</center></b></legend>
<br>
<div class="wrapper">
  <input type="radio" id="r32" name="rg7">
  <label for="r32">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r33" name="rg7">
  <label for="r33">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r34" name="rg7">
  <label for="r34">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r35" name="rg7">
  <label for="r35">&#9752;&nbsp;&nbsp;</label>
  <input type="radio" id="r36" name="rg7">
  <label for="r36">&#9752;&nbsp;&nbsp;</label>
</div>

<br><br>
</fieldset>
<br><br>
<input type="checkbox">All the details are filled</input><br><br>
<input type="submit" value="SUBMIT"></input>
</form>
</center>
</body>
</html>