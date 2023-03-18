@extends('frondend.layouts.master')
@section('content')
    <main id="main" class="">
        <div id="content" class="blog-wrapper blog-archive page-wrapper">
            <div class="row align-center">
                <div class="large-10 col">
                    <div id="row-333920144" class="row large-columns-3 medium-columns- small-columns-1 row-masonry"
                        data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
                        @foreach ($tintucs as $tintuc)
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="{{ route('home.show',['id' => $tintuc->id,'slug'=>str_slug($tintuc->title)]) }}" class="plain">
                                    <div class="box box-text-bottom box-blog-post has-hover">
                                        <div class="box-image">
                                            <div class="image-cover" style="padding-top: 56%">
                                                <img width="650" height="400"
                                                    src="{{ asset($tintuc->image) }}"
                                                    class="attachment-medium size-medium wp-post-image"
                                                    sizes="(max-width: 650px) 100vw, 650px" />
                                            </div>
                                        </div>
                                        <div class="box-text text-left">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large">
                                                    {{ $tintuc->title }}
                                                </h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt">
                                                    {!! Str::words($tintuc->description,20) !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="badge absolute top post-date badge-outline">
                                            <div class="badge-inner">
                                                <span class="post-date-day">{{ $tintuc->updated_at->format('d')??$tintuc->created_at->format('d') }}</span><br />
                                                <span class="post-date-month is-xsmall">{{$tintuc->updated_at->format('d')?? $tintuc->created_at->format('m') }}</span>
                                                <span class="post-date-month is-xsmall">{{ $tintuc->created_at->format('y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <ul class="page-numbers nav-pagination links text-center">
                           <h1 class="btn">{{$tintucs->links()}}</h1>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    {{-- <h1>{{  route('home.index') }}</h1> --}}
@endsection
