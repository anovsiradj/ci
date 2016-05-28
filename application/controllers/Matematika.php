<?php // 201605272222
class Matematika extends CI_Controller
{

	
	function __construct() {

		// jika ct ada method ini,
		// harus manual panggil parent.
		// $this yg awalnya cuma {} biasa, menjadi {} kompleks ci.
		// dimana disediakan akses untuk menggunakan fitur2nya.
		parent::__construct();

		echo "<script>function byid(id_name) { return document.getElementById(id_name); }</script>";
		echo "<style>body {zoom:2;}</style>";
		echo "Module Matematika.<br/>";

	}

	// harus ada.
	// fungsi yg dijalankan saat class dipanggil tanpa method.
	// tentunya setelah __contruct.
	public function index() {

		// $this->load->helper('url');
		// untuk bisa menggunakannya fungsi [base_url], kita harus memanggil helpernya dulu (diatas).

echo <<<HTML
<input id='a' value='0'/> + <input id='b' value='0'/> <button id='tambah'>tambahkan</button>

	<script>
	byid('tambah').onclick = function() {
		location.href = 'matematika/tambah/' + byid('a').value + '/' + byid('b').value;
	};
	</script>
HTML;

	}

	public function tambah($a,$b) {
		echo "{$a} + {$b} = ".($a+$b)."\n";
	}

}