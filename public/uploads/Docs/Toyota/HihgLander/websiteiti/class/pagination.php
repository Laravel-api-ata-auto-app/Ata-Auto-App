<?php
class pagging{
	
	private $ShowNumberPage; //number record for view 
	private $CountRow; // get count all row from table
	private $TableName;
	private $NumberPage; // number view page after call
	private $ViewPage = 5;
	public function __construct($numpage,$tname){
		$this->ShowNumberPage = $numpage;
		$this->TableName = $tname;
	}
	public function pagging(){
		$query = mysql_query("select * from ".$this->TableName."");
		$this->CountRow = mysql_num_rows($query);
		$this->NumberPage = ceil($this->CountRow/$this->ShowNumberPage);
		
		if(empty($_GET['npage'])){
			echo "<span style=\"color:#FFF;background-color:#000;border-radius:20px;\">Page 1 of ".$this->NumberPage."</span>";
		}else{
		echo "<span style=\"color:#FFF;background-color:#000;border-radius:20px;\">Page ".$_GET['npage']." of ".$this->NumberPage."</span>";	
		}
		if(isset($_GET['npage']) && $_GET['npage']>1){
			echo"<span onclick=\"window.location='index.php?p=7&npage=".($_GET['npage']-1)."'\">Previous</span>";
		}else{
			echo"<span style='color:gray;border-radius:20px;'>Previous</span>";
		}
		echo"<span onclick=\"window.location='index.php?p=7&npage=1'\">1...</span>";
		$i=1;
		$starttext = 1;
		if(isset($_GET['npage']) && $_GET['npage']>=$this->ViewPage){
			
			if($_GET['npage']<$this->NumberPage-2){
				$starttext = $_GET['npage'] - 2;
			}else{
				$starttext = ($this->NumberPage-$this->ViewPage)+1;
			}
		}
		$stoploop = $this->ViewPage;
		if($this->NumberPage<$stoploop){
			$stoploop = $this->NumberPage;
		}
		
		
		while($i<=$stoploop){
			if(isset($_GET['npage']) && $starttext==$_GET['npage']){
				echo "<span style='background-color:#00FFFF;color:#FFF;border-radius:20px;'>".$starttext."</span>";
			}else{
				echo"<span onclick=\"window.location='index.php?p=7&npage=".$starttext."'\">".$starttext."</span>";
			}
			
			$starttext = $starttext + 1;
			$i++;
		}
		
		if(isset($_GET['npage']) && $_GET['npage']<=($this->NumberPage-$this->ViewPage)+2){
		echo"<span>...</span>";
		echo"<span onclick=\"window.location='index.php?p=7&npage=".$this->NumberPage."'\">".$this->NumberPage."</span>";
		}else{
		echo"<span onclick=\"window.location='index.php?p=7&npage=".$this->NumberPage."'\">...".$this->NumberPage."</span>";
		}
		
		
		
		if(!isset($_GET['npage'])){
			echo"<span onclick=\"window.location='index.php?p=7&npage=2'\">Next</span>";
		}else{
			if($_GET['npage']<$this->NumberPage ){
				echo"<span onclick=\"window.location='index.php?p=7&npage=".($_GET['npage']+1)."'\">Next</span>";	
			}else{
				echo"<span style='color:gray;border-radius:20px;'>End</span>";
			}
		}
		
		
	}
}
?>