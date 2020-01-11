<?php

$con = mysqli_connect("localhost","root","webdev", "resumeform");

mysqli_select_db($con, "resumeform");

$firstname =  (isset($_POST['firstname']) ? $_POST['firstname'] : '');
$email= (isset($_POST['email']) ? $_POST['email'] : '');
$subject = (isset($_POST['subject']) ? $_POST['subject'] : '');
$submit = (isset($_POST['submit']) ? $_POST['submit'] : '');
 
$sql="INSERT INTO resumeform (firstname, email, subject) VALUES (?,?,?)";
$stmt = mysqli_prepare($con, $sql);
$stmt->bind_param("sss", $_POST['firstname'], $_POST['email'], $_POST['subject']);
$stmt->execute();

mysqli_close($con)

?>
<!DOCTYPE html>
<html>
<head>
	<title> Selma Smajić resume</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="resumedesign.css">

</head>
<body> 

 <div>

   <img class="profileimage" src="profile.jpg">
   
    <div class="contact">
    <table class="socialdata">

        <tr> 
        <td><img src="mobile.png"></td><td>+38762534238 </td></tr>
        <tr> <br> </tr>

         <tr><td> <a href="mailto:selma.smajic99@gmail.com">
        <img src="mail.png" ></a></td> <!-- Image taken form: https://www.vexels.com/png-svg/preview/157545/mail-icon -->
         <td> <a href="mailto:selma.smajic99@gmail.com"> selma.smajic99@gmail.com</a> </td> </tr>
         <tr> <br> </tr>

       <tr><td> <a href="https://www.facebook.com/smajicka99">
        <img src="facebook.png" ></a></td> <td> <a href="https://www.facebook.com/smajicka99">Facebook  </td></tr>  <!-- Image taken form: https://www.flaticon.com/free-icon/facebook_124010 --> 
       <tr> <td> <a href="https://www.instagram.com/s.majicka">
        <img src="instagram.jpg" ></a></td> <!-- Image taken form:https://www.flaticon.com/free-icon/instagram_174855-->
         <td>  <a href="https://www.instagram.com/s.majicka">Instagram </td> </tr>
      
    </table>
    
   </div>
 
   

    <div class="bio">My name is Selma Smajić. <br>

    <br>

    I am born on June 19th, 1999 in Sarajevo. <br>

    <br>
    Currently I am student of the second year of the Software engineering at the International University of Sarajevo. 
    In my spare time I enjoy participating in various workshops and forums in order to gain new experiences and meet new people. </div>
    



 	<div class=intro>
 		<br>

    <img class="techskills" src="techskills.png"> <!-- Image taken form: https://www.freepik.com/free-icons/tools -->
 <p class=techskillstxt>Tech skills: MS Office, Java, C++, SQL, RStudio, HTML </p>

 <img class="softskills"src="softskills.png"> <!-- Image taken form: https://www.vexels.com/png-svg/preview/157545/school-book-icon -->
 <p class=softskillstxt>Soft skills: Communication, Problem Solving, Work Ethic, Adaptability and Interpersonal Skills. </p>
 <p class="border"> </p>
    
   </div>
 




<div class="education"><h3><strong> EDUCATION</strong></h3>
<input type="button1" name="edu2014" value="From 2014 to 2016 (high school)" onclick="showDivEdu14()" />
<div id="divedu2014"  style="display:none;" class="edu2014"> 
    From  2014 to 2016 I was a studnent at the Druga gimnazija Sarajevo at programme called International Baccaleaurate Middle Years Programme.
    <br>
    Find more about Middle Years Programme on following link:
    <a href="https://www.ibo.org/programmes/middle-years-programme/"> Middle Years Programme </a>
</div>

<script >
function showDivEdu14() {
   document.getElementById('divedu2014').style.display = "block";
}
</script>

 <input type="button1" name="edu2016" value="From 2016 to 2018 (high school)" onclick="showDivEdu16()" />


<div id="divedu2016"  style="display:none;" class="edu2016"> 
    From  2016 to 2018 I was a studnent at the Druga gimnazija Sarajevo at programme called International Baccaleaurate Diploma Programme.
    <br>
    Find more about Diploma Programme on following link:
    <a href="https://www.ibo.org/programmes/diploma-programme/"> Diploma Programme </a>
</div>

<script >
function showDivEdu16() {
   document.getElementById('divedu2016').style.display = "block";
}
</script>

<input type="button1" name="edu2018b" class="edu2018" value="From 2018 - present (bachelor)" onclick="showDivEdu18()" />


