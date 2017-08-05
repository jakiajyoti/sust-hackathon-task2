<!DOCTYPE html>
<html>
<body>


<p>This code will take to the text representation of an image.</p>

<p id="demo"></p>

<script>

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML = myObj.name;
    }
};
xmlhttp.open("GET", "http://113.11.120.208/do_ocr?src=-KqjX_pZXRL4szlbdOSw.jpg", true);
xmlhttp.send();

</script>

<p>Take a look at <a href="http://113.11.120.208/do_ocr?src=-KqjX_pZXRL4szlbdOSw.jpg" target="_blank">the image</a></p>

</body>
</html>
