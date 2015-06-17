<?php
/*
Template Name: School List
*/
?>
<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">

        <?php
              // Start the Loop.
              while ( have_posts() ) : the_post();
                // Include the post format-specific content template.
                get_template_part( 'content', 'page' );
              endwhile;
            ?>
        </div>

<?php 
// get all the schools
$json = file_get_contents('http://ec-iappsrv1.wrdsb.ca/api/school');
$schools = json_decode($json);

// closed schools
$omit = array('ALC','ALI','ALR','ALU','ANC','BAD','BLV','BRI','CAS','CLC','DKS','ELE','HAR','HMR','LAF','LNA','LUC','LUT','MBR','MCQ','NWL','PYS','RMT','SBL','SBM','SMH','TBR','UHS','UTR','WNB','WSR','WSS','XSE','XSS');

 // full size display ?>
        <div class="col-md-6 hidden-xs" id="elementaryschools">
        	<p class="hidden-xs hidden-md hidden-lg"><a href="#secondaryschools">Secondary Schools</a></p>
        	<h2>Elementary Schools</h2>
					<div class="table-responsive" >
						<table class="table table-striped table-fixed-head">
							<thead>
								<tr>
									<th class="text-left">School/Website</th>
									<th class="text-left">Address/Phone</th>
									<!--<th class="text-left">Phone</th>-->
									<!--<th class="text-left">Email</th>-->
								</tr>
							</thead>
							<tbody>
<?php
foreach($schools as $school) 
{
	if((!in_array($school->alpha_code,$omit)) && ($school->school_type_code=='Elem')) 
	{
		$phone = $school->phone;
		$phone = '('.substr($phone,0,3).') '.substr($phone,3,3).'-'.substr($phone,6,4);
		$website = strtolower($school->website);
		$code = strtolower($school->alpha_code);
		$postalcode = substr($school->postal_code,0,3).' '.substr($school->postal_code,3,3);
		echo <<< END
						<tr>
							<td><strong>$school->full_name</strong><br />
								<a href="$website" target="_blank">$website</a>
							</td>
							<td>$school->street_address<br />
								$school->city $postalcode (<a href="http://maps.google.com/maps?f=q&hl=en&q=$school->street_address+$school->city+Ontario" target="_blank">Map</a>)
								<br />
								Phone: $phone
							</td>
							<!--<td>$phone</td>-->
							<!--<td><a href="mailto:$code@wrdsb.on.ca">$code@wrdsb.on.ca</a>
							</td>-->
						</tr>
END;
	}
}
?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-6 hidden-xs" id="secondaryschools">
			<p class="hidden-xs hidden-md hidden-lg"><a href="#elementaryschools">Elementary Schools</a></p>
			<h2>Secondary Schools</h2>
			<div class="table-responsive" >
				<table class="table table-striped table-fixed-head">
					<thead>
						<tr>
							<th class="text-left">School/Website</th>
							<th class="text-left">Address/Phone</th>
							<!--<th class="text-left">Phone</th>-->
							<!--<th class="text-left">Email</th>-->
						</tr>
					</thead>
					<tbody>
<?php
foreach($schools as $school) 
{
	if((!in_array($school->alpha_code,$omit)) && ($school->school_type_code=='Sec')) 
	{
		$phone = $school->phone;
		$phone = '('.substr($phone,0,3).') '.substr($phone,3,3).'-'.substr($phone,6,4);
		$website = strtolower($school->website);
		$code = strtolower($school->alpha_code);
		$postalcode = substr($school->postal_code,0,3).' '.substr($school->postal_code,3,3);
		echo <<< END
						<tr>
							<td><strong>$school->full_name</strong><br />
								<a href="$website" target="_blank">$website</a>
							</td>
							<td>$school->street_address<br />
								$school->city $postalcode (<a href="http://maps.google.com/maps?f=q&hl=en&q=$school->street_address+$school->city+Ontario" target="_blank">Map</a>)
								<br />
								Phone: $phone
							</td>
							<!--<td>$phone</td>-->
							<!--<td><a href="mailto:$code@wrdsb.on.ca">$code@wrdsb.on.ca</a>
							</td>-->
						</tr>
END;
	}
}
?>
					</tbody>
				</table>
			</div>
		</div>

<?php // small screen display ?>
		<div class="col-md-12 visible-xs">
			<p><a href="#secondaryschools_xs">Secondary Schools</a></p>

			<h2 id="elementaryschools_xs">Elementary Schools</h2>

			<ul class="table-list">
<?php
foreach($schools as $school) 
{
	if((!in_array($school->alpha_code,$omit)) && ($school->school_type_code=='Elem')) 
	{
		$phone = $school->phone;
		$phone = '('.substr($phone,0,3).') '.substr($phone,3,3).'-'.substr($phone,6,4);
		$website = strtolower($school->website);
		$code = strtolower($school->alpha_code);
		$postalcode = substr($school->postal_code,0,3).' '.substr($school->postal_code,3,3);

		echo <<< END
				<li>
					<p><strong>$school->full_name</strong><br />
					<a href="$website" target="_blank">$website</a></p>
					<p>$school->street_address<br />
					$school->city $postalcode (<a href="http://maps.google.com/maps?f=q&hl=en&q=$school->street_address+$school->city+Ontario" target="_blank">Map</a>)</p>
					<p>$phone</p>
				</li>
END;
	}
}
				?>
			</ul>

			<p><a href="#elementaryschools_xs">Elementary Schools</a></p>

			<h2 id="secondaryschools_xs">Secondary Schools</h2>

			<ul class="table-list">
<?php
foreach($schools as $school) 
{
	if((!in_array($school->alpha_code,$omit)) && ($school->school_type_code=='Sec')) 
	{
		$phone = $school->phone;
		$phone = '('.substr($phone,0,3).') '.substr($phone,3,3).'-'.substr($phone,6,4);
		$website = strtolower($school->website);
		$code = strtolower($school->alpha_code);
		$postalcode = substr($school->postal_code,0,3).' '.substr($school->postal_code,3,3);

		echo <<< END
				<li>
					<p><strong>$school->full_name</strong><br />
					<a href="$website" target="_blank">$website</a></p>
					<p>$school->street_address<br />
					$school->city $postalcode (<a href="http://maps.google.com/maps?f=q&hl=en&q=$school->street_address+$school->city+Ontario" target="_blank">Map</a>)</p>
					<p>$phone</p>
				</li>
END;
	}
}
?>
			</ul>
		</div>
	</div>
</div>

<?php get_footer();
