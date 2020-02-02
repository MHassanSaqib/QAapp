@csrf

<input type='hidden' name='question_id' value={{$question->id}} >

<div class="form-group">
    <label for="body">Answer</label>

        <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body"></textarea>

        @error('body')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

</div>

<div class="form-group ">
    <div>
        <button type="submit" class="btn btn-primary">
            {{ $buttonName }}
        </button>

    </div>
</div>
