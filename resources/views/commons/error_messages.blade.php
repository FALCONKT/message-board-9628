<!--共通Error文言-->
<!--使い回し用-->

<!--返ってくるError文言の箇所-->
<!--MassageController　に　$this->validate() を書くと、
自動的に $errors 変数にエラーメッセージが格納される-->
@if (count($errors) > 0)
    <ul class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif