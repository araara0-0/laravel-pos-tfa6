@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="page-header">
        <div class="container narrow">
            <p class="eyebrow">About the project</p>
            <h1>A small POS application built to make MVC responsibilities clear.</h1>
            <p class="lead">Raimen POS is a four-page point-of-sale foundation for a ramen shop. It shows how database records move through Eloquent models and controllers into Blade views.</p>
        </div>
    </section>

    <section class="container narrow section">
        <div class="process-list">
            <article>
                <span>1</span>
                <div><h2>Route</h2><p><code>routes/web.php</code> connects each URL to the correct controller method.</p></div>
            </article>
            <article>
                <span>2</span>
                <div><h2>Controller and model</h2><p>The controller uses an Eloquent model to retrieve customer or user records from the database.</p></div>
            </article>
            <article>
                <span>3</span>
                <div><h2>Blade view</h2><p>The view renders the page. The account tables use Blade's <code>@@foreach</code> directive to display each record.</p></div>
            </article>
        </div>
    </section>
@endsection
