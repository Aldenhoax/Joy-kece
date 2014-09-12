<!doctype html>
<html>
<head>


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
    $.getJSON("<?php echo base_url('tanya.cc?txt='); ?>" + texx, function(result) {
      $('#tah').append('<tr align="right"><td class="jelema" style="position:relative"><div class="img-jelema" style="margin-right:5px;"></div><div style="float:right;"><div class="right-convo">' + result.ask+ '</div></td></tr>');
      $('#tah').append('<tr><td class="bot" style="position:relative"><div class="img-bot" style="margin-left:5px;"></div><div style="float:left;"><div class="left-convo">' + result.response+ '</div></td></tr>');
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
<div style="width:100%;height:83%;overflow-y:auto;overflow-x:hidden;position:relative;background:url('<?php echo base_url('asset/gambar/talk_bg.png');?>');">
<form name="chatform" id="chatform" role="form" onsubmit="return false;" method="post" >
<input type="hidden" name="hid-lang" id="hid-lang" value="id"/>
<input type="hidden" name="hid-rt" id="hid-rt" />
<input type="hidden" name="hid-srt" id="hid-srt" />
<div id="chat">
<div id="title-div" style="height:30px;border:0;">
<div id="title">
<div id="title-cell" style="vertical-align:middle;color:#ffffff;padding:7px 0px 0px 0px;">

<b><?php echo $nama_situs;?></b>
</div>
</div>
</div>


<div id="msgs" class="contents_wrap" style="overflow:auto;width:100%px;height:63%;padding:10px; background:url('<?php echo base_url('asset/gambar/talk_bg.png');?>');min-height:265px">
<!--
<div class="input-group" id="chat-area" style="border-radius: 0px;">
<input type="text" name="updateStat" maxlength="140" class="form-control" placeholder="Update status dulu dong kak.. :)" style="border-radius: 0px; border: 0; outline: none; box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none;"></input>
<span class="btn btn-default input-group-addon" id="chatbtn" style="border-radius: 0px; background-color: #fff; border-left: 1px solid #e2e7e6;">Update</span>
</div> -->
<div style="font-size:9pt;font-weight:bold;color:#ffffff;padding:2px 5px 2px 5px;background-color:#32353F;text-align:center;"><?php echo $jml;?> Temen Yang Paling Banyak Ngajar</div>
<?php 
  if(empty($data)){

  }else{
    foreach ($data as $data) {
      echo "
      <div style='margin:0 auto;background-color:#f6f6f6;display:table;width:95%;height:auto;margin-top:10px;margin-bottom:5px;border-radius:13px;border:2px solid #32353f;padding:14px;position:relative;'>
<div style='float:left;'>
<a href='http://facebook.com/".$data['username']."' target='_blank' id='profile-link style='float:left;'>
<img src='https://graph.facebook.com/".$data['username']."/picture' class=img-thumbnail style=left:0;width:60px;height:60px;border-radius:100%;border:0px;padding:0px;>
</a>
</div>
<div style='color:#8e8e93;float:left;padding:10px 0px 0px 10px'>";
if($nama==$data['nama_awal']." ".$data['nama_akhir']){
  echo "Kaka</b> ";
}else{
  echo "Kak <b>".$data['nama_awal']." ".$data['nama_akhir']."</b> ";
}

if($data['total']>=1){
  echo "udah ngajar sebanyak ".$data['total']." Kata<br>";
}else{
  echo "belum ngajarin apa apa :o<br>";
}
echo " 
</div>
</div>
      ";
    }
  }
?>


</div>

<div style="font-size:9pt;font-weight:bold;color:#ffffff;padding:2px 5px 2px 5px;background-color:#32353F;text-align:center;">Kaka mau tampil juga di atas? makanya ajarin <?php echo $nama_admin; ?> donk ka..
<br>Mau tau cara ngajarnya? klik <?php echo anchor(base_url('ngajar.cc'),'disini');?> dong ka.. :D
</div>

</div>

<div id="status"></div>
</div>

</div>
</div>

<div class="control-groups" id="chat-bottom" style="background-color:#ffffff;border-top:1px solid #e2e7e6;border-bottom:1px solid #e2e7e6;">
<div class="input-group" id="chat-area" style="margin:0px 0px 0px 0px;">



</div>
</div>




<div id="menu">
<div id="beranda-li">
<a id="beranda-btn" class="btn" href="<?php echo base_url();?>" ><div id="img_beranda"></div>Beranda</a>
</div>
<div id="taros-li">
<a id="taros-btn" class="btn" href="<?php echo base_url('ruang_obrolan.cc');?>" ><div id="img_taros"></div>Ruang Obrolan</a>
</div>
<div id="kabar-li_highlight">
<a id="kabar-btn" class="btn" href="<?php echo base_url('kabar_berita.cc');?>" ><div id="img_kabar_aktif"></div>Kabar Berita</a>
</div>
<div id="tentang-li">
<a id="tentang-btn" class="btn" href="<?php echo base_url('tentang.cc');?>" ><div id="img_tentang"></div>Tentang</a>
</div>
</div>


</form>


</div>

</body>
</html>