@extends('layouts.employee-cloud')
@section('content')
<div class="container">
	<div class="row">
		<div id="content" class="col-lg-12">





			<!-- PAGE HEADER-->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-header">
						<!-- STYLER -->

						<!-- /STYLER -->





						<div class="clearfix">
							<h3 class="content-title pull-left">Welcome, <a href="<?php echo $profileLink; ?>"><?php echo $displayName; ?></a></h3>




						</div>
						<div class="description">Choose a section you would like to begin with.</div>
					</div>
				</div>
			</div>
			<!-- /PAGE HEADER -->



			<!-- First Row CONTENT -->
			<div class="row">
				<!-- COLUMN 1 -->
				<div class="col-lg-6">
					<div class="jumbotron">
						<h1>Website</h1>
						<p>Quickly create, view &amp; edit crew requests.</p>
						<p>
							<a href="/vendor/crews" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
								<span class="visible-xs"><i class="fa fa-paperclip fa-fw"></i> <?php echo $crewsSectionButtonText_xs; ?></span>
								<span class="visible-sm"><i class="fa fa-paperclip fa-fw"></i> <?php echo $crewsSectionButtonText_sm; ?></span>
								<span class="visible-md"><i class="fa fa-paperclip fa-fw"></i> <?php echo $crewsSectionButtonText_md; ?></span>
								<span class="visible-lg"><i class="fa fa-paperclip fa-fw"></i> <?php echo $crewsSectionButtonText_lg; ?></span>
							</a>
						</p>
					</div>
				</div>
				<!-- /COLUMN 1 -->

				<!-- COLUMN 2 -->
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>APIs</h1>
						<p>Payoff statement for jobs. </p>
						<p>
							<a href="/vendor/jobs" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
								<span class="visible-xs"><i class="fa fa-money fa-fw"></i> <?php echo $jobsSectionButtonText_xs; ?></span>
								<span class="visible-sm"><i class="fa fa-money fa-fw"></i> <?php echo $jobsSectionButtonText_sm; ?></span>
								<span class="visible-md"><i class="fa fa-money fa-fw"></i> <?php echo $jobsSectionButtonText_md; ?></span>
								<span class="visible-lg"><i class="fa fa-money fa-fw"></i> <?php echo $jobsSectionButtonText_lg; ?></span>
							</a>
						</p>
					</div>
				</div>
				<!-- /COLUMN 2 -->
			</div>
		   <!-- /First Row CONTENT -->



			<!-- Second Row CONTENT -->
			<div class="row">
				<!-- COLUMN 1 -->
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>Tracking</h1>
						<p>Keep track of jobs, deadlines, and crew confirmations.</p>
						<p>
							<a href="/vendor/calendar" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
								<span class="visible-xs"><i class="fa fa-laptop fa-fw"></i> <?php echo $calendarSectionButtonText_xs; ?></span>
								<span class="visible-sm"><i class="fa fa-laptop fa-fw"></i> <?php echo $calendarSectionButtonText_sm; ?></span>
								<span class="visible-md"><i class="fa fa-laptop fa-fw"></i> <?php echo $calendarSectionButtonText_md; ?></span>
								<span class="visible-lg"><i class="fa fa-laptop fa-fw"></i> <?php echo $calendarSectionButtonText_lg; ?></span>
							</a>
						</p>
					</div>
				</div>
				<!-- /COLUMN 1 -->

				<!-- COLUMN 2 -->
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>Analytics</h1>
						<p>Your personal number cruncher!</p>
						<a href="/vendor/analytics" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
							<span class="visible-xs"><i class="fa fa-bar-chart-o fa-fw"></i> <?php echo $analyticsSectionButtonText_xs; ?></span>
							<span class="visible-sm"><i class="fa fa-bar-chart-o fa-fw"></i> <?php echo $analyticsSectionButtonText_sm; ?></span>
							<span class="visible-md"><i class="fa fa-bar-chart-o fa-fw"></i> <?php echo $analyticsSectionButtonText_md; ?></span>
							<span class="visible-lg"><i class="fa fa-bar-chart-o fa-fw"></i> <?php echo $analyticsSectionButtonText_lg; ?></span>
						</a>
					</div>
				</div>
				<!-- /COLUMN 2 -->
			</div>
		   <!-- /Second Row CONTENT -->



			<!-- Third Row CONTENT -->
			<div class="row">
				<!-- COLUMN 1 -->
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>Employees</h1>
						<p>Create colleagues & assign roles</p>
						<a href="/vendor/reports" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
							<span class="visible-xs"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_xs; ?></span>
							<span class="visible-sm"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_sm; ?></span>
							<span class="visible-md"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_md; ?></span>
							<span class="visible-lg"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_lg; ?></span>
						</a>
					</div>
				</div>
				<!-- /COLUMN 1 -->

				<!-- COLUMN 2 -->
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>Users & Members</h1>
						<p>Monitor user & member site activity.</p>
						<a href="/vendor/help" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
							<span class="visible-xs"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_xs; ?></span>
							<span class="visible-sm"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_sm; ?></span>
							<span class="visible-md"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_md; ?></span>
							<span class="visible-lg"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_lg; ?></span>
						</a>
					</div>
				</div>
				<!-- /COLUMN 2 -->
			</div>



			<!-- Fourth Row CONTENT -->
			<div class="row">
				<!-- COLUMN 1 -->
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>Report Center</h1>
						<p>Generate reports. Share with your clients</p>
						<a href="/vendor/reports" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
							<span class="visible-xs"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_xs; ?></span>
							<span class="visible-sm"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_sm; ?></span>
							<span class="visible-md"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_md; ?></span>
							<span class="visible-lg"><i class="fa fa-folder-open fa-fw"></i> <?php echo $reportsSectionButtonText_lg; ?></span>
						</a>
					</div>
				</div>
				<!-- /COLUMN 1 -->

				<!-- COLUMN 2 -->
				<div class="col-md-6">
					<div class="jumbotron">
						<h1>Help & Settings</h1>
						<p>Get answers. Contact support.</p>
						<a href="/vendor/help" class="btn btn-primary btn-icon input-block-level btn-lg" role="button">
							<span class="visible-xs"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_xs; ?></span>
							<span class="visible-sm"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_sm; ?></span>
							<span class="visible-md"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_md; ?></span>
							<span class="visible-lg"><i class="fa fa-question-circle fa-fw"></i> <?php echo $helpSectionButtonText_lg; ?></span>
						</a>
					</div>
				</div>
				<!-- /COLUMN 2 -->
			</div>


			<div class="footer-tools">
				<span class="go-top">
					<i class="fa fa-chevron-up"></i> Top
				</span>
			</div>
		</div><!-- /CONTENT-->
	</div>
</div>
@stop