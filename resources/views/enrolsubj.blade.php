@if($subj == true)
	<table align="center">
		<tr>
			<th>
				<p>Subject</p>
			</th>
			<th>
				<p>Class Start</p> 
			</th>
			<th>
				<p>Class End</p>
			</th>
		</tr>
@endif

	
@foreach($subjects as $subject)
	@if($subject->user_id == Auth::user()->id)
		<tr>
			<td>
				<p>{{$subject->subject}}</p>
			</td>
			<td>
				<p>{{$subject->startclass}}</p>
			</td>
			<td>
				<p>{{$subject->endclass}}</p>
			</td>
		</tr>
	@endif
@endforeach
	</table>
