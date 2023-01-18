@csrf
  @if($project->image)
  <img class="card-img-top mb-2"
      style="height: 250px"; object-fit: cover
      src="/storage/{{ $project->image }}"
      alt="{{ $project->title }}"
  >
  @endif

  <div class="custom-file mb-2">
    <input name="image" type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Elegir Archivo...</label>
  </div>

  <div class="form-group">
    <label for="category_id">Categoria del proyecto</label>
    <select 
        name="category_id" 
        id="category_id"
        class="form-control border-0 bg-light shadow-sm"
        >
            <option value="">Seleccione...</option>
            @foreach($categories as $id => $name)
            <option value="{{ $id }}"
                    {{-- {{$id === $project->category_id ? 'selected' : '' }} --}}
                    @if($id == old('category_id', $project->category_id)) selected @endif
            >{{ $name }}</option>
            @endforeach
      </select>
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