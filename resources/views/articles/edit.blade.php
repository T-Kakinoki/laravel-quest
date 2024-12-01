<x-layout>
    <x-slot:title>
        edit | conduit
    </x-slot>
<div class="editor-page">
  <div class="container page">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-xs-12">
        <form method="post" action="{{route('articles.update',$article)}}">
        @method('PATCH')    
        @csrf  
        <fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control form-control-lg" placeholder="Article Title" name="title" value="{{old('title',$article->title)}}"/>
            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" placeholder="What's this article about?" name="subtitle" value="{{old('subtitle',$article->subtitle)}}"/>
            </fieldset>
            <fieldset class="form-group">
              <textarea
                class="form-control"
                rows="8"
                placeholder="Write your article (in markdown)"
                name="article">{{old('article',$article->article)}}</textarea>
            </fieldset>
            <fieldset class="form-group">
              <input type="text" class="form-control" placeholder="Enter tags" name="tag" value="{{old('tag',$article->tag)}}" />
              <div class="tag-list">
                <span class="tag-default tag-pill"> <i class="ion-close-round"></i> tag </span>
              </div>
            </fieldset>
            <button class="btn btn-lg pull-xs-right btn-primary" type="submit">
              Update Article
            </button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
</x-layout>