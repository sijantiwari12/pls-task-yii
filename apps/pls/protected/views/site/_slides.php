<div id="slides" class="swiper" aria-live="polite">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-question"></i>
				<h3>Need help?<br/>Our support desk is here for you.</h3>
				<div class="row">
					<div class="col-md-12 bubble">
						Email us at <a href="mailto:support@pls3rdlearning.com">support@pls3rdlearning.com</a> or
						<br/>
						call us toll-free at <a href="tel:1-888-201-EVAL">1-888-201-EVAL</a>.
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-user-friends"></i>
				<h3>Did you know that SuperEval offers multiple leadership team evaluations?</h3>
				<a href="https://supereval.com/our-evaluations/overview/" target="_blank" class="btn btn-primary">Learn
					More</a>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-comment-alt-edit"></i>
				<h3>SuperEval’s latest products updates include:</h3>
				<div class="row is-flex">
                    <?php if(!empty($latestProduct)) : ?>
                        <div class="col-md-12 bubble">
                            <h3><?php echo $latestProduct['title'] ?></h3>
                            <span><?php echo $latestProduct['description'] ?></span>
                            <a href=<?php echo $latestProduct['read_more'] ?> target="_blank"
                               class="btn btn-primary" style="margin-left:35%">Read More</a>
                        </div>
                    <?php endif ?>
                </div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-comment-alt-lines"></i>
				<h3>SuperEval’s latest products updates include:</h3>
                <div class="row is-flex"  style="text-align: center">
                    <?php if(!empty($latestBlogPost)) : ?>
                        <div class="col-md-12 bubble">
                            <h3><?php echo $latestBlogPost['title'] ?></h3>
                            <span><?php echo $latestBlogPost['description'] ?></span>
                            <a href=<?php echo $latestBlogPost['read_more'] ?> target="_blank" class="btn btn-primary" style="margin-left:33%">Read
                                Our Blog</a>
                        </div>
                    <?php endif ?>
                </div>

			</div>
		</div>
	</div>
	<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</div>

<?php
Yii::app()->clientScript->registerScript('slides', /** @lang JavaScript */ "
	$(function () {
		new Swiper('.swiper', {
			speed: 400,
			autoplay: {
				delay: 8000,
			},
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	});
	");
?>