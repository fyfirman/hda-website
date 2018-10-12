<main role="main" class="nav-margin">
	<div class="card-post my-5">
		<div class="container p-5 bg-light border">
			<h1><?php echo $tahun; ?></h1>
			<div class="row">
				<div class="col-12">                
					<div class="row">
						<?php foreach ($Bk->result() as $item) : ?>
						<div class="col-lg-4">
							<div class="card card-shadow d-flex">
								<div class="card-header text-center">
									<img src="<?php echo $item->url_foto; ?>" alt="" class="kkm-logo">
									<?php echo $item->nama; ?>
								</div>
								<div class="card-body kkm-content">
                                    <div class="kkm-content-inner">
                                       	Text goes here
                                    </div>
								</div>
								<div class="card-footer text-right">
								    Text goes here
								</div>
							</div>    
						</div>
						<?php endforeach; ?>
					</div>
					</div>
				</div>
			</div>
		</div>
</main>