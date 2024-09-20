
<x-layouts.website  title="{{ $seoTitle['value'] }}" seoDec="{{$seoDec['value'] }}" seoAuth="{{$seoAuth['value'] }}" seoKey="{{$seoKey['value'] }}">





        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse"
                    data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap"
                                style="height: 500px; background-image: url('{{ asset('assets/images/head-bg.jpg') }}');">
                                <img class="uk-invisible" src="{{ asset('assets/images/head-bg.jpg') }}" alt=""
                                    height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>About</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="uk-container uk-container-center alt">
            <ul style="margin-bottom: unset;" class="uk-breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li class="uk-active"><span>About</span>
                </li>
            </ul>
        </div>

        <br><br>
            <div class="tm-bottom-a-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
    
                        <div class="uk-width-1-1 uk-row-first">
                            <div class="uk-panel">
                                <div class="about-team-page-top-wrap">
                                    <div class="uk-grid">
                                        <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                            <div class="top-title">
                                                @if ($aboutheadingL)
                                                    
                                                <h2 class="txtFilter">{{($aboutheadingL->value != null)?$aboutheadingL->value:''}}</h2>
                                                @endif
                                               
                                                
                                            </div>
                                            @if ($boldparaL)    
                                            <p class="sub-title">{{ ($boldparaL->value != null)?$boldparaL->value:''}}</p>
                                            @endif
                                           
                                            
                                            @if ($paraL)
                                            <p>{{($paraL->value != null)?$paraL->value:''}}</p>
                                            @endif
                                        </div>
                                    @if ($imageL)
                                        <div class="uk-width-large-5-10 uk-width-small-1-1">
                                            <div class="top-banner uk-cover-background uk-position-relative" style="height: 420px; background-image: url('{{asset('assets/images/about-team-banner.jpg')}}');">
                                                <img class="uk-invisible" src={{(Storage::url(($imageL->value != null)?$imageL->value:''))}} alt="">
                                                <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle inner">
                                    @endif
                                    @if ($ImgQuoteLeft)
                                    {{($ImgQuoteLeft->value != null)?$ImgQuoteLeft->value:''}}
                                    @endif
                                    @if ($leftquoteauthor)
                                    <div class="name">{{($leftquoteauthor->value != null)?$leftquoteauthor->value:''}}</div>
                                    @endif
                                        

  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="tm-top-d-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-top-d" class="tm-top-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
    
                        <div class="uk-width-1-1">
                            <div class="uk-panel">
                                <div class="donate-wrap">
                                    <div class="donate-inner">
                                        <h3><span>Players </span>Information</h3>
                                        <div class="uk-grid">
                                            <div class="uk-width-8-10 uk-push-1-10 intro-text">
                                            @if ($PlayerInformation)
                                                {{($PlayerInformation->value != null)?$PlayerInformation->value:''}} 
                                            @endif
                                        </div>
                                        </div>
                                            
                                        <br>
                                        <a class="donate-btn" href="{{route('players')}}"><span>Players Info</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
    
            <div class="tm-bottom-a-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
    
                        <div class="uk-width-1-1 uk-row-first">
                            <div class="uk-panel">
                                <div class="about-team-page-top-wrap">
                                    <div class="uk-grid">
                                        @if ($imageR)
                                        <div class="uk-width-large-5-10 uk-width-small-1-1">
                                            <div class="top-banner uk-cover-background uk-position-relative" style="height: 420px; background-image: url('{{asset('assets/images/about-team-banner.jpg')}}');">
                                                <img class="uk-invisible" src="{{(Storage::url(($imageR->value != null)?$imageR->value:''))}} " alt="">
                                        @endif
                                        @if ($ImgQuoteRight)
                                        <div class=" uk-position-cover uk-flex uk-flex-center uk-flex-middle inner"><div class="quote">{{($ImgQuoteRight->value != null)?$ImgQuoteRight->value:''}}</div>
                                        @endif
                                        @if ($Rightquoteauthor)
                                    

                                        <span class="name">{{($Rightquoteauthor->value != null)?$Rightquoteauthor->value:''}}</span>
                                        @endif
                                            
                                        

                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                            <div class="top-title">
                                                @if ($aboutheadingR)
                                                <h2 class="txtFilter">{{($aboutheadingR->value != null)?$aboutheadingR->value:''}}</h2>
                                                @endif
                                               
                                            </div>
                                            @if ($boldparaR)
                                            <p class="sub-title">{{($boldparaR->value != null)?$boldparaR->value:''}}</p>
                                            @endif

                                            @if ($paraR)
                                            <p>{{($paraR->value != null)?$paraR->value:''}}</p>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
         

<script>
    let elements = document.getElementsByClassName("txtFilter");

Array.from(elements).forEach((element) => {
  let txt = element.innerHTML;
  let oldTxt = txt.split(" ");

  if (oldTxt.length > 0) {
    if (oldTxt.length > 1) {
      let halfIndex = Math.floor(oldTxt.length / 2);
      let newTxt = "";
      oldTxt.forEach((e, key) => {
        if (key == halfIndex) {
          newTxt += "<span style='color:#ffc722'>";
        }
        if (key != 0 && key != oldTxt.length) {
          newTxt += " ";
        }
        newTxt += e;
        if (key == oldTxt.length - 1) {
          newTxt += "</span>";
        }
      });
      element.innerHTML = newTxt;
    }
  }
});

</script>
</x-layouts.website> 