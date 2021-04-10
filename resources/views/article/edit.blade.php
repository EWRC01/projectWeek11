
@include('layouts.app')
<div class="container">
<form action="{{ url('/article/' .$article->id) }}" method="post">
@csrf

{{method_field('PUT')}}
@include('article.formEditArticle')

</form>
</div>