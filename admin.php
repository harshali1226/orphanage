<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>ADMIN</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/humanity/jquery-ui.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<script src="jquery.js"></script>
 
<style>
body { 
    background-color: ghostwhite;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: transparent;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a.active {
    align-content: center;
  color: orange;
}



.header-right {
  float: center;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

.collapsible {
  background-color:#f86f2d;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active_1, .collapsible:hover {
  background-color:rgb(218, 128, 27);
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active_1:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color:transparent;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>
<body>

    <div class="header">
        <a class="logo">KHILTA BACHPAN</a>
        <div class="header-right">
          <a class="active" href="index.php">Home</a>
        </div>
      </div>
      <input type="button" id="insbutton" value="insert child"> <br>
      <button class="collapsible">Insert Child Details</button>



      <div id="dialog" title="CHILD DETAILS">
          <form action="insertchild.php" method="post">
            <label>ID:</label> <br>
            <input id="id" name="id" type="text"><br><br>
            <label>Name:</label>
          <input id="name" name="name" type="text"><br><br>
          <label>DOB:</label>
          <input id="dob" name="dob" type="date"><br>
          <label>Description:</label>
          <input id="desc" name="story" type="text">
          <label>Gender:</label>
          <input id="gender" name="gender" type="text">
          <label>Sponsored:</label>
          <input id="sponsored" name="sponsored" type="text">
          <label>Adopted:</label>
          <input id="adopted" name="adopted" type="text">


          <input id="submit" type="submit" name="submit" value="Submit">
          </form>
          </div>
    
    
    
    
    
    
  <input type="button" id="inspic" value="insert pic" style="background:'green';"> <br>
  
    <div id="dialog2" title="CHILD PIC">
        <strong> Select Child : </strong> 
        <form method="post" enctype="multipart/form-data" id="uploadForm">
        <select name="child_id" id="child_id"> 
                <?php
                    $dd_res=mysqli_query($con,"Select ID,NAME from children_details");
                    while($r=mysqli_fetch_row($dd_res)){ 
                        echo "<option value='$r[0]'> $r[1] </option>";
                    }
                ?>
        </select>
        <br>
        <input type="file" name="files[]" accept="image/*" id="files" multiple/>
        <br>
        <input TYPE="submit" name="submit" value="submit" id="submit"/>    
      
                </form><input TYPE="submit" name="show" value="show" id="show" />
            <div id="result"> </div>
                  </div>










<div class="content">
  <p><table>
      <tr>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
      </tr>
      <tr>
        <td>Amar</td>
        <td>09/09/2009</td>
        <td>Male</td>
      </tr>
      <tr>
        <td>Akbar</td>
        <td>10/10/2010</td>
        <td>Male</td>
      </tr>
      <tr>
        <td>Anthony</td>
        <td>11/11/2011</td>
        <td>Male</td>
      </tr>
    </table></p>
</div>
<a href="children table.html"><button class="collapsible">Delete Child Details</button></a>
<div class="content">
  <p><table>
      <tr>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
      </tr>
      <tr>
        <td>Amar</td>
        <td>09/09/2009</td>
        <td>Male</td>
      </tr>
      <tr>
        <td>Akbar</td>
        <td>10/10/2010</td>
        <td>Male</td>
      </tr>
      <tr>
        <td>Anthony</td>
        <td>11/11/2011</td>
        <td>Male</td>
      </tr>
    </table></p>
</div>
<button class="collapsible">See Adoption Requests</button>
<div class="content">
  <p><table>
      <tr>
        <th>Name</th>
        <th>e-mail</th>
        <th>Contact</th>
        <th>Cild name</th>
      </tr>
      <tr>
        <td>Ramesh</td>
        <td>ram@fivestar.com</td>
        <td>010569429</td>
        <td>ram</td>
      </tr>
      <tr>
        <td>Suresh</td>
        <td>sur@fivestar.com</td>
        <td>011374639</td>
        <td>shyam</td>
      </tr>
      <tr>
        <td>Mukesh</td>
        <td>muku@fivestar.com</td>
        <td>110374308</td>
        <td>baburao</td>
      </tr>
    </table></p>
</div>




           
                
<script>
$(document).ready(function(){
    $("#show").click(function(){
        var child_id=$("#child_id").val();
        //var files=$("#files").val();
        $.ajax({
            url:"showpics.php",
            data:{child_id:child_id},
            type:'POST',
            success:function (data) {
            $("#result").html(data);}
        });
        /*$.post("upload.php",{child_id:child_id,files:files},function (data) {
            $("#result").html(data); 
        }); */
    });
});
    




        //Image upload RD
        $(document).ready(function (e){
        $("#uploadForm").on('submit',(function(e){
        e.preventDefault();
        $.ajax({
        url: "upload.php",
        type: 'POST',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data){
        $("#result").html(data);
        },
        error: function(){} 	        
        });
        }));
        });



$(document).ready(function() {
$(function() {
$("#dialog").dialog({
autoOpen: false
});
$("#insbutton").on("click", function() {
$("#dialog").dialog("open");
});
});
});

$(document).ready(function() {
$(function() {
$("#dialog2").dialog({
autoOpen: false
});
$("#inspic").on("click", function() {
$("#dialog2").dialog("open");
});
});
});


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active_1");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
