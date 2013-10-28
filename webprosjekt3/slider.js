<script type="text/javascript">


var image1 = new Image()
image1.src = "trening.jpg"
var image2 = new Image()
image2.src = "running.jpg"
var image3 = new Image()
image3.src = "matprot.jpg"

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