    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <!-- YOUTUBE LITE -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>
    <!-- YOUTUBE LITE -->
    {{-- <iframe src="{{url('topic_list/'.$topic[0]->course_id)}}" frameborder="0" width="100%">

</iframe> --}}


{{--
    <div class="col-lg-6 d-flex align-items-stretch">
        <!--  start Scrollspy with nested nav -->
        <div class="card w-100">
            <div class="card-body">
                <h4 class="card-title">Scrollspy with nested nav</h4>
                <p class="mb-3 card-subtitle">
                    Scrollspy also works with nested .navs. If a nested .nav
                    is .active, its parents will also be .active. Scroll the
                    area next to the navbar and watch the active class change.
                </p>
                <div class="row">
                    <div class="col-4">
                        <nav id="navbar-example3" class="navbar navbar-light">
                            <a class="navbar-brand ps-3" href="javascript:void(0)">
                                <img src="../assets/images/logos/favicon.png">
                            </a>
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link active" href="#item-1">Item 1</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1 active" href="#item-1-1">Item 1-1</a>
                                    <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                </nav>
                                <a class="nav-link" href="#item-2">Item 2</a>
                                <a class="nav-link" href="#item-3">Item 3</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                    <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                </nav>
                            </nav>
                        </nav>
                    </div>
                    <div class="col-8">
                        <div class="position-relative mt-3 p-3 border overflow-auto" style="height: 300px"
                            data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
                            <h4 id="item-1">Item 1</h4>
                            <p>
                                farm-to-table bicycle rights whatever. Anim keffiyeh
                                carles cardigan. Velit seitan mcsweeney's photo
                                booth 3 wolf moon irure. Cosby sweater lomo jean
                                shorts, williamsburg hoodie minim qui you probably
                                haven't heard of them et cardigan trust fund culpa
                                biodiesel wes anderson aesthetic. Nihil tattooed
                                accusamus, cred irony biodiesel keffiyeh artisan
                                ullamco consequat.
                            </p>

                            <h5 id="item-1-1">Item 1-1</h5>
                            <p>
                                Veniam marfa mustache skateboard, adipisicing fugiat
                                velit pitchfork beard. Freegan beard aliqua
                                cupidatat mcsweeney's vero. Cupidatat four loko
                                nisi, ea helvetica nulla carles. Tattooed cosby
                                sweater food truck, mcsweeney's quis non freegan
                                vinyl. Lo-fi wes anderson +1 sartorial. Carles non
                                aesthetic exercitation quis gentrify. Brooklyn
                                adipisicing craft beer vice keytar deserunt.
                            </p>

                            <h5 id="item-1-2">Item 1-1</h5>
                            <p>
                                Occaecat commodo aliqua delectus. Fap craft beer
                                deserunt skateboard ea. Lomo bicycle rights
                                adipisicing banh mi, velit ea sunt next level
                                locavore single-origin coffee in magna veniam. High
                                life id vinyl, echo park consequat quis aliquip banh
                                mi pitchfork. Vero VHS est adipisicing. Consectetur
                                nisi DIY minim messenger bag. Cred ex in,
                                sustainable delectus consectetur fanny pack iphone.
                            </p>

                            <h4 id="item-2">Item 2</h4>
                            <p>
                                In incididunt echo park, officia deserunt
                                mcsweeney's proident master cleanse thundercats
                                sapiente veniam. Excepteur VHS elit, proident
                                shoreditch +1 biodiesel laborum craft beer.
                                Single-origin coffee wayfarers irure four loko,
                                cupidatat terry richardson master cleanse. Assumenda
                                you probably haven't heard of them art party fanny
                                pack, tattooed nulla cardigan tempor ad. Proident
                                wolf nesciunt sartorial keffiyeh eu banh mi
                                sustainable. Elit wolf voluptate, lo-fi ea portland
                                before they sold out four loko. Locavore enim
                                nostrud mlkshk brooklyn nesciunt.
                            </p>

                            <h4 id="item-3">Item 3</h4>
                            <p>
                                Ad leggings keytar, brunch id art party dolor
                                labore. Pitchfork yr enim lo-fi before they sold out
                                qui. Tumblr farm-to-table bicycle rights whatever.
                                Anim keffiyeh carles cardigan. Velit seitan
                                mcsweeney's photo booth 3 wolf moon irure. Cosby
                                sweater lomo jean shorts, williamsburg hoodie minim
                                qui you probably haven't heard of them et cardigan
                                trust fund culpa biodiesel wes anderson aesthetic.
                                Nihil tattooed accusamus, cred irony biodiesel
                                keffiyeh artisan ullamco consequat.
                            </p>

                            <h5 id="item-3-1">Item 3-1</h5>
                            <p>
                                Ad leggings keytar, brunch id art party dolor
                                labore. Pitchfork yr enim lo-fi before they sold out
                                qui. Tumblr farm-to-table bicycle rights whatever.
                                Anim keffiyeh carles cardigan. Velit seitan
                                mcsweeney's photo booth 3 wolf moon irure. Cosby
                                sweater lomo jean shorts, williamsburg hoodie minim
                                qui you probably haven't heard of them et cardigan
                                trust fund culpa biodiesel wes anderson aesthetic.
                                Nihil tattooed accusamus, cred irony biodiesel
                                keffiyeh artisan ullamco consequat.
                            </p>

                            <h5 id="item-3-2">Item 3-2</h5>
                            <p>
                                Ad leggings keytar, brunch id art party dolor
                                labore. Pitchfork yr enim lo-fi before they sold out
                                qui. Tumblr farm-to-table bicycle rights whatever.
                                Anim keffiyeh carles cardigan. Velit seitan
                                mcsweeney's photo booth 3 wolf moon irure. Cosby
                                sweater lomo jean shorts, williamsburg hoodie minim
                                qui you probably haven't heard of them et cardigan
                                trust fund culpa biodiesel wes anderson aesthetic.
                                Nihil tattooed accusamus, cred irony biodiesel
                                keffiyeh artisan ullamco consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  end Scrollspy with nested nav -->
    </div> --}}


    @foreach ($topic_list as $topic_lists)
    @endforeach


    <div class="card">

        <div class="card-body border-bottom">
            <div class="d-flex align-items-center gap-6 flex-wrap">


                @if ($topic_list[0]->course->presentation == '')
                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="matdash-img" class="rounded-circle"
                        width="40" height="40">
                @else
                    <img src="{{ asset('imageusers/' . $topic_list[0]->course->presentation) }}" alt="matdash-img"
                        class="rounded-circle" width="40" height="40">
                @endif


                <h5 class="mb-0">{{ $topic_list[0]->course->description }} </h5>
                <span class="fs-2">
                    <span class="p-1 text-bg-light rounded-circle d-inline-block"></span>
                    15 min
                    ago
                </span>
            </div>
