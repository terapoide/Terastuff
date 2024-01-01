<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- The text field -->
<input type="text" value="hey hivekin,can i bug you for a moment?" id="myInput">
<input type="text" value="wow,this breeze is great,right?" id="myInput2">
<input type="text" value="so,whats keeping you busy these days?" id="myInput3">
<input type="text" value="some weather were having,huh?" id="myInput4">
<input type="text" value="you ever been to a canor restaurant? the foodS pretty howlright" id="myInput5">
<input type="text" value="sometimes i have really deep thoughts about life and stuff" id="myInput6">
<input type="text" value="Me-wow, is that the latest Felinor fashion?" id="myInput7">
<input type="text" value="so how's work?" id="myInput8">
<fieldset class="but">
<button onclick="myFunction()">hey hivekin, can i</button>
<button onclick="myFunction2()">wow,this breeze</button>
<button onclick="myFunction3()">so,whats Keeping</button>
<button onclick="myFunction4()">some weather</button>
<button onclick="myFunction5()">you ever been</button>
<button onclick="myFunction6()">sometimes i have</button>
<button onclick="myFunction7()">Me-wow, is that</button>
<button onclick="myFunction8()">so how's WORK</button>
</fieldset>

<!-- ======================================================= -->
<script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");
  navigator.clipboard.writeText(copyText.value);
}
function myFunction2() {
  // Get the text field
  var copyText = document.getElementById("myInput2");
  navigator.clipboard.writeText(copyText.value);
}
function myFunction3() {
  // Get the text field
  var copyText = document.getElementById("myInput3");
  navigator.clipboard.writeText(copyText.value);
}
function myFunction4() {
  // Get the text field
  var copyText = document.getElementById("myInput4");
  navigator.clipboard.writeText(copyText.value);
}
function myFunction5() {
  // Get the text field
  var copyText = document.getElementById("myInput5");
  navigator.clipboard.writeText(copyText.value);
}
function myFunction6() {
  // Get the text field
  var copyText = document.getElementById("myInput6");
  navigator.clipboard.writeText(copyText.value);
}
function myFunction7() {
  // Get the text field
  var copyText = document.getElementById("myInput7");
  navigator.clipboard.writeText(copyText.value);
}
function myFunction8() {
  // Get the text field
  var copyText = document.getElementById("myInput8");
  navigator.clipboard.writeText(copyText.value);
}


</script>
<style>
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
button{
    width:10%;
    height:20%;
}
.but{
    left:20%;
    width:65%;
    top:20%;
    position:absolute;
}
</style>
</body>
</html>