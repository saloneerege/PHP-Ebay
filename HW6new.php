<HTML><HEAD><TITLE>Shopping</TITLE>
<STYLE>
        form{
           margin-left : 90px;
           font-size :15px;
           margin-top: 40px;
           margin-right: 90px;
           width : 55%;
          }
    
</STYLE>
</HEAD>
    
<BODY>
<script>
     
    
    function Clearform(form1){
    
       var input_field= document.getElementById("form1").getElementsByTagName("input");
        
                for(var i=0; i<input_field.length; i++){
                    if(input_field[i].type == "checkbox"){
                        input_field[i].checked = false;
                    }
                    else if(input_field[i].type == "text"){
                        input_field[i].value = "";
                    }
        
                }
        var select_field1= document.getElementById("res_page");
        select_field1.value="5";
        
         var select_field2= document.getElementById("sort");
        select_field2.value="BestMatch";
        
        var final=document.getElementById("final_table");
        final.innerHTML="";
        
    }
    
	   
	
    
      function Search1(form1){
         var key = document.forms["form1"]["keywords"].value;
           
    if (key.trim().length==0) {
        alert("Enter the value for Keywords");
        
    }
    
     var price_from = document.forms["form1"]["price_from"].value;
       if(isNaN(price_from)){
          alert("The Price From entered is not a valid number");
        }     
       if(price_from<0){
       alert("The Price From value cannot be a negative number");
           
        }     
        var price_to = document.forms["form1"]["price_to"].value;
        if(isNaN(price_to)){
          alert("The Price To entered is not a valid number");
        }
        if(price_to<0){
       alert("The Price To value cannot be a negative number");
           
        }
        if(parseFloat(price_to)<parseFloat(price_from))
		  {
       alert("The From Price cannot be greater than the To Price");     
       }  
          
        var maxdays=document.forms["form1"]["max_days"].value;
        if((maxdays)%1!=0){
        alert("The Maximum Handling days value cannot be a floating number");
        }
       }
     
    
    
    
  
      
</script>       
    
<DIV style = "padding : 25px ; font-size : 40px ; text-align : center">
<IMG src="ebay.jpg"></IMG>Shopping</DIV>   

