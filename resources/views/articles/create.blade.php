<x-layout>
<x-slot:title>
        create | conduit
    </x-slot>
<div class="editor-page">
  <div class="container page">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-xs-12">
        <form method="post" action="{{route('articles.store')}}">
        @csrf  
        <fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control form-control-lg" placeholder="Article Title" name="title" value="{{old('title')}}" />
            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" placeholder="What's this article about?" name="subtitle" value="{{old('subtitle')}}"/>
            </fieldset>
            <fieldset class="form-group">
              <textarea
                class="form-control"
                rows="8"
                placeholder="Write your article (in markdown)"
                name="article">{{old('article')}}</textarea>
            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" placeholder="Enter tags" name="tag" value="{{old('tag')}}" />
              <div class="tag-list">
                <span class="tag-default tag-pill"> <i class="ion-close-round"></i> tag </span>
              </div>
            </fieldset>
            <button class="btn btn-lg pull-xs-right btn-primary" type="submit">
              Publish Article
            </button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</x-layout>