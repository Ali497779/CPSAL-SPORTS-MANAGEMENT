<x-layouts.website title="{{ $seoTitle['value'] }}" seoDec="{{ $seoDec['value'] }}" seoAuth="{{ $seoAuth['value'] }}"
    seoKey="{{ $seoKey['value'] }}">


    <div class="over-wrap">
        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse"
                    data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap"
                                style="height: 290px; background-image: url('{{ asset('assets/images/head-bg.jpg') }}');">
                                <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290"
                                    width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Gallery</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="uk-active"><span>Gallery</span>
                </li>
            </ul>
        </div>

        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-1-1 uk-row-first">
                    <main id="tm-content" class="tm-content">

                        <div class="uk-container uk-container-center tt-gallery-top">
                            <div class="uk-grid" data-uk-grid-match="">
                                @if ($Heading)
                                    <div class="uk-width-medium-3-10 uk-width-small-1-1 title">{{ ($Heading->value != null)?$Heading->value:'' }}
                                    </div>
                                @endif
                                @if ($Paragraph)
                                    <div class="uk-width-medium-7-10 uk-width-small-1-1 text">{{ ($Paragraph->value != null)?$Paragraph->value:'' }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div style="height: 54px;" class="uk-sticky-placeholder">
                            <div style="margin: 0px;" class="button-group filter-button-group"
                                >
                                <div class="uk-container uk-container-center">
                                    <button class="active" data-filter="*">all</button>
                                    @foreach ($filter as $galleryfilter)
                                        <button class=""
                                            data-filter=".{{ $galleryfilter->name }}">{{ $galleryfilter->name }}</button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">
                            @foreach ($gallerypic as $picture)
                                <div
                                    class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item {{ $picture->filter }}">
                                    <div class="gallery-album">
                                        <a href="{{ Storage::url($picture->picture) }}"
                                            data-uk-lightbox="{group:'my-group'}" class="img-0">
                                            
                                            <img style="object-fit:cover;" src="{{ asset('assets/gallery/'.$picture->picture) }}"
                                                alt="">
                                        </a>
                                        <a href="{{ asset('assets/images/Off_they_go._There_had_been_a_false_start_and_the_runner_was_shown_a_great_big_red_card_then_marched_off._So_mean._(7745214550).jpg') }}"
                                            data-uk-lightbox="{group:'my-group'}" class="img-1">
                                            <img style="object-fit: cover"
                                                src="{{ asset('assets/images/Off_they_go._There_had_been_a_false_start_and_the_runner_was_shown_a_great_big_red_card_then_marched_off._So_mean._(7745214550).jpg') }}"
                                                alt="">
                                        </a>
                                        <div class="titles">
                                            {{-- <div class="title">Douglas Payne </div> --}}
                                            <div class="sub-title">{{ $picture->filter }} </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
                </main>
            </div>
        </div>
    </div>
    </div>

</x-layouts.website>
