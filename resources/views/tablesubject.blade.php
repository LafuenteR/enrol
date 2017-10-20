		<div style="text-align: center;">
		<form method="POST" action="/subject">
		<h1>Subjects</h1>
		{{csrf_field()}}
		
		<table align="center">
			<tr>
				<th>
					Subject
				</th>
				<th>
					Class Start
				</th>
			</tr>
			<tr>
				<td>
					<input type="text" name="subject1" class="form-control" value="{{ old('subject1') }}"  required>
				</td>
				<td>
					<input type="number" name="startclass1" value="{{ old('startclass1') }}"  class="form-control" required>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" value="{{ old('subject2') }}"  name="subject2" class="form-control" required>
				</td>
				<td>
					<input type="number" value="{{ old('startclass2') }}"  name="startclass2" class="form-control" required>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="subject3" value="{{ old('subject3') }}"  class="form-control" required>
				</td>
				<td>
					<input type="number" name="startclass3" value="{{ old('startclass3') }}"  class="form-control" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" class="btn btn-success"></td>
			</tr>
		</table>
		
		</form>
		</div>
