<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  
    <style>
        #clock {
            font-family:Brush Script MT, Brush Script Std, cursive;
            font-size: 35px;
            color:white;
            float:right ;
            margin-right:30px;
            border-radius: 10px;
            width:110px;
            background:black;
            box-shadow:2px 2px 2px 5px green;
            text-shadow:2px 2px 5px green;
        }
    </style>
</head>
  
<body>
    <div id="clock">8:10:45</div>
     
    <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;  
            let currentTime = hour + ":" 
                + min + ":" + sec ;  
            document.getElementById("clock")
                .innerHTML = currentTime;
        }
  
        showTime();
    </script>
</body>
  
</html>