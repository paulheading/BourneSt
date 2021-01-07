<div class="load-area">
	<div class="load-area-status">
		<?php get_template_part('svg/load-sun.svg'); ?>
	</div>
</div>

<script type="text/javascript">

var loadTl = gsap.timeline({repeat:-1});

function LoadStatus() {
	loadTl.to('.load-area-status',{
		transformOrigin: "center",
		duration: 3,
		rotate: 720,
		ease: "none"
	});
}

LoadStatus();

</script>
