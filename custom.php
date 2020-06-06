<?php

define('PUN_ROOT', dirname(__FILE__).'/');
require PUN_ROOT.'include/common.php';

define('PUN_ACTIVE_PAGE', 'custom');
require PUN_ROOT.'header.php';

?>


<div id="idx1" class="blocktable">
	<h2><span>Sample Table</span></h2>
	<div class="box">
		<div class="inbox">
			<table>
			<thead>
				<tr>
					<th class="tcl" scope="col">Name</th>
					<th class="tc2" scope="col">Platform</th>
					<th class="tcr" scope="col">Managed By</th>
				</tr>
			</thead>
			<tbody>
				<tr class="rowodd">
					<td class="tcl">
						<div class="icon"><div class="nosize">1</div></div>
						<div class="tclcon">
							<h3><a href="viewforum.php?id=4">Forum 2</a></h3>
						</div>
					</td>
					<td class="tc2">WEB</td>
					<td class="tcr"><span class="byuser">by admin</span></td>
				</tr>
				<tr class="roweven">
					<td class="tcl">
						<div class="icon"><div class="nosize">2</div></div>
						<div class="tclcon">
							<h3><a href="viewforum.php?id=3">Forum 1</a></h3>
						</div>
					</td>
					<td class="tc2">WEB</td>
					<td class="tcr"><span class="byuser">by admin</span></td>
				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>



<br/>
<br/>





<?php
require PUN_ROOT.'footer.php';
