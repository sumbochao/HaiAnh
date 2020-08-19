<script type="text/javascript" src="plugins/marquee/gistfile1.js"></script>
<div class="tt-desc">
	<div class="demo">
		<marquee behavior="scroll" direction="left" scrollamount="1" width="1200">
			<p><?=$row_setting['slogan_vi']?></p>
		</marquee>
	</div>
</div>
<script type="text/javascript">
    <!--
    $(function () {
        // basic version is: $('div.demo marquee').marquee() - but we're doing some sexy extras
        
        $('div.demo marquee').marquee('pointer').mouseover(function () {
            $(this).trigger('stop');
        }).mouseout(function () {
            $(this).trigger('start');
        }).mousemove(function (event) {
            if ($(this).data('drag') == true) {
                this.scrollLeft = $(this).data('scrollX') + ($(this).data('x') - event.clientX);
            }
        }).mousedown(function (event) {
            $(this).data('drag', true).data('x', event.clientX).data('scrollX', this.scrollLeft);
        }).mouseup(function () {
            $(this).data('drag', false);
        });
    });
    //-->
    </script>