<div id="divedu2018"  style="display:none;" class="edu2018"> 
    From  2018 - present I am a studnent at the International University of Sarajevo (IUS) at the Faculty of Natural Sciences and Engineering at the deparment of the Software Engineering .
    <br>
    Find more about Spftware Engineering at the IUS the on following link:
    <a href="https://se.ius.edu.ba/"> Software Engineering at IUS </a>
</div>

<script >
function showDivEdu18() {
   document.getElementById('divedu2018').style.display = "block";
}
</script>

</div>
 <h4><strong>LANGUAGES</strong></h4>
<div class="languages">
   
    <img src="languages.jpg">
 
  </div>
    <p class="border"> </p>

<h3><strong>WORKSHOPS, FORUMS AND INTERNSHIPS</strong></h3>
<div class="workshops">
 




<input type="button" name="2016" value="Activities from 2016" onclick="showDiv16()" />


<div id="div2016"  style="display:none;" class="2016"> 
    <dt><strong>From 2016 to 2017</strong></dt>
    <dd>Intern in Infohouse for administrative support</dd>
    <dt> <strong>March 2016</strong> </dt> 
    <dd>European Youth Parlament, Regional Forum Sarajevo, participant</dd>
    <dt> <strong>May 2016</strong> </dt> 
    <dd>Forum of domestic production Banja Luka, volunteer</dd> 
    <dt><strong> August 2016</strong></dt> 
    <dd>ICMP International day of missing people, volunteer</dd>
    <dt><strong>September 2016</strong>  </dt>
    <dd>Infohouse Conference about prevention of corruption, volunteer</dd>
    <dd> Night of explores, volunteer</dd>
    <dt><strong>October 2016</strong> </dt>
    <dd> Race for the cure, volunteer</dd>
    <dt><strong>November 2016</strong> </dt>
    <dd>11. Pravo Ljudski film festival, location manager</dd>
</div>

<script >
function showDiv16() {
   document.getElementById('div2016').style.display = "block";
}
</script>

<input type="button" name="2017" value="Activities from 2017" onclick="showDiv17()" />

  <div id="div2017" style="display: none;" class="2017" >
 
   <dt><strong>January 2017</strong> </dt>
    <dd> SSST Winter Academy, participant</dd>
    <dt><strong>March 2017</strong> </dt>
    <dd>Model United Nations, participant</dd>
    <dt><strong>August 2017</strong> </dt>
    <dd>Sarajevo Film Festival, volunteer</dd>
 
</div>

<script >
function showDiv17() {
   document.getElementById('div2017').style.display = "block";
}
</script>

<input type="button" name="answer" value="Activities from 2018" onclick="showDiv18()" />

<div id="div2018"  style="display:none;" class="2018" > 
    <dt><strong> August 2018</strong></dt>
    <dd>Murabbi consulting London Leadership for youth activist, participant</dd>


</div>
<script >
function showDiv18() {
   document.getElementById('div2018').style.display = "block";
}
</script>

<input type="button" name="answer" value="Activities from 2019" onclick="showDiv19()" />

<div id="div2019"  style="display:none;" class="2019" > 
    <dt><strong>February 2019</strong> </dt>
    <dd>Youth camp for public speaking, participant</dd>
    <dt><strong>September 2019</strong></dt>
    <dd>IT Girls, EYA Weekend Awards, participant</dd>
    </dl>

</div>
<script >
function showDiv19() {
   document.getElementById('div2019').style.display = "block";
}
</script>


 
 </div>

<div class="form"> 
            <form class="inputs" action="index.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="firstname" placeholder="Example: Amina Perva">

                <label for="surname">E-mail:</label>
                <input type="text" id="email" name="email" placeholder="Example: apirav@gmail.com>

                <label for="subject">Question:</label>
                <input type="text" name="subject" placeholder="Write your comment/suggestion/question here"></textarea>

                <input type="submit" name="submit" value="Submit">
            </form>
</div>

<div class="last">
 
 <button onclick="visitPage1();">First draft of webpage</button>

 <script>
    function visitPage1(){
        window.location='https://smajicka.github.io/selmasmajicresume/';
    }
</script>

 <button onclick="visitPage2();">First repository</button>

 <script>
    function visitPage2(){
        window.location='https://github.com/smajicka/selmasmajicresume';
    }

</script>
 <button onclick="visitPage3();"> Second draft of webpage</button>

 <script>
    function visitPage3(){
        window.location='https://smajicka.github.io/webproject1/';
    }
  </script>
   <button onclick="visitPage4();">Second repository</button>

 <script>
    function visitPage4(){
        window.location='https://github.com/smajicka/webproject1';
    }
</script>
 </div>
</body>
</html>