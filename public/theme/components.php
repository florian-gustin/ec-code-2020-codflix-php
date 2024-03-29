<?php
/******************************
 * -----   MEDIUM CARD  -----
 ****************************/
function mediumCard(String $url = '', String $duration = '', bool $isFavorite = false, int $media_id = null, int $user_id = null, int $index = 0, String $date = null, String $css = 'text-white bg-dark mb-5 mt-5'){
    // handle favorite display
    ?>

    <div id="" class="sizeUp card <?= $css ?>" style="width: 12rem;">
        <a data-toggle="modal" class="previewModal" data-media="<?= $media_id ?>" data-index="<?= $index ?>">
            <img class="card-img-top" src="<?= $url ?>" alt="Card image cap" style="max-height: 245px;">
        </a>
        <button id="" type="button" class="updateFavorite btn btn-danger bmd-btn-icon" data-media="<?= $media_id ?>" data-user="<?= $user_id ?>">
            <i class="material-icons text-danger"><?= ($isFavorite) ? 'favorite' : 'favorite_border' ?></i>
        </button>
        <div class="bg-dark pr-2 pl-2 pt-0 pb-2 rounded mediumCardDuration"><?= $duration ?></div>
    </div>
    <h5 class="text-center font-weight-bold">
        <?= $date != null ? '<span class="badge badge-pill badge-danger">'.$date.'</span>
' : null ?>
    </h5>
    <?php
}


/******************************
 * -----   MODAL DATA  -----
 ****************************/
function modalData(){
    ?>
    <!-- Modal -->
    <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title font-weight-bold" id="dataModalTitle"></h4>
                    <button id="dataModalIsFavorite" type="button" class="updateFavorite btn btn-danger bmd-btn-icon" data-media="" data-user="">
                    </button>
                </div>
                <div class="dropdown-divider mt-3 mb-0"></div>
                <div class="modal-body p-0" id="dataModalVideo">
                    ...video
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-sm btn-outline-primary" id="play" data-media="" data-user="" data-state="" data-season="" data-ep="">PLAY</button>
                    <button type="button" class="btn btn-sm btn-outline-primary" id="pause" data-media="" data-user="" data-state="" data-season="" data-ep="">STOP</button>

                    <p class="text-sm-left p-2" style="font-size: 11px;">Cliquez à la fois sur PLAY ou STOP ici, puis pareil sur le lecteur Youtube afin de simuler le compteur</p>
                </div>

                <div class="dropdown-divider mt-0 mb-4"></div>
                <div class="modal-body p-0" id="">
                    <div class="container" id="isSeries">

                    </div>
                    <div class="row justify-content-center" id="dataModalGenre">
                    </div>
                    <div class="dropdown-divider mt-3 mb-4"></div>
                    <div class="container" id="dataModalDescription">
                    </div>
                    <div class="dropdown-divider mt-3 mb-4"></div>
                    <div class="container pr-5 pl-5" id="">
                        <div class="row justify-content-between">
                            <div class="font-weight-bold" id="">
                                Date de sortie :
                            </div>
                            <h4 class="modal-title text-danger" id="dataModalDate"></h4>
                        </div>

                    </div>
                    <div class="dropdown-divider mt-3 mb-4"></div>
                    <div class="container pr-5 pl-5" id="">
                        <div class="row justify-content-between">
                            <div class="font-weight-bold" id="" style="font-size: 50px;">
                                Note / 10 :
                            </div>
                            <div class="" id="dataModalVoteAverage">

                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider mt-3 mb-4"></div>
                    <div class="container pr-5 pl-5" id="">
                        <div class="row justify-content-between">
                            <div class="font-weight-bold" id=""  style="font-size: 30px;">
                                Popularité :
                            </div>
                            <div class="" id="dataModalPopularity">

                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider mt-3 mb-4"></div>
                    <div class="container pr-5 pl-5" id="">
                        <div class="row justify-content-between">
                            <div class="font-weight-bold" id="">
                                Nombre de vote :
                            </div>
                            <div class="" id="dataModalVoteCount">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php

}

