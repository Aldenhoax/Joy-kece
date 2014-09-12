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
    var tanggal = $("#tanggal").val();
    var jawab = $("#jawab").val();
    var tanya = $("#tanya").val();
        if(tanya!="" && jawab!=""){
        //tampilkan status loading dan animasinya
        $("#status").html("<img src='<?php echo base_url('asset/gambar/load.gif') ?>'>");
        $("#loading").show();
              $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ngajar/masukin'); ?>",
                data :  "tanggal=" + tanggal + "&tanya=" + tanya + "&jawab=" + jawab,
                  success:function(data){
                  window.alert("Pengajaran kaka sesaat lagi bisa di gunakan..");
                  //hilangkan status dan animasi loading
                $("#status").html("");
                $("#tanya").val("");
                $("#jawab").val("");
                $("#loading").hide();
                  }
              });
        }       
  }

$("#btn-ajar").click(function(){
    search();
  });
});

</script>
<div style="width:100%;height:83%;overflow-y:auto;overflow-x:hidden;position:relative;background:url('<?php echo base_url('asset/gambar/talk_bg.png');?>');">
<div id="chat">
<div id="title-div" style="height:30px;border:0;">
<div id="title">
<div id="title-cell" style="vertical-align:middle;color:#ffffff;padding:7px 0px 0px 0px;">

<b><?php echo $nama_situs;?> - Ngajar</b>
<a onClick="javascript:history.go(-1)" ><span id="topclose"></span></a>
</div>
</div>
</div>


<div id="msgs" class="contents_wrap" style="overflow:auto;width:100%px;height:63%;padding:10px; background:url('<?php echo base_url('asset/gambar/talk_bg.png');?>');min-height:265px">
<!--
<div class="input-group" id="chat-area" style="border-radius: 0px;">
<input type="text" name="updateStat" maxlength="140" class="form-control" placeholder="Update status dulu dong kak.. :)" style="border-radius: 0px; border: 0; outline: none; box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none;"></input>
<span class="btn btn-default input-group-addon" id="chatbtn" style="border-radius: 0px; background-color: #fff; border-left: 1px solid #e2e7e6;">Update</span>
</div> -->
<div style="font-size:9pt;font-weight:bold;color:#ffffff;padding:2px 5px 2px 5px;background-color:#32353F;text-align:center;">
<?php echo anchor(base_url('ngajar.cc'),'Ngajar','style="text-decoration:none;"');?> | Urut Ngajar</div>


<div id="teach-form" class="contents_wrap" style="background-color:#ffffff;padding-top:10px;padding-bottom:10px;">
<div id="req-area">
<div id="req-cell" style="padding-right:40px">
Cing Ajarkeun ath urang
<div class="desc-req-text"><b>mun di tanya kieu</b></div>
<div id="text-zone" style="position:relative">
<div id="img-jelema"></div>
<input type="hidden" id='tanggal' name='tanggal' value='<?php echo date('Y-m-d'); ?>'>
<textarea name="tanya" id="tanya" class="form-control" style="border:1px solid #c8c8c8;border-radius:4px;"></textarea>
</div>
<div class="cb"></div>
</div>
</div>
<div id="resp-area" >
<div id="resp-cell" style="padding-left:40px">
<div class="desc-resp-text"><b>urang kudu ngajawab</b></div>
<div id="text-zone" style="position:relative">
<div id="img-bot"></div>
<textarea name="jawab" id="jawab" class="form-control" style="border:1px solid #c8c8c8;border-radius:4px;"></textarea>
</div>
<div class="cb"></div>
</div>
</div>
<a id="btn-ajar" style="text-decoration:none;margin: 0 auto;padding-bottom:10px; display:table;">
<div style="width:200px;text-align:center;margin:0px auto 0px;padding:5px 0px;font-size:10pt;font-weight:bold;color:#ffffff;text-decoration:none;border-radius:4px;background-color:#44cf7d;">Ajarkeun</div>
</a>
</div>
</div>
</div>
<div id="status"></div>
</div>

<div style="font-size:9pt;font-weight:bold;color:#ffffff;padding:2px 5px 2px 5px;background-color:#32353F;text-align:center;">Gunakanlah kata kata yang sopan ka.. :)
</div>

</div>


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