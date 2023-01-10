@csrf
  <div class="custom-file">
    <input name="image" type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Elegir Archivo...</label>
  </div>

  <div class="form-group">
    <label for="title">Titulo del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm"
    placeholder="Titulo del proyecto..."
    type="text" 
    name="title" 
    value="{{ old('title', $project->title) }}"
    >
  </div>
  <div class="form-group">
    <label for="url">URL del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm"
    placeholder="Url del proyecto..."
      id="url" 
      type="text" 
      name="url" 
      value="{{ old('url',$project->url) }}"
    >
  </div>
  <div class="form-group">  
    <label for="description"> Descripcion del proyecto</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
      placeholder="Describa aqui su proyecto..."
      name="description">{{ old('description', $project->description) }}</textarea>
  </div>

<button class="btn btn-primary btn-primary btn-lg btn-block">{{ $btnText}}</button>

<a class="btn btn-link btn-block"
  href="{{ route('projects.index')}}">
  Cancelar
</a>