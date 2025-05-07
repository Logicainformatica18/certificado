    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <!-- YOUTUBE LITE -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>
    <!-- YOUTUBE LITE -->
    {{-- <iframe src="{{url('topic_list/'.$topic[0]->course_id)}}" frameborder="0" width="100%">

</iframe> --}}




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
                document.addEventListener('DOMContentLoaded', function() {
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
                @php
                    $url = 'cursos/' . $topic_lists->course_id . '/tema/' . $topic_lists->id;
                @endphp
                <h6>
                    <a target="_blank" href="{{ url($url) }}">{{ $topic_lists->description }}</a>
                </h6>




                @if ($topic_lists->type == 'video_drive')
                    <iframe src="https://drive.google.com/file/d/{{ $topic_lists->video }}/preview" width="100%"
                        height="200" allow="autoplay" allowfullscreen></iframe>
                @elseif($topic_lists->type == 'video_youtube')
                    {{-- <p class="text-dark my-3">
                   {{ $topic_lists->description}}
                </p> --}}
                    @php
                        $url = explode('=', $topic_lists->video);

                    @endphp

                    <lite-youtube style="width:30%" class="rounded-1 border border-2 mb-3 h-100"
                        posterquality="maxresdefault" videoid="{{ $url[1] }}">


                    </lite-youtube>
                    @elseif($topic_lists->type == 'video_local')
                    <div>
                        <video src="{{asset('../../videos/'.$topic_lists->video)}}" controls width="100%"></video>

                    </div>
                @endif
                <p></p>
                {{-- <iframe class="rounded-4 border border-2 mb-3 h-300"
                    src="https://www.youtube.com/embed/{{ $url[1] }}" frameborder="0"></iframe> --}}
            @endforeach


        </div>

    </div>

    <style>
        .relative svg {
            width: 44px;
            /* Ajusta el tamaño del icono */
            height: 44px;
        }

        .hidden div p {
            display: none;

        }

        .hidden div {
            margin: 20px
        }
    </style>
    <div class="mt-5 d-flex justify-content-start" style="height:20px;width:100%">
        {{ $topic_list->links() }}
    </div>
