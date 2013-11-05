<script type="text/javascript">


var image1 = new Image()
image1.src = "styrke1.png"
var image2 = new Image()
image2.src = "running1.png"
var image3 = new Image()
image3.src = "matprot1.png"

</script>

<script type="text/javascript">
        var step=1;
        function slideit()
        {
            document.images.slide.src = eval("image"+step+".src");
            if(step<3)
                step++;
            else
                step=1;
            setTimeout("slideit()",3000);
        }
        slideit();
</script>

<script type="text/javascript">


var image1 = new Image()
image1.src = "sideslider1.jpg"
var image2 = new Image()
image2.src = "sideslider2.jpg"
var image3 = new Image()
image3.src = "sideslider3.jpg"

</script>

<script type="text/javascript">
        var step=1;
        function slideit()
        {
            document.images.slide2.src = eval("image"+step+".src");
            if(step<3)
                step++;
            else
                step=1;
            setTimeout("slideit()",3000);
        }
        slideit();
</script>