require 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}

	function testData(){
		$a=$_GET[‘a’];
		$b=$_GET[‘b’];
		$c=$_GET[‘c’];
		
		// Ki?m tra nh?p thi?u d? li?u.        
		if (empty($a) || empty($b) || empty($c)) {
			echo "Nhap du lieu";
			exit();
		}
		
		if (!is_numeric ($a) || !is_numeric ($b) || !is_numeric ($c)) {
			echo "Du lieu khong dung";
			exit();
		}
		
		if (($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b) {
			echo "Yes";
		}
		else {
			echo "No";
		}
	}
	
	function Triangle(){
		$a2=$a*$a;
		$b2=$b*$b;
		$c2=$c*$c;
		
		if ($a == $b && $b == $c) {
        $tam_giac = "tam giac";
		}
			
		else if ($a == $b || $a == $c || $c == $b)  {
				if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
					$tam_giac = "Tam giac vuong can";
				}
		else {
					$tam_giac = "Tam giac can";
				}
		}
			
		else if ($a2==$b2+$c2 || $b2==$a2+$c2 || $c2==$a2+$b2) {
				$tam_giac= "Tam giac vuong";
		}
			
		else {
				$tam_giac = "Tam giac thuong";
		}
	}
}

$user_api = new api();