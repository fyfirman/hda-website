<main role="main" class="nav-margin">
	<div class="card-post my-5">
		<div class="container p-5 bg-light border">
			<div class="row">
				<div class="col-12">
					<h1><?= $title ?></h1>
					<div class="row">
						<?php foreach ($bk->result() as $item) : ?>
						<div class="col-lg-3 mb-2">
							<div class="card card-shadow d-flex">
								<div class="card-header">
									<img src="http://hda.himatif.org/assets/foto/20<?php echo substr($item->npm,6,2) ?>/<?php echo substr($item->npm,10,2) ?>.jpg" alt="" class="mw-100 mh-100">
								</div>
								<div class="card-body text-center">
									<?php echo $item->jabatan ?>
									<br>
									<?php echo $item->nama ?>
								</div>
							</div>
						</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>		
		</div>
	</div>
</main>