<DIV style = "border : solid 1px black">   
<FORM id = "form1" METHOD="GET" ACTION="<?php echo $_SERVER['PHP_SELF'];?>">
    <B>Key Words* :</B>	<INPUT NAME="keywords" TYPE="text" SIZE=40 VALUE="<?php echo isset($_GET["keywords"]) ? $_GET["keywords"] : "" ?>"> <BR>
    <HR>
    
    <B>Price Range : </B> from $ <INPUT NAME ="price_from" TYPE="text" VALUE="<?php echo isset($_GET["price_from"]) ? $_GET["price_from"] : "" ?>" > to $ <INPUT NAME ="price_to" TYPE="text" VALUE="<?php echo isset($_GET["price_to"]) ? $_GET["price_to"] : "" ?>" > <BR>
    <HR>    
   
    <B>Condition :</B> <INPUT TYPE="checkbox" NAME="condition[]" <?php if(isset($_GET["condition"])){ if(in_array("1000", $_GET["condition"])) {echo                       "checked";}}?>  VALUE="1000">New 
            <INPUT TYPE="checkbox" NAME="condition[]" <?php if(isset($_GET["condition"])){ if(in_array("3000", $_GET["condition"])) {echo "checked";}}?>  VALUE="3000">Used  
            <INPUT TYPE="checkbox" NAME="condition[]" <?php if(isset($_GET["condition"])){ if(in_array("4000", $_GET["condition"])) {echo "checked";}}?>  VALUE="4000">Very Good             
                <INPUT TYPE="checkbox" NAME="condition[]" <?php if(isset($_GET["condition"])){ if(in_array("5000", $_GET["condition"])) {echo "checked";}}?>  VALUE="5000">Good  
            <INPUT TYPE="checkbox" NAME="condition[]" <?php if(isset($_GET["condition"])){ if(in_array("6000", $_GET["condition"])) {echo "checked";}}?>  VALUE="6000">Acceptable <BR>
    <HR>
    <B>Buying Formats :</B><INPUT TYPE="checkbox" NAME="buy[]" <?php if(isset($_GET["buy"])){ if(in_array("FixedPrice", $_GET["buy"])) {echo "checked";}}?> VALUE="FixedPrice">Buy It Now 
            <INPUT TYPE="checkbox" NAME="buy[]" <?php if(isset($_GET["buy"])){ if(in_array("Auction", $_GET["buy"])) {echo "checked";}}?> VALUE="Auction">Auction  
            <INPUT TYPE="checkbox" NAME="buy[]" <?php if(isset($_GET["buy"])){ if(in_array("Classified", $_GET["buy"])) {echo "checked";}}?> VALUE="Classified">Classified Ads <BR>
    <HR>
     <B>Seller :</B> <INPUT TYPE="checkbox" <?php if(isset($_GET["return_accepted"])) echo "checked"; ?> NAME="return_accepted" VALUE="false">Return accepted     <BR>
     <HR>
    <B>Shipping :</B> <INPUT TYPE="checkbox" NAME="free_shipping" <?php if(isset($_GET["free_shipping"])) echo "checked"; ?> VALUE="false">Free Shipping <BR> <BR>
            <SPAN style="margin-left:90px"> <INPUT TYPE="checkbox" NAME="expedited" <?php if(isset($_GET["expedited"])) echo "checked"; ?> VALUE="Expedited">Expedited shipping available</SPAN> <BR>  <BR>
                <SPAN style="margin-left:90px">Max handling time(days):<INPUT TYPE="text" NAME="max_days" VALUE="<?php echo isset($_GET["max_days"]) ? $_GET["max_days"] : "" ?>"></SPAN> <BR>
  <HR>
    <B>Sort by :</B> <SELECT id="sort" NAME="sort_by">
             <OPTION SELECTED  <?php echo(isset($_GET["sort_by"])&&($_GET["sort_by"]=="BestMatch")? ' selected="selected"':'');?>  VALUE="BestMatch">Best Match</OPTION>
             <OPTION <?php echo(isset($_GET["sort_by"])&&($_GET["sort_by"]=="CurrentPriceHighest")? ' selected="selected"':'');?> VALUE="CurrentPriceHighest">Price : highest first</OPTION>
             <OPTION <?php echo(isset($_GET["sort_by"])&&($_GET["sort_by"]=="PricePlusShippingHighest")? ' selected="selected"':'');?> VALUE="PricePlusShippingHighest">Price + Shipping : highest first</OPTION>
             <OPTION <?php echo(isset($_GET["sort_by"])&&($_GET["sort_by"]=="PricePlusShippingLowest")? ' selected="selected"':'');?> VALUE="PricePlusShippingLowest">Price + Shipping : lowest first</OPTION>    
                </SELECT> <BR>
    <HR><BR>
     <B>Results Per Page:</B> <SELECT id="res_page" NAME="result">
                        <OPTION <?php echo(isset($_GET["result"])&&($_GET["result"]=="5")? ' selected="selected"':'');?> SELECTED VALUE="5">5</OPTION>
                        <OPTION <?php echo(isset($_GET["result"])&&($_GET["result"]=="10")? ' selected="selected"':'');?> VALUE="10">10</OPTION>
                        <OPTION <?php echo(isset($_GET["result"])&&($_GET["result"]=="15")? ' selected="selected"':'');?> VALUE="15">15</OPTION>
                        <OPTION <?php echo(isset($_GET["result"])&&($_GET["result"]=="20")? ' selected="selected"':'');?> VALUE="20">20</OPTION>    
                        </SELECT><BR>
 
 <SPAN style="margin-left : 450px"><INPUT TYPE="button" VALUE="Clear" onclick ="Clearform(form1);" NAME ="clear"> <INPUT TYPE="submit" NAME= "Search" onclick = "Search1(form1);" VALUE="Search"> </SPAN>

  
</DIV>    
   </FORM> 
  
<?php 


$keyword=$price_from=$price_to=$cond=$buy=$return1=$free=$sortby=$res=$request=$days=$exp=$xml="";
$i=0;
$a=$b=0;
$nopagerror="";
$URL="http://svcs.eBay.com/services/search/FindingService/v1?siteid=0&SECURITY-APPNAME=USC4cef84-390b-478e-8c79-5e4041fbd81&OPERATION-NAME=findItemsAdvanced&SERVICE-VERSION=1.0.0&RESPONSE-DATA-FORMAT=XML&keywords=";

