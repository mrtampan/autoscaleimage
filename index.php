<html>
          <head>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          </head>

          
<body>

<?php 
$arrImg = ["image/gunung1000x1000.jpg", "image/mina500x1000.jpg", "image/gunung600x600.jpg"];
// $arrImg = ["image/photo1.jpg", "image/photo2.jpg", "image/photo3.jpg"];
foreach ($arrImg as $itemImg){
$detailImg = getimagesize($itemImg);
?>
<img class="small-img" src="<?php echo $itemImg; ?>" width="<?php echo $detailImg[0] ?>" height="<?php echo $detailImg[1] ?>"/>
<br/>

<?php } ?>

          


</body>
<script>
          let imgDom = document.querySelectorAll('.small-img');
          imgDom.forEach((element) => {
          let maxWidth = 320; // Max width for the image
          let maxHeight = 240;    // Max height for the image
          let ratio = 0;  // Used for aspect ratio
          var widthData = element.getAttribute('width');    // Current image width
          var heightData = element.getAttribute('height');  // Current image height;

                    // Check if the current width is larger than the max
                  if(widthData > maxWidth){
                      ratio = maxWidth / widthData;   // get ratio for scaling image
                      element.setAttribute('width', maxWidth); // Set new width
                      element.setAttribute('height', heightData * ratio); // Scale height based on ratio  
                      heightData = heightData * ratio;    // Reset height to match scaled image
                      widthData = widthData * ratio;    // Reset width to match scaled image
                  }
                  // Check if current height is larger than max
                  if(heightData > maxHeight){
                      ratio = maxHeight / heightData; // get ratio for scaling image
                      element.setAttribute('height', maxHeight); // Set new height
                      element.setAttribute('width', widthData * ratio); // Scale width based on ratio  
                      widthData = widthData * ratio;    // Reset width to match scaled image
                      heightData = heightData * ratio;    // Reset height to match scaled image
                  }          
          });

          
          // $(document).ready(function() {
          //     $('img').each(function() {

          
          //         // Check if the current width is larger than the max
          //         if(width > maxWidth){
          //             ratio = maxWidth / width;   // get ratio for scaling image
          //             $(this).css("width", maxWidth); // Set new width
          //             $(this).css("height", height * ratio);  // Scale height based on ratio
          //             height = height * ratio;    // Reset height to match scaled image
          //             width = width * ratio;    // Reset width to match scaled image
          //         }
          
          //         // Check if current height is larger than max
          //         if(height > maxHeight){
          //             ratio = maxHeight / height; // get ratio for scaling image
          //             $(this).css("height", maxHeight);   // Set new height
          //             $(this).css("width", width * ratio);    // Scale width based on ratio
          //             width = width * ratio;    // Reset width to match scaled image
          //             height = height * ratio;    // Reset height to match scaled image
          //         }
          //     });
          // });
          </script>

</html>