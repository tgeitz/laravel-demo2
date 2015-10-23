<div class="form-group">
		<!-- Title Form input -->
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}

		<!-- Body Form input -->
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

		<!-- Published At input -->
		<div class="form-group">
			{!! Form::label('published_at', "Publish On:") !!}
			{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
		</div>

		<!-- Add Article Form input -->
		{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

	</div>