
<?php
		$d->reset();
		$sql_detail = "select * from #_news where hienthi=1 and tieubieu!=0 order by id,stt limit 0,1";
		$d->query($sql_detail);
		$new_in = $d->fetch_array();
		
		$d->reset();
		$sql = "select * from #_news_list where hienthi=1 and noibat!=0 order by stt";
		$d->query($sql);
		$danhmuc = $d->result_array();
		
		
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url="index.html";
		$maxR=8;
		$maxP=5;
		$paging=paging_home($pro_in, $url, $curPage, $maxR, $maxP);
		$pro_in=$paging['source'];
?>
<script>
// PHƯƠNG THỨC LOAD KẾT QUẢ 
    function loadData(page,id_tab,id_danhmuc){
        //$("#loadbody").fadeIn("fast");  
        $.ajax
        ({
            type: "POST",
            url: "ajax_paging/ajax_paging.php",
            data: {page:page,id_danhmuc:id_danhmuc},
            success: function(msg)
            {
                //$("#loadbody").fadeOut("fast");
                $(id_tab).html(msg);
				$(id_tab+" .pagination li.active").click(function(){
					var pager = $(this).attr("p");
					var id_tabr = $(this).parents('.hidden_tab').attr("id");
					var id_danhmucr = $(this).parents('.hidden_tab').attr("title");
					
					loadData(pager,"#"+id_tabr,id_danhmucr);
				}); 		 
            }
        });
    }
	
</script>
<div class="box_primary">
   <div class="title_left"><a href="">Trang chủ</a></div><div  class="arrow-left"></div>	
   <div class="title_cat"><a href="">Tin tức</a></div>	<div  class="arrow-right"></div>
   <div class="clear"></div>
   <div class="content_box_primary">
   		<div class="news_index">
        
        	<?php if($new_in['com']=='vnexpress'){?>
                	<a href="tin-tuc/<?=$new_in['id']?>/<?=$new_in['tenkhongdau']?>.html"><img src="<?=$new_in['photo']?>"  alt="NO PHOTO" /></a>
                <?php } else {?>
                	<a href="tin-tuc/<?=$new_in['id']?>/<?=$new_in['tenkhongdau']?>.html"><img src="<?=_upload_news_l.$new_in['thumb']?>" /></a>
            <?php }?>
                
                
  			
            
            <div class="detail">
            	<h3><a href=""><?=$new_in['ten_vi']?></a></h3>
				<?=$new_in['mota_vi']?>
            </div>
        </div>
        <?php for($i=0;$i<count($danhmuc);$i++) {?>
        <!--tab -->
       
        <div class="box-news " title="<?=$danhmuc[$i]["id"]?>">
        	<div class="title_bottom"><h2><a href=""><?=$danhmuc[$i]['ten_vi']?></a></h2></div>
            <div id="tab_danhmuc<?=$i?>" class="hidden_tab" title="<?=$danhmuc[$i]["id"]?>">
            
            </div>
            <script>
				$().ready(function(){
					loadData(1,"#tab_danhmuc<?=$i?>","<?=$danhmuc[$i]["id"]?>");	
				});
			</script>
       
       
        </div>
        <!--end tab -->
        <div class="clear"></div>
        <?php }?>
   </div><!-- End .content_box_primary -->  
</div>

