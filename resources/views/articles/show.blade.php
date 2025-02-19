<x-layout>
  <x-slot:title>
    {{$article->title}}
  </x-slot>
  <div class="article-page">
  <div class="banner">
    <div class="container">
      <h1>{{$article->title}}</h1>

      <div class="article-meta">
        &nbsp;&nbsp;
        <a href="{{route('articles.edit',$article)}}" class="btn btn-sm btn-outline-secondary">
          <i class="ion-edit"></i> Edit Article
        </a>
        <form method="post" action="{{route('articles.destroy',$article)}}">
            @method('DELETE')
            @csrf
            <button class="btn btn-sm btn-outline-danger">
              <i class="ion-trash-a"></i> Delete Article
            </button>
        </form>

      </div>
    </div>
  </div>

  <div class="container page">
    <div class="row article-content">
      <div class="col-md-12">
        <p>
          Web development technologies have evolved at an incredible clip over the past few years.
        </p>
        <h2 id="introducing-ionic">Introducing RealWorld.</h2>
        <p>It's a great solution for learning how other frameworks work.</p>
        <ul class="tag-list">
          <li class="tag-default tag-pill tag-outline">realworld</li>
          <li class="tag-default tag-pill tag-outline">implementations</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</x-layout>