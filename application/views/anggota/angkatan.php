<main role="main" class="nav-margin">
	<div class="card-post my-5">
		<div class="container p-5 bg-light border">
			<div class="row">
				<div class="col-12">
					<h1> <?= $title ?> </h1>
					<div class="row">
						<?php foreach ($db->result() as $item) : ?>
							<div class="col-lg-3 mb-2">
								<a href="<?php echo site_url('anggota/20').substr($item->npm,6,2)."/".substr($item->npm,10,2)?>">
									<div class="img-responsive mw-100">
										<img src="<?=$item->url_foto?>" alt="" class="mw-100 mh-100">
									</div>
									<div class="text-overlay selection-anggota">
										<a class="background-text"><?php echo $item->npm ?></a>
										<a class="background-text"><?php echo $item->nama ?></a>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>