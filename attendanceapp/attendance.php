<?php
session_start();
if(isset($_SESSION["current_user"]))
{

}
else{
   header("location:"."/attendanceapp/login.php"); 
   die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/attendance.css">
    <title>Document</title>
</head>
<body>
   <!-- <h1>HELLO</h1>
    <button id="btnLogout">Logout</button>-->
    <div class="page">
        <div class="header-area">
            <div class="logo-area"><h2 class="logo">NACOS UNN ATTENDANCE PORTAL</h2></div> 
            <div class="logout-area"><button class="btnlogout" id="btnLogout">Logout</button></div> 
        </div>
        <div class="session-area">
            <div class="label-area"><label>SESSION</label></div>
            <div class="dropdown-area">
                <select class="ddlclass">
                    <option>SELECT ONE</option>
                    <option>FIRST SEMESTER (2024/2025 SESSION)</option>
                    <option>SECOND SEMESTER (2024/2025 SESSION)</option>
                </select>
            </div>
        </div>
        <div class="classlist-area">
           <div class="classcard">COS342</div>
           <div class="classcard">COS342</div> 
           <div class="classcard">COS342</div> 
           <div class="classcard">COS342</div> 
           <div class="classcard">COS342</div> 
        </div>

        <div class="classdetails-area">
            <div class="classdetails">
                <div class="code-area">COS342</div>
                <div class="title-area">DATA AND COMPUTER COMMUNICATION</div>
                <div class="ondate-area">
                    <input type="date">
                </div>
            </div>
        </div>

        <div class="studentlist-area">
           <div class="studenttlist"><label>STUDENT LIST</label></div>
           <div class="studentdetails">
            <div class="slno-area">001</div>
            <div class="regno-area">2021/248539</div>
            <div class="name-area">ABBA UCHECHUKWU EMMANUEL</div>
            <div class="checkbox-area">
                <input type="checkbox">
            </div>
            
           </div>

           <div class="studentdetails">
            <div class="slno-area">001</div>
            <div class="regno-area">2021/248539</div>
            <div class="name-area">ABBA UCHECHUKWU EMMANUEL</div>
            <div class="checkbox-area">
                <input type="checkbox">
            </div>
           </div>

           <div class="studentdetails">
            <div class="slno-area">001</div>
            <div class="regno-area">2021/248539</div>
            <div class="name-area">ABBA UCHECHUKWU EMMANUEL</div>
            <div class="checkbox-area">
                <input type="checkbox">
            </div>
            
           </div>

           <div class="studentdetails">
            <div class="slno-area">001</div>
            <div class="regno-area">2021/248539</div>
            <div class="name-area">ABBA UCHECHUKWU EMMANUEL</div>
            <div class="checkbox-area">
                <input type="checkbox">
            </div>
            
           </div>

           <div class="studentdetails">
            <div class="slno-area">001</div>
            <div class="regno-area">2021/248539</div>
            <div class="name-area">ABBA UCHECHUKWU EMMANUEL</div>
            <div class="checkbox-area">
                <input type="checkbox">
            </div>
            
           </div>

           <div class="studentdetails">
            <div class="slno-area">001</div>
            <div class="regno-area">2021/248539</div>
            <div class="name-area">ABBA UCHECHUKWU EMMANUEL</div>
            <div class="checkbox-area">
                <input type="checkbox">
            </div>
            
           </div>

           <div class="studentdetails">
            <div class="slno-area">001</div>
            <div class="regno-area">2021/248539</div>
            <div class="name-area">ABBA UCHECHUKWU EMMANUEL</div>
            <div class="checkbox-area">
                <input type="checkbox">
            </div>
            
           </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/logout.js"></script>
</body>
</html>