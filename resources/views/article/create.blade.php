
@include('layouts.app')
<div class="container">


<form action="{{ url('/article') }}" method="post">
@csrf

@include('article.form')

</form>
</div>



