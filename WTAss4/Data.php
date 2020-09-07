<html>
<body>
<?php
class jsonData{
	  public $jsonArray;
	  public $option;
	  public $url;

	  public function __construct($url){
		$this->url = $url;
		$jsonFile = file_get_contents($this->url);
		$this->jsonArray = json_decode($jsonFile,TRUE);
		
		
		
		for($i=0; $i<count($this->jsonArray['menu_items']); $i++){
			$this->option[$i]=$this->jsonArray['menu_items'][$i]['name'];
		 }
	  }
      
      public function getValues(){
		print("<div>");
		print("<div>
			<select id='menu' name='menu' onchange='this.form.submit();' style='width:50%;'>
			<option selected disabled>Select Menu</option>");	
			foreach($this->option as $item){
				print("<option value='$item'>$item</option>");
            }
            
			print("</select></div>");
			print("</div>");
	  }
	  
	  public function completeData(){
		  return $this->jsonArray;
	  }
    }
   
?>
</body>
</html>
