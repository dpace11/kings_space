<html>
	<head><title>registration</title>
	<link rel="stylesheet" type="text/css" href="../regi.css">
<body>
	<script src="jquery.min.js"></script>
<script>
$(function(){
    
    var $cat = $("#category1"),
        $subcat = $(".subcat");
    
    var optgroups = {};
    
    $subcat.each(function(i,v){
      var $e = $(v);
      var _id = $e.attr("id");
      optgroups[_id] = {};
      $e.find("optgroup").each(function(){
        var _r = $(this).data("rel");
        $(this).find("option").addClass("is-dyn");
        optgroups[_id][_r] = $(this).html();
      });
    });
    $subcat.find("optgroup").remove();
    
    var _lastRel;
    $cat.on("change",function(){
        var _rel = $(this).val();
        if(_lastRel === _rel) return true;
        _lastRel = _rel;
        $subcat.find("option").attr("style","");
        $subcat.val("");
        $subcat.find(".is-dyn").remove();
        if(!_rel) return $subcat.prop("disabled",true);
        $subcat.each(function(){
          var $el = $(this);
          var _id = $el.attr("id");
          $el.append(optgroups[_id][_rel]);
        });
        $subcat.prop("disabled",false);
    });
    
});
    
 </script> 
 <?php
include 'top.php';
?>
<?php
   $code=random_code(4);
   ?>
 <br>
 <center><form action="adminget.php" method="post" enctype="multipart/form-data">
    <div class="register">


<br><br>

      <div class="s-boxes">
       


<h2>Enter Info</h2>
<form  name="register"  action="registration.php" method="POST">
<p> COde</p>
<input type="text"  name="code" value="<?php echo $code;?>"placeholder="code.." required>


<p>Name</p>
  <input type="text"  name="name" placeholder="Name.." required>
<p>Brand</p>
  <input type="text" name="brand" placeholder="Brand.." required>
<p>Fabric</p>
  <input type="text" name="fabric" placeholder="Fabric.." required>
<p>Price</p>
  <input type="number" name="price" placeholder="In Rs...." required>
<p>Size</p>
  <input type="text" name="size" placeholder="S/M/L/XL/2XL/3XL" required>
<p>Category</p>
  <select >
            <option value>Select Category</option>
            <!-- Home Ware -->
            <optgroup data-rel="men">
              <option value="shirt">Shirt</option>
              <option value="pant">Pant</option>
              <option value="jacket">Jacket</option>
              <option value="shoe">Shoe</option>
              <option value="t-shirt">T-shirt</option>
            </optgroup>
           
         
          </select>
<p>Photo</p>
   <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Add Data" name="submit" style="width:500px;">
</div>
</body>
<?php
function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
 ?>
</html>
</body>
</html>