<main role="main" class="nav-margin">
	<div class="card-post my-5">
		<div class="container p-5 bg-light border">
			<div class="row">
				<div class="col-12">
					<h1> Delphi </h1>
					<div class="row">
						<?php $j=1; for ($i = 0; $i < 65; $i++) : ?>
						
						<div class="col-lg-3 mb-2">
							<a href="<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; echo $url."/".$j;?>" class="d-flex">
								<div class="img-responsive mw-100">
									<img src="<?php if($j<10){echo 'http://hda.himatif.org/assets/foto/2017/0'.$j.'.jpg';}else{echo 'http://hda.himatif.org/assets/foto/2017/'.$j.'.jpg';}?> " alt="" class="mw-100 mh-100">
								</div>
								<div class="text-overlay selection-anggota">
									140810170051
									<br>
									Firmansyah Yanuar
								</div>
							</a>
						</div>
						<?php $j++; endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>