if(isset($_GET["Search"])){
   
     $keyword= urlencode (utf8_encode ($_GET["keywords"]));
	 $keyword1=$_GET["keywords"];
       $request=$URL.$keyword;  
   
    
   if(!empty($_GET["price_from"]))
       {
         $price_from=$_GET["price_from"];   
          $request.="&itemFilter($i).name=MinPrice&itemFilter($i).value=".$price_from;
          $i=$i+1; 
          
       }
           
    if(!empty($_GET["price_to"]))
    {
       $price_to=$_GET["price_to"];
       $request.="&itemFilter($i).name=MaxPrice&itemFilter($i).value=".$price_to;
        $i=$i+1; 
         
    }
    if(isset($_GET["condition"]))
    {
       $cond=$_GET["condition"];
       $request.="&itemFilter($i).name=Condition";
       $b=count($cond);
       for($a=0;$a<$b;$a++){
           $request.="&itemFilter($i).value($a)=".$cond[$a];
        }
        $i=$i+1; 
    }
    
    if(isset($_GET["buy"]))
    {
     $buy=$_GET["buy"];
     $request.="&itemFilter($i).name=ListingType";
     $b=count($buy);
     for($a=0;$a<$b;$a++){
        $request.="&itemFilter($i).value($a)=".$buy[$a];
        }
        $i=$i+1;     
    }
    
    if(isset($_GET["return_accepted"])){
        
        $return1="true";
        $request.="&itemFilter($i).name=ReturnsAcceptedOnly&itemFilter($i).value=".$return1;
     $i=$i+1;   
    }
       
    
    if(isset($_GET["free_shipping"])){
        
        $free="true";
        $request.="&itemFilter($i).name=FreeShippingOnly&itemFilter($i).value=".$free;
      $i=$i+1;  
    }
      
    if(isset($_GET["expedited"])){
        
        $exp=$_GET["expedited"];
        $request.="&itemFilter($i).name=ExpeditedShippingType&itemFilter($i).value=".$exp;
     $i=$i+1;   
    }
       
    
    if(!empty($_GET["max_days"])){
        $days=$_GET["max_days"];
        $request.="&itemFilter($i).name=MaxHandlingTime&itemFilter($i).value=".$days;
    $i=$i+1;
    }
     
    
    $sortby=$_GET["sort_by"];
    $request.="&sortOrder=".$sortby;
  
    
    
    $res=$_GET["result"];
    $request.="&paginationInput.entriesPerPage=".$res;
   
    
    $xml=simplexml_load_file($request);
    generatexml($xml);    
    
  }
  
 function generatexml($xml)
 {
     global $keyword1;
	 $total_pages=$xml->paginationOutput->totalEntries;
       
	 //$top_rated=$xml->searchResult->item->topRatedListing;
    // $image_link="http://cs-server.usc.edu:45678/hw/hw6/itemTopRated.jpg";
     
     if($total_pages==0)
    {
       $nopagerror="No results were found";
        echo $nopagerror;  
    }
	 else{
          
     echo "<table id=final_table border=1 align=center width=100%>";
    
     echo "<th colspan=2>$total_pages Results for $keyword1</th>";     
	
	 	
    foreach ($xml->searchResult->children() as $childnode){
     
     $children=$childnode->condition->conditionDisplayName;  
    $listing_child=$childnode->listingInfo->listingType; 
     $shipping_child=$childnode->shippingInfo->shippingServiceCost;   
     $expedited_child=$childnode->shippingInfo->expeditedShipping;
     $top_rated=$childnode->topRatedListing;
       
     echo "<tr>"; 
     echo "<td><img src=$childnode->galleryURL</td>"; 
      echo "<td><a href=$childnode->viewItemURL>$childnode->title</a></br>";     
		if($children!=null){
        echo "Condition :$children</br></br>";
	if(!strcmp($top_rated,"true"))	
		echo "<img src=http://cs-server.usc.edu:45678/hw/hw6/itemTopRated.jpg width=40 height=40></img></br></br>";
        }
      if(!strcmp($listing_child,"FixedPrice")||!strcmp($listing_child,"StoreInventory") ){
		  echo "Buy It Now</br></br>";
     }
     else if(!strcmp($listing_child,"Classified"))
     {
		 echo "Classified Ad</br></br>";    
     }
     else if(!strcmp($listing_child,"Auction")){
		 echo "Auction</br></br>";
     }
          if(!strcmp($childnode->returnsAccepted,"true")){
			  echo "Seller Accepts Returns</br></br>";  
        
        }
         if($childnode->shippingInfo->shippingServiceCost!=null && $shipping_child==0){
      echo "FREE Shipping ----- ";
    }
    else {
        echo "Shipping Not FREE ----- ";

    }
         
    if(!strcmp($expedited_child,"true")){
       echo "Expedited Shipping Available ----- ";  
        
        }
        $handling_time=$childnode->shippingInfo->handlingTime;     
		echo "Time to Ship :$handling_time</br></br>";
 
$price=$childnode->sellingStatus->convertedCurrentPrice;
     if($shipping_child!=null && $shipping_child > 0){
          echo "Price:$$price (+$$shipping_child for shipping) &nbsp;";
        
     } 
     else {
         echo "Price:$$price &nbsp;";
     }
		echo "$childnode->location</br></br>";
         
		echo"</td>";    
 echo "</tr>";
     }
  
     echo "</table>";
 }
 }

?>     
   
        </BODY>
</HTML>