<p></p>

<script>

    document.addEventListener('DOMContentLoaded', function () {
      const liteYoutube = document.querySelector('lite-youtube');
      if (liteYoutube) {
        const playButton = liteYoutube.shadowRoot.querySelector('#playButton');
        if (playButton) {
          playButton.style.width = '0px';
          playButton.style.height = '00px';
          playButton.style.backgroundRepeat = 'no-repeat'; // Evita la repetición
        }
      }
    });
  </script>
     <style>


        lite-youtube {
            /* No Shadow */
            --lite-youtube-frame-shadow-visible: no;
            width: 100%;
        }


        .lite-youtube-fallback {
            aspect-ratio: 16 / 9;
            /* matches YouTube player */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 1em;
            padding: 1em;
            background-color: #c00d0d;
            color: #000000;
            text-decoration: none;
        }

        /* right-facing triangle "Play" icon */
        .lite-youtube-fallback::before {
            display: block;
            content: '';
            border: solid transparent;
            border-width: 2em 0 2em 3em;
            border-left-color: rgb(0, 0, 0);
        }

        .lite-youtube-fallback:hover::before {
            border-left-color: #fff;
        }

        .lite-youtube-fallback:focus {
            outline: 2px solid red;
        }



    </style>
            @foreach ($topic_list as $topic_lists)
            <h6>
                {{ $topic_lists->description}}
            </h6>




@if ($topic_lists->type=="video_drive")
<iframe src="https://drive.google.com/embeddedfolderview?id={{ $topic_lists->video }}#grid" style="width:100%; height:500px; border:0;"></iframe>


@elseif($topic_lists->type=="video_youtube")
     {{-- <p class="text-dark my-3">
                   {{ $topic_lists->description}}
                </p> --}}
                @php
                    $url = explode('=', $topic_lists->video);

                @endphp

                <lite-youtube style="width:30%" class="rounded-1 border border-2 mb-3 h-100" posterquality="maxresdefault"  videoid="{{ $url[1] }}">


                </lite-youtube>

                @endif
                {{-- <iframe class="rounded-4 border border-2 mb-3 h-300"
                    src="https://www.youtube.com/embed/{{ $url[1] }}" frameborder="0"></iframe> --}}
            @endforeach

            {{-- <div class="d-flex align-items-center">
            <div class="d-flex align-items-center gap-2">
                <a class="round-32 rounded-circle btn btn-primary p-0 hstack justify-content-center"
                    href="javascript:void(0)" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="Like">
                    <i class="ti ti-thumb-up"></i>
                </a>
                <span class="text-dark fw-semibold">129</span>
            </div>
            <div class="d-flex align-items-center gap-2 ms-4">
                <a class="round-32 rounded-circle btn btn-secondary p-0 hstack justify-content-center"
                    href="javascript:void(0)" data-bs-toggle="tooltip"
                    data-bs-placement="top" data-bs-title="Comment">
                    <i class="ti ti-message-2"></i>
                </a>
                <span class="text-dark fw-semibold">0</span>
            </div>
            <a class="text-dark ms-auto d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                href="javascript:void(0)" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Share">
                <i class="ti ti-share"></i>
            </a>
        </div> --}}
        </div>
        {{-- <div class="d-flex align-items-center gap-6 flex-wrap p-3 flex-lg-nowrap">
        <img src="../assets/images/profile/user-1.jpg" alt="matdash-img"
            class="rounded-circle" width="33" height="33">
        <input type="text" class="form-control py-8" id="exampleInputtext3"
            aria-describedby="textHelp" placeholder="Comment">
        <button class="btn btn-primary">Comment</button>
    </div> --}}
    </div>
