	<div id="userinfo">
		<table>
			<tr>
				<td>
					<h4 class="title">Name</h4>
				</td>
				<td>
					<h4>{{Auth::user()->name}}</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4 class="title">Course</h4>
				</td>
				<td>
					<h4>{{Auth::user()->course}}</h4>
				</td>
			</tr>
			<tr>
				<td>
					<h4 class="title">Email</h4>
				</td>
				<td>
					<h4>{{Auth::user()->email}}</h4>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<a href="/logout" class="btn btn-xs btn-primary"><h4>Logout</h4></a>
				</td>
			</tr>
		</table>
		
	</div>