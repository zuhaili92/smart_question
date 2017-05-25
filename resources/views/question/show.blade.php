<select class="form-control" name="question_category" data-style="form-control">
	@foreach ($folders as $folders_id)
		<?php $folder_data = \App\Folder::where('id','=',$folders_id)->first(); ?>

		<option value="{{$folder_data->id}}">{{$folder_data->folder_name}}</option>

	@endforeach
</select>