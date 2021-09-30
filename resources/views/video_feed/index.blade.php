@extends('layouts.app')

@section('content')

<div style="overflow-x: hidden;">
    <h1 class="px-5 mb-5">Video Feed</h1>
    <div class="feed" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('/images/sample_img.png');">
        <div class="header_feed is-flex is-align-items-center">
            <img src="/images/avatar.png">
            <div class="ml-3">
                <h6 class="has-text-weight-semibold">Jakob Smith</h6>
                <p class="is-size-7 has-text-weight-semibold">Dream big. Stay Curious. Be great. Do you</p>
            </div>
        </div>

        <div class="mid_feed">
            <img src="/images/sample_img.png">
        </div>

        <div class="btm_feed">
            <h5 class="has-text-white has-text-weight-semibold">Modern New York Architecture</h5>
            <p class="has-text-weight-semibold">#new_york #times_square #night #crowded #usa #travel</p>
            <div class="options is-flex is-align-items-center is-justify-content-space-between mt-4">
                <div class="is-flex is-align-items-center">
                    <img src="/images/like.png">
                    <img src="/images/heart.png">
                    <img src="/images/thinking.png">
                    <span class="ml-2">256</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/comment.png">
                    <span class="ml-2">3 Comments</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/share.png">
                    <span class="ml-2">Share</span>
                </div>
            </div>
        </div>
    </div>

    <div class="feed" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url('/images/sample_img2.png');">
        <div class="header_feed is-flex is-align-items-center">
            <img src="/images/avatar.png">
            <div class="ml-3">
                <h6 class="has-text-weight-semibold">Jakob Smith</h6>
                <p class="is-size-7 has-text-weight-semibold">Dream big. Stay Curious. Be great. Do you</p>
            </div>
        </div>

        <div class="mid_feed">
            <img src="/images/sample_img2.png">
        </div>

        <div class="btm_feed">
            <h5 class="has-text-white has-text-weight-semibold">Modern New York Architecture</h5>
            <p class="has-text-weight-semibold">#new_york #times_square #night #crowded #usa #travel</p>

            <div class="options is-flex is-align-items-center is-justify-content-space-between mt-4">
                <div class="is-flex is-align-items-center">
                    <div class="box">
                      <input type="checkbox" id="like" class="field-reactions">
                      <div class="is-flex">
                          <img src="/images/react_icon.png">
                          <label for="like" class="label-reactions ml-2">Reaction</label>
                      </div>
                      <div class="toolbox"></div>
                      <label class="overlay" for="like"></label>
                      <button class="reaction-like">
                        <img src="/images/thumb_up_icon_small.png" width="100%">
                        <span class="legend-reaction">Like</span>
                      </button>
                      <button class="reaction-love">
                        <img src="/images/love_icon_small.png" width="100%">
                        <span class="legend-reaction">Love</span>
                      </button>
                      <button class="reaction-haha">
                        <img src="/images/thinking_icon.png" width="100%">
                        <span class="legend-reaction">Hmm...</span>
                      </button>
                      <button class="reaction-wow">
                        <img src="/images/shocked.png" width="100%">
                        <span class="legend-reaction">Wow</span>
                      </button>
                      <button class="reaction-sad">
                        <img src="/images/laughing.png" width="100%">
                        <span class="legend-reaction">Haha</span>
                    </button>
                      <button class="reaction-angry">
                        <img src="/images/thumb_down.png" width="100%">
                        <span class="legend-reaction">Dislike</span>
                    </button>
                    </div>
                </div>
                <div class="is-flex is-align-items-center comment-modal">
                    <img src="/images/comment.png">
                    <span class="ml-2">31 Comments</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/share.png">
                    <span class="ml-2">Share</span>
                </div>
            </div>
        </div>
    </div>

    <div class="feed">
        <div class="header_feed is-flex is-align-items-center" style="position: absolute;">
            <img src="/images/avatar.png">
            <div class="ml-3">
                <h6 class="has-text-weight-semibold">Jakob Smith</h6>
                <p class="is-size-7 has-text-weight-semibold">Dream big. Stay Curious. Be great. Do you</p>
            </div>
        </div>

        <div class="mid_feed">
            <iframe id="video-1" src="https://assets.mixkit.co/videos/preview/mixkit-red-frog-on-a-log-1487-large.mp4" allow="autoplay" style="border:none; width: 100%; height: 100vh;"></iframe>
            <button id="play-btn-1" class="play-btn" onClick="readyVideoPlay(1)"><img src="/images/play.png"></button>
        </div>

        <div class="btm_feed">
            <h5 class="has-text-white has-text-weight-semibold">Time Management Tips</h5>
            <p class="has-text-weight-semibold">#new_york #times_square #night #crowded #usa #travel</p>
            <div class="options is-flex is-align-items-center is-justify-content-space-between mt-4">
                <div class="is-flex is-align-items-center">
                    <img src="/images/like.png">
                    <img src="/images/heart.png">
                    <img src="/images/thinking.png">
                    <span class="ml-2">256</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/comment.png">
                    <span class="ml-2">3 Comments</span>
                </div>
                <div class="is-flex is-align-items-center">
                    <img src="/images/share.png">
                    <span class="ml-2">Share</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="comment-modal" class="modal is-justify-content-flex-end">
    <div class="modal-content">
        <section class="modal-card-head">
            <div class="is-flex is-justify-content-space-between is-align-self-center">
                <h2 class="fs-18 has-text-weight-semibold has-text-black mb-4">3 Comments</h2>
                {{-- <h2 class="fs-18 has-text-weight-semibold has-text-black mb-4">1 Reply</h2> --}}
                <button class="delete comment-modal-close is-block is-pulled-right" aria-label="close"></button>
            </div>

            <div class="inpt_comment is-flex is-align-items-center">
                <img class="profile-icon" src="/images/avatar.png">
                <div class="field ml-3">
                    <textarea class="textarea has-text-weight-semibold is-size-7" type="text" name="" placeholder="Add a public comment" rows="1"></textarea>
                </div>
            </div>
        </section>
        <section class="modal-card-body p-0">
            <div class="border-t">
                <div class="is-flex is-align-items-end p-5">
                    <img class="profile-icon" src="/images/avatar1.png">
                    <div class="ml-2">
                        <label class="help">Nick Richmond • 3 hours ago</label>
                        <p class="fs-14 has-text-weight-semibold">Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited elderly be.</p>
                        <div class="is-flex is-align-items-center is-justify-content-space-between mt-2">
                            <div class="is-flex is-align-items-center">
                                <div class="mr-2">
                                    <label class="is-inline-flex is-justify-content-space-between"><img src="/images/thumbs_up_icon.svg" class="mr-2"> 10</label>
                                </div>
                                <div>
                                    <label class="is-inline-flex is-justify-content-space-between"><img src="/images/thumbs_down-icon.svg" class="mr-2"> 2</label>
                                </div>
                            </div>
                            <button class="button btn-reply is-size-7 has-text-weight-semibold">Reply</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t">
                <div class="is-flex is-align-items-end p-5 active-comment">
                    <img class="profile-icon" src="/images/avatar2.png">
                    <div class="ml-2">
                        <label class="help">Frank Remy • 16 hours ago</label>
                        <p class="fs-14 has-text-weight-semibold">Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on. Increasing sufficient everything men him admiration unpleasing</p>
                        <div class="is-flex is-align-items-center is-justify-content-space-between mt-2">
                            <div class="is-flex is-align-items-center">
                                <div class="mr-2">
                                    <label class="is-inline-flex is-justify-content-space-between"><img src="/images/thumbs_up_icon.svg" class="mr-2"> 10</label>
                                </div>
                                <div class="mr-2">
                                    <label class="is-inline-flex is-justify-content-space-between"><img src="/images/thumbs_down-icon.svg" class="mr-2"> 2</label>
                                </div>
                                <div>
                                    <label class="is-inline-flex is-justify-content-space-between"><img src="/images/engage_icon.svg" class="mr-2"> 1</label>
                                </div>
                            </div>
                            <button class="button btn-reply is-size-7 has-text-weight-semibold">Reply</button>
                        </div>
                    </div>
                </div>
                <div class="inpt_comment is-flex is-align-items-center p-4">
                    <img class="profile-icon" src="/images/avatar.png">
                    <div class="field ml-3">
                        <textarea class="textarea has-text-weight-semibold is-size-7" type="text" name="" placeholder="Add a public comment" rows="1"></textarea>
                    </div>
                </div>
            </div>

            <div class="border-t">
                <div class="is-flex is-align-items-end p-5">
                    <img class="profile-icon" src="/images/avatar3.png">
                    <div class="ml-2">
                        <label class="help">Elise Morgan • 2 days ago</label>
                        <p class="fs-14 has-text-weight-semibold">Still court no small think death so an wrote. Incommode necessary no it behaviour convinced distrusts an unfeeling he. Could death since do we hoped is in.</p>
                        <div class="is-flex is-align-items-center is-justify-content-space-between mt-2">
                            <div class="is-flex is-align-items-center">
                                <div class="mr-2">
                                    <label class="is-inline-flex is-justify-content-space-between"><img src="/images/thumbs_up_icon.svg" class="mr-2"> 10</label>
                                </div>
                                <div>
                                    <label class="is-inline-flex is-justify-content-space-between"><img src="/images/thumbs_down-icon.svg" class="mr-2"> 2</label>
                                </div>
                            </div>
                            <button class="button btn-reply is-size-7 has-text-weight-semibold">Reply</button>
                        </div>
                    </div>
                </div>
                <div class="inpt_comment is-flex is-align-items-center p-4">
                    <img class="profile-icon" src="/images/avatar.png">
                    <div class="field ml-3">
                        <textarea class="textarea has-text-weight-semibold is-size-7" type="text" name="" placeholder="Add a public comment" rows="1"></textarea>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection

@push('js')
    <script>
        (function (){
            // Open modal
            var modal = document.querySelector('#comment-modal');

            document.querySelector('.comment-modal').addEventListener('click', function() {
                modal.classList.toggle('is-active');
            console.log('ok1')
            });

            document.querySelector('.comment-modal-close').addEventListener('click', function() {
                modal.classList.toggle('is-active');
            });

        })();

        function readyVideoPlay(id) {
            var iframe = document.getElementById("video-" + id);
            var playbtn = document.getElementById("play-btn-" + id);

            iframe.src += "?autoplay=1&enablejsapi=1";
            playbtn.classList.toggle('is-hidden')
        }
    </script>
@endpush
