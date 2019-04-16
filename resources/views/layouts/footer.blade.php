<div class="btn-group d-flex fixed-bottom bg-white">
    <p class="mx-auto my-2 copywriter">© 2019 JOKERS LLC.</p>
    <a href="{{ action('HomeController@index') }}" class="btn btn-outline-light w-100 text-warning py-2 {{ \Route::current() -> getName() == 'home.index' ? 'active' : '' }}"><i class="fas fa-search mr-3"></i>SEARCH</a>
    @guest
        <a href="{{ route('login') }}" class="btn btn-outline-light w-100 text-danger py-2"><i class="fas fa-camera mr-3"></i>POST</a>
    @else
        <a href="#" class="upload_button btn btn-outline-light w-100 text-danger py-2"><i class="fas fa-camera mr-3"></i>POST</a>
    @endguest
</div>
{!! Form::open(['route' => ['entrances.store'], 'method' => 'post', 'files' => true, 'class' => 'entrance-form']) !!}
{!! Form::file('file', ['id' => 'file']) !!}
{!! Form::close() !!}