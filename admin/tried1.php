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
<?php
include 'top.php';
?>
<body>
<?php
   $code=random_code(4);
   ?>
 <br>
 <center><form action="adminget.php" method="post" enctype="multipart/form-data">
   
    <div class="container">
        <div class="row">
        	<br><br><br>
		 <center><h3>ENTER INFO<h3></center>
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
        <input type="text" name="brand" placeholder="brand.." required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label >Fabric</label>
      </div>
      <div class="col-75">
         <input type="text" name="fabric" required>
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
         <input type="text" name="size" required>
      </div>
    </div>


    
<div class="row">
      
  
    <div class="row">
      <div class="col-25">
        <label>Category</label>
      </div>
      <div class="col-75">
	     <select disabled="disabled" class="subcat" id="category2" name="category">
            <option value>Select Category</option>
            <!-- Home Ware -->
            <optgroup data-rel="men">
              <option value="shirt">shirt</option>
              <option value="pant">pant</option>
              <option value="jacket">jacket</option>
              <option value="shoe">shoe</option>
              <option value="t-shirt">t-shirt</option>
            </optgroup>
            <!-- Education -->
            <optgroup data-rel="women">
              <option value="shirt">shirt</option>
              <option value="pant">pant</option>
              <option value="shari">Shari</option>
              <option value="kurtha">kurtha</option>
              <option value="shoe">shoe</option>
              <option value="t-shirt">t-shirt</option>
                <option value="jacket">jacket</option>
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