<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.but{
    width:70%;
    left:15%;
}
#ultimate{
    width:30%;
    height:30%;

}
#haki{
    width:30%;
    height:30%;
}
.green {
      background-color: green;
    }
.red {
      background-color: red;
    }
</style>
<!-- ================= -->
<script>
    var butult = document.getElementById("ultimate");

    function changeColor() {
        butult.classList.add("green");
      setTimeout(function() {
        butult.classList.remove("green");
        butult.classList.add("red");
      }, 27000); 
    }

    butult.addEventListener("click", changeColor);

function Ult(){
    document.getElementById("ultimate").style.backgroundColor='#008800';
    setInterval(ult1, 27000);
}
function Rei(){
    document.getElementById("haki").style.backgroundColor='#008800';
    setInterval(haki1, 55000);
}


function ult1() => {
        ;
        var snd = new Audio('../sons/pare.mp3');
        snd.play();
    }

function haki1() => {
        document.getElementById("haki").style.backgroundColor='red';
        var snd = new Audio('../sons/pare.mp3');
        snd.play();
    }
</script>
<!-- =============== -->

<body>
    <fieldset class="but">
        <button id="ultimate">Ultimate</button>
        <button onclick="Rei()" onclick="this.style.backgroundColor='green'" id="haki">Rei</button>
    </fieldset>
</body>
</html>


