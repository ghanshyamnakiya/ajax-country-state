<html>
<head></head>
<body>
<select id="country" class="country" name="country">
    <option value="0">Select</option>
    <option value="1">INDIA</option>
    <option value="2">USA</option>
    <option value="3">UK</option>
</select>
</br></br>
<div id="state">
</div>
<script src="jquery.min.js"></script>
<script type="text/javascript">
$("#country").change(function(){
   var country=document.getElementById('country').value;
   $.ajax({
     url: "ajax_handle.php",
     data: {type:'state_list',country_id:country},
     type: "POST",
     success: function(result){
       document.getElementById('state').innerHTML=result;
     }
    });
});
</script>
</body>
</html>
