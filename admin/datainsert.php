<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
 <style type="text/css">
   .container{
     width: 50%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);

   }
 </style>  
<?php
include 'top.php';
?>
<body>
<?php
   $code=random_code(4);
   ?>
 <br>
 <center><form action="adminget.php" method="post" enctype="multipart/form-data">
    <div class="register">

    <div class="container">
        <div class="row">
        	<br><br>
		 <center><h3>ENTER INFO<h3></center><hr><hr>
		 </div>
	
		 <div class="row">
      <div class="col-25">
        <label >Code</label>
      </div>
      <div class="col-75">
        <input type="text"  name="code" value="<?php echo $code;?>"placeholder="code.." required>
      </div>
    </div>
		 
    <div class="row">
      <div class="col-25">
        <label >Name</label>
      </div>
      <div class="col-75">
        <input type="text"  name="name" placeholder="Name.." required>
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label>Brand</label>
      </div>
      <div class="col-75">
        <input type="text" name="brand" placeholder="Brand.." required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label >Fabric</label>
      </div>
      <div class="col-75">
         <input type="text" name="fabric" placeholder="Fabric.." required>
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label >Price</label>
      </div>
      <div class="col-75">
         <input type="number" name="price" placeholder="In Rs...." required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label >Size</label>
      </div>
      <div class="col-75">
         <input type="text" name="size" placeholder="S/M/L/XL/2XL/3XL" required>
      </div>
    </div>


    
<div class="row">
      
  
    <div class="row">
      <div class="col-25">
        <label>Category</label>
      </div>
      <div class="col-75">
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
      </div>	
    </div>




	<div class="row">
      <div class="col-25">
        <label>Photo</label>
      </div>
      <div class="col-75">
    <input type="file" name="fileToUpload" id="fileToUpload">
	</div>
    </div
	

      <div class="col-80">
       <input type="submit" value="Add Data" name="submit" style="width:500px;">
      </div>
	  
	 
  </form>
</center>
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