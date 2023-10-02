<?= $this->extend('nav') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
        <?= $this->include('sidebar') ?>
        </div>
        <div class="col-9">
        
      



       <div class="row clearfix progress-box">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#1b00ff" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(27, 0, 255); padding: 0px; appearance: none;"></div>
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
								<span class="d-block">80% Average <i class="fa fa-line-chart text-blue"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob dial2" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#00e091" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(0, 224, 145); padding: 0px; appearance: none;"></div>
								<h5 class="text-light-green padding-top-10 h5">
									Business Captured
								</h5>
								<span class="d-block">75% Average <i class="fa text-light-green fa-line-chart"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#f56767" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(245, 103, 103); padding: 0px; appearance: none;"></div>
								<h5 class="text-light-orange padding-top-10 h5">
									Projects Speed
								</h5>
								<span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<div style="display:inline;width:120px;height:120px;"><canvas width="120" height="120"></canvas><input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgcolor="#fff" data-fgcolor="#a683eb" data-angleoffset="180" readonly="readonly" style="width: 64px; height: 40px; position: absolute; vertical-align: middle; margin-top: 40px; margin-left: -92px; border: 0px; background: none rgb(255, 255, 255); font: bold 24px Arial; text-align: center; color: rgb(166, 131, 235); padding: 0px; appearance: none;"></div>
								<h5 class="text-light-purple padding-top-10 h5">
									Panding Orders
								</h5>
								<span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i></span>
							</div>
						</div>
					</div>
				</div>
        </div>
       
    </div>
</div>
<?= $this->include('footer') ?>



  
<?= $this->endSection() ?>