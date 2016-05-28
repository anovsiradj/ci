<?php // 201605272222, 201605281252
class Matematika extends CI_Controller
{
	function __construct() {

		// method ini optional.

		// jika ct ada method ini,
		// harus panggil manual parent.
		// $this yg awalnya cuma {} biasa, menjadi {} ci.
		// dimana disediakan akses untuk menggunakan fitur2nya.
		parent::__construct();

		// ::load otomatis ada jika parent dari method ini (construct) sudah dipanggil
		$this->load->view('mtk/index');


	}
	// harus ada.
	// fungsi yg dijalankan saat class dipanggil tanpa method.
	public function index() {

		$this->load->view('mtk/operator');

	}

	public function tambah($a = 0,$b = 0) {
		$res = $a+$b;
		$this->load->view('mtk/tambah',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}

	public function kurang($a = 0,$b = 0) {
		$res = $a-$b;
		$this->load->view('mtk/kurang',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}

	public function bagi($a = 0,$b = 0) {
		$res = @($a/$b)+0;
		$this->load->view('mtk/bagi',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}

	public function kali($a = 0,$b = 0) {
		$res = $a*$b;
		$this->load->view('mtk/kali',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}

	public function __destruct() {
		// print(__FILE__);
		// $this->load->helper('url');
		// untuk bisa menggunakannya fungsi [base_url], kita harus memanggil helpernya dulu (diatas).
		// echo "<br/><br/>";
		// echo "<a href='".base_url(strtolower(__CLASS__))."'>Index</a>";
	}

}