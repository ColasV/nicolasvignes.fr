<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

	<div id="container">

		<div class="width-sidebar">

			<div class="row">
			<article>
				<h1>Nicolas Vignes</h1>
				<div class="col-xs-12 col-sm-8 col-md-9">
					<h2>Qu'est-ce que ce site ?</h2>
					<p>Ce site a pour but de vous présenter quelques travaux que j'ai réalisé durant mon temps libre et mes études.</p>
					<p>Vous pourrez retrouver pleins de choses concernant notamment l'informatique mais également les mathématiques, la physique et les sciences de l'ingénieur. Vous pourrez également retrouver mon blog qui traite d'un peu de tout et notamment l'actualité informatique et technologique.</p>
					<p>Vous pourrez également consulter d'autres liens concernant les sujets les plus divers selon le temps que j'y consacrerai et l'envie.</p>
				
					<h2>Qui suis-je ?</h2>
					<p>Je suis un étudiant en informatique de 20 ans à <a href="http://ensimag.grenoble-inp.fr/ecole-d-ingenieurs-informatique-mathematiques-appliquees-telecommunications-16933.kjsp?RH=ENSIMAG-EN-01_Pres&amp;RF=ENSIMAG_FR">l'École Nationale Supérieure d'Informatique et de Mathématiques Appliquées</a> de Grenoble en première année.</p>
					<p>Développeur à mes heures perdues et à l'aise dans certains domaines scientifiques notamment les mathématiques et la physique. Je rédige également des tutoriels sur le <a href="http://www.siteduzero.com">Site du Zéro</a> dont l'un a été publié en <a href="http://www.amazon.fr/Domptez-votre-avec-Mountain-ebook/dp/B00BG7JSKY">eBook</a>.</p>
					<p>Je m'intéresse aussi à tout ce qui touche de près et de loin aux nouvelles technologies et à l'informatique, notamment les produits de la marque Apple.</p>
				</div>

			  	<div class="col-xs-12 col-sm-4 col-md-3" style="text-align: center">
			  		<img src="data/images/profil.png" class="img-thumbnail img-responsive" />
			  		<a href="http://ensimag.grenoble-inp.fr/ecole-d-ingenieurs-informatique-mathematiques-appliquees-telecommunications-16933.kjsp?RH=ENSIMAG-EN-01_Pres&amp;RF=ENSIMAG_FR"><img src="data/images/ensimag.gif" class="img-responsive" /></a>
			  		<a href="data/documents/cv-vignes-fr.pdf"><button type="button" class="btn btn-primary btn-block">Télécharger mon CV</button></a>
				</div>

			</article>	
			</div>

			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
			<div class="row">
			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle('link'); ?>
					</h1>
					<p>
						<!--<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>-->
						<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
						<!-- <?php $plxShow->artNbCom(); ?> -->
					</p>
				</header>

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
