<!doctype html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# talkwithsimaimi: http://ogp.me/ns/fb/talkwithsimaimi#">


<title><?php echo $nama_situs;?></title>

<link href='<?php echo base_url('asset/gambar/favicon.ico'); ?>' rel='icon' type='image/x-icon'/>
<meta property="og:type"   content="<?php echo $nama_situs;?>" />
<meta property="og:url"    content="<?php echo base_url();?>" />
<meta property="og:title"  content="<?php echo $nama_situs;?>" />
<meta property="og:image"  content="<?php echo base_url('asset/gambar/logo.png');?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
<meta name="format-detection" content="telephone=no" />



<script src="<?php echo base_url('asset/js/jquery-2.1.1.min.js');?>"></script>
<script src="<?php echo base_url('asset/js/jquery-ui.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('asset/css/hp.curcol.css');?>">
<script src="<?php echo base_url('asset/js/jquery-1.7.js') ?>" type="text/javascript"></script>


</head>
<body style="background:url('<?php echo base_url('asset/gambar/talk_bg.png');?>');">




<script>
$(document).ready(function(){
  function search(){
  	var texx = $("#pesan").val();
  	if(texx!=""){
  		$("#status").html("<img src='<?php echo base_url('asset/gambar/load.gif') ?>'>");
  		$("#pesan").prop('disabled', true);
  		$("#loading").show();
		$.getJSON("<?php echo base_url('auth/tanya.cc?txt='); ?>" + texx, function(result) {
  		$('#tah').append('<tr align="right"><td class="jelema" style="position:relative"><div class="img-jelema" style="margin-right:5px;"></div><div style="float:right;"><div class="right-convo">' + result.tanya+ '</div></td></tr>');
  		$('#tah').append('<tr><td class="bot" style="position:relative"><div class="img-bot" style="margin-left:5px;"></div><div style="float:left;"><div class="left-convo">' + result.respon+ '</div></td></tr>');
  		$('#msgs').animate({scrollTop: $('#msgs').prop("scrollHeight")}, 500);
      $("#pesan").val("");
  		$("#pesan").focus();
  		$("#status").html("");
  		$("#pesan").prop('disabled', false);
		$("#loading").hide();

	});
	}else{
		//$('#tah').append('<tr align="right"><td class="jelema" style="position:relative"><div class="img-jelema" style="margin-right:5px;"></div><div style="float:right;"><div class="right-convo">Aku Maho</div></td></tr>');
  		//$('#tah').append('<tr><td class="bot" style="position:relative"><div class="img-bot" style="margin-left:5px;"></div><div style="float:left;"><div class="left-convo">Iya Emang</div></td></tr>');
	}
  }

$('#pesan').keyup(function(e) {
          if(e.keyCode == 13) {
             search();
          }
      });
$("#kirim").click(function(){
		search();
	});
});

</script>
<div id="msgs" style="width:100%;height:83%;overflow-y:auto;overflow-x:hidden;position:relative;background:url('<?php echo base_url('asset/gambar/talk_bg.png');?>');">
<form name="chatform" id="chatform" role="form" onsubmit="return false;" method="post" >
<input type="hidden" name="hid-lang" id="hid-lang" value="id"/>
<input type="hidden" name="hid-rt" id="hid-rt" />
<input type="hidden" name="hid-srt" id="hid-srt" />
<div id="chat">
<div id="title-div" style="height:30px;border:0;">
<div id="title">
<div id="title-cell" style="vertical-align:middle;color:#ffffff;padding:7px 0px 0px 0px;">

<b><?php echo $nama_situs;?> - Daftar/Masuk</b>
</div>
</div>
</div>


<div id="msgs" class="contents_wrap" style="overflow:auto;width:100%px;height:63%;padding:10px; background:url('<?php echo base_url('asset/gambar/talk_bg.png');?>');min-height:265px">

<table class="new-templete" id="tah">
<tr>
<td class="bot" style="position:relative">
<div class="img-bot" style="margin-left:5px;"></div>
<div style="float:left;">
<div class="left-convo" >Halo kaka mau <br>login kah?
</div>
</td>
</tr>

</table>

<div id="status"></div>
</div>

</div>
</div>

<div class="control-groups" id="chat-bottom" style="background-color:#ffffff;border-top:1px solid #e2e7e6;border-bottom:1px solid #e2e7e6;">
<div class="input-group" id="chat-area" style="margin:0px 0px 0px 0px;">
<input type="text" name="txt" id="pesan" placeholder="ketik 'heeh' untuk iya" class="form-control">

<span class="btn btn-default input-group-addon" id="kirim" style="background-color:#32353f;color:#ffffff">Kirim</span>
</div>
</div>




<div id="menu">
<div id="beranda-li_highlight">
<a id="beranda-btn" class="btn" href="<?php echo base_url();?>" ><div id="img_beranda_aktif"></div>Beranda</a>
</div>
<div id="taros-li">
<a id="taros-btn" class="btn" href="<?php echo base_url('ruang_obrolan.cc');?>" ><div id="img_taros"></div>Ruang Obrolan</a>
</div>
<div id="kabar-li">
<a id="kabar-btn" class="btn" href="<?php echo base_url('kabar_berita.cc');?>" ><div id="img_kabar"></div>Kabar Berita</a>
</div>
<div id="tentang-li">
<a id="tentang-btn" class="btn" href="<?php echo base_url('tentang.cc');?>" ><div id="img_tentang"></div>Tentang</a>
</div>
</div>



</form>


</div>

</body>
</html>