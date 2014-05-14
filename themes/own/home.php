<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div id="container">

		<div class="width-sidebar">

			

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			<div class="row article">
			
			<div class="col-xs-2 text-center">
				<img src="data/images/img-<?php echo $plxShow->artId(); ?>.png" alt="article1" class="img-circle img-responsive">
			</div>
			<div class="col-xs-10">
			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
				</header>

				<section>
					<p><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('Publié le #num_day #month #num_year(4)'); ?></time> - <?php $plxShow->artAuthor(); ?></p>
				</section>

				<section>
					<?php $plxShow->artChapo(); ?>
				</section>

				<!--<footer>
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>-->

			</article>
			</div>
			</div>
			<?php endwhile; ?>

			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			<!--<div class="rss">
				<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
			</div>-->

		</div>

		<?php //include(dirname(__FILE__).'/sidebar.php'); ?>

	</div>

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
