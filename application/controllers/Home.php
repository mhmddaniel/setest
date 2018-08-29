<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function calculate()
	{
		$input = $this->input->post('value');
		$literal = $this->parse(strtolower($input));
		$literal = $this->format($literal);

		$literal = $this->total($literal);
		echo json_encode($input. " adalah " . $literal);
	}

	public function test()
	{
		$input = "satu tambah dua kali tiga kurang empat";
		$literal = $this->parse(strtolower($input));
		$literal = $this->format($literal);

		$literal = $this->total($literal);
		echo $literal;
	}

	function parse($input)
	{
		$operators = array("*","/","+","-");
		$subtitute_operator = array("kali","bagi","tambah","kurang");

		$numeriks = array(1,2,3,4,5,6,7,9,0);
		$subtitute_numerik = array("satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","nol");
		if(!is_numeric($input))
		{
			for($i=0;$i<count($operators);$i++){
				$input = str_replace($subtitute_operator[$i],$operators[$i],$input);
			}

			for($i=0;$i<count($numeriks);$i++){
				$input = str_replace($subtitute_numerik[$i],$numeriks[$i],$input);
			}
		}
		else
		{
			$nilai = abs($input);
			$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
			if ($nilai < 12) {
				$input = " ". $huruf[$nilai];
			} else if ($nilai <20) {
				$input = $this->parse($nilai - 10). " belas";
			} else if ($nilai < 100) {
				$input = $this->parse($nilai/10)." puluh". $this->parse($nilai % 10);
			} else if ($nilai < 200) {
				$input = " seratus" . $this->parse($nilai - 100);
			} else if ($nilai < 1000) {
				$input = $this->parse($nilai/100) . " ratus" . $this->parse($nilai % 100);
			}
		}
		return $input;

	}

	function format($input)
	{
		$formats = array(0,10,11,100);
		$subtitute_format = array("kosong","sepuluh","sebelas","seratus");

		for($i=0;$i<count($formats);$i++){
			$input = str_replace($subtitute_format[$i],$formats[$i],$input);
		}

		$counters = array("0","10","00");
		$subtitute_counter = array(" puluh","belas"," ratus");

		for($i=0;$i<count($counters);$i++){
			$input = str_replace($subtitute_counter[$i],$counters[$i],$input);
		}
		return $input;
	}

	function total($input)
	{
		$numbers = preg_split( "/(\(|-|\+|\/|\*|\))/", $input);
		$array = str_split($input);
		$operator = array();
		$total = array();


		foreach ($array as $char) {
			if($char == "+" ||$char == "-" ||$char == "*" ||$char == "/" )
			{
				array_push($operator,$char);
			}
		}

		foreach ($numbers as $number)
		{
			$value=0;
			foreach (explode(" ",$number) as $digit)
			{
				$value = $value + intval($digit);
			}
			array_push($total,$value);
		}
		$result=$total[0];
		for($i=0;$i<count($total)-1;$i++)
		{
			if($operator[$i] == "+")
			{
				$result = $result + $total[$i+1];
			}
			elseif ($operator[$i] == "/")
			{
				$result = $result / $total[$i+1];
			}
			elseif ($operator[$i] == "*")
			{
				$result = $result * $total[$i+1];
			}
			elseif ($operator[$i] == "-")
			{
				$result = $result - $total[$i+1];
			}

		}

		$result = $this->parse($result);
		return $result;
	}
}
