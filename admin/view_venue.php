<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT a.*,u.name as aname FROM arts a inner join users u on u.id = a.artist_id where a.id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<!-- Author : MH RONY
Website Link: https://developerrony.com
GitHub Link: https://github.com/dev-mhrony
Youtube Video Link:https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
Youtube Channel Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw -->
<style type="text/css">
.imgs {
    margin: .5em;
    max-width: calc(100%);
    max-height: calc(100%);
}

.imgs img {
    max-width: calc(100%);
    max-height: calc(100%);
    cursor: pointer;
}

#content {
    border-left: 1px solid gray;
}
</style>
<div class="container-field">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <!-- Author : MH RONY
Website Link: https://developerrony.com
GitHub Link: https://github.com/dev-mhrony
Youtube Video Link:https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
Youtube Channel Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <?php 
					  		$images = array();
					  		if(isset($id)){
					  			$fpath = 'assets/uploads/artist_'.$id;
					  			$images= scandir($fpath);
					  		}
					  		foreach($images as $k => $v):
					  			if(!in_array($v,array('.','..'))):
			  					
					  	?>
                            <div class="imgs">
                                <img src="<?php echo $fpath.'/'.$v ?>" alt="">
                            </div>
                            <?php
					  			else:
			  						unset($images[$v]);
					  			endif;
				  			endforeach;
					  	?>
                        </div>
                    </div>
                    <!-- Author : MH RONY
Website Link: https://developerrony.com
GitHub Link: https://github.com/dev-mhrony
Youtube Video Link:https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
Youtube Channel Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw -->
                    <div class="col-md-8" id="content">
                        <h4 class="text-center"><b><?php echo ucwords($art_title) ?></b></h4>
                        <hr class="divider">
                        <center><small><?php echo ucwords($aname) ?></small></center>
                        <br>
                        <?php echo html_entity_decode($art_description); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.imgs img').click(function() {
    viewer_modal($(this).attr('src'))
})
</script>
<!-- Author : MH RONY
Website Link: https://developerrony.com
GitHub Link: https://github.com/dev-mhrony
Youtube Video Link:https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
Youtube Channel Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw -->