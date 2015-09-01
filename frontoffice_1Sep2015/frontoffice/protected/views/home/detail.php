<div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title"><?php echo $page_name;?> </h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="/SWCS/frontoffice/home">Home</a></li>
                                <li><?php echo $page_name;?> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="content margin-top20 margin-bottom20">
        <div class="container">
			<?php
			if (isset($page_content)) {
				echo $page_content;
			}
			?>
		</div>
	</div>