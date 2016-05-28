<form action="javascript:void(0);" id="tambah">
	<input name='a' value='0'/> + <input name='b' value='0'/>
	<button type="submit">tambahkan</button>
</form>

<form action="javascript:void(0);" id="kurang">
	<input name='a' value='0'/> - <input name='b' value='0'/>
	<button type="submit">kurangkan</button>
</form>

<form action="javascript:void(0);" id="kali">
	<input name='a' value='0'/> &times; <input name='b' value='0'/>
	<button type="submit">kalikan</button>
</form>

<form action="javascript:void(0);" id="bagi">
	<input name='a' value='0'/> / <input name='b' value='0'/>
	<button type="submit">bagikan</button>
</form>

<script>

var mtk_hitung = function() {
	var el = this.elements;
	location.href = location.href+'/'+this.id+'/' + el.a.value + '/' + el.b.value;
};

var fopr = document.getElementsByTagName('form');

for (var i = fopr.length - 1; i >= 0; i--) {
	fopr[i].onsubmit = mtk_hitung;
}

</script>
