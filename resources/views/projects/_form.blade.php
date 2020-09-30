<div class="form-group">
    <label> Titulo del proyecto </label>
    <input class="form-control bg-light shadow" type="text" name="title" value="{{ old('title',$project-> title ?? '' )}}">
</div>

<div class="form-group">
    <label> Descripcion </label>
    <textarea class="form-control bg-light shadow" name="description"> {{ old('description', $project-> description ?? '')}}</textarea>
</div>

<div class="form-group">
    <button class="btn  btn-primary btn-lg btn-block">{{ $btnTxt }}</button>
    <a class="btn btn-link btn-block" href="{{route('projects.index')}}">Cancelar</a>
</div>
