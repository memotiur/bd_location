# bd_location
Bangladesh location like division, district, sub district list

<h3>How to get location?</h3>
	<p>This php function received 2 parameters <code>bd_location('location_type', 'return_type')</code><br>
		<code>print_r(bd_location('division'));</code>
	</p>

# Get all district
<code>print_r(bd_location('district', 'all'));</code>

# Get all division wise district
<code>print_r(bd_location('district', 'divisionName'));</code>

# Get all district wise sub-district/upzilla
<code>print_r(bd_location('upzilla', 'districtName'));</